<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(Request $request){
      $title = $request->input('title');
      $content = $request->input('emailContent');

      Mail::send(emails.send), ['title' => $title, 'emailContent' => $emailContent],
      function($message)
      {
        $message->from ('me@example.com', 'Beth Salvatore');
        $message->to ('bethsalvatore2018@gmail.com');
      });

      return respons()->json(['message' => 'Request completed']);
    }
}
