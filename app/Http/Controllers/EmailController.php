<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use App\Email;
use App\Response;
use App\Message;




class EmailController extends Controller
{


public function mail(){

  $message = Message::find($id);

  Email::send('bethsalvatore2018@gmail.com')->send(new SendMailable($message));



        $to_name = $message -> username;
        $to_email = $message -> email;
        $title = $message -> name;
        $body = $message -> response;

        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
             $message->to($to_email, $to_name)
                     ->subject('Test');
             $message->from('FROM_EMAIL_ADDRESS','Beth');
         });

         DB::table('messages')->insert(
           ['responded_on' => Carbon::now()
        ]);

        return view('messages.show', $message -> id)->with('success', 'Response was sent successfully!');


}
  // $response = Response::find($id);
  // $this->response = $response;

}
