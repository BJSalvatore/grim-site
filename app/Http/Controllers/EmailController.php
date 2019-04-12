<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Message;




class EmailController extends Controller
{

      // $to_name = $message -> username;
      // $to_email = $message -> email;
      // $name = $message -> name;
      // $body = $message -> response;
      // $data = array('name'=> $name, "body" => $body);

      // Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
      //     $message->to($to_email, $to_name)
      //             ->subject('Test');
      //     $message->from('FROM_EMAIL_ADDRESS','Beth');
      // });
      //
      // DB::table('messages')->insert(
      //   ['responded_on' => Carbon::now()
      // ]);

      // return response()->json(['message' => 'Request completed']);
    // }

}
