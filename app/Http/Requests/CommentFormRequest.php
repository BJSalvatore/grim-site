<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required|max:255',
          'username' => 'required|max:255',
          'email' => 'required|max:255',
          'comment' => 'required|min:5|max:2000',
        ];
    }

    public function messages()
    {
      return [
        'name.required' => 'What\'s your name?',
        'name.max' => 'Can you shorten your name a bit?',
        'username.required' => 'Don\'t you want everyone to know who posted this?',
        'username.max' => 'How can you remember all of that?! Shorten this up, please.',
        'email.required' => 'Your email is required',
        'email.max' => 'Your email is too long.',
        'message.required' => 'Don\'t leave without telling us how you feel!',
        'message.min' 'We know you have more to say. Your message must be longer',
        'message.max' => 'Wow! You have a lot to say! If it won\'t fit here, continue on another comment.'
      ];
    }
}
