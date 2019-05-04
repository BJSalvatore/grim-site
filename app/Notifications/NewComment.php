<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewComment extends Notification
{
    use Queueable;

    private $new_comment;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Comment $new_comment)
    {
        $this->new_comment= $new_comment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {


        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('A new comment has been added')
                    ->action('Approve Comment', url('/pages/approval', $this->new_comment->id));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $comment = Comment::create([
          'name' => $data['name'],
          'username' => $data['username'],
          'email' => $data['email'],
          'comment' => $data['comment'],
          'post_id' => $data['post_id'],
        ]);

        $comment = Comment::where('approved', 0)->();
        if ($admin){
          $admin->notify(new NewComment($new_comment));
        }
        return
            $comment;

    }
}
