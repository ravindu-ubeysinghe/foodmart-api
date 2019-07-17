<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactMessage;

class FormController extends Controller
{
    public function contactSubmit(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'msg' => 'required',
        'email' => 'required'
      ]);

      $message = new ContactMessage;

      $message->name = $request->input('name');
      $message->msg = $request->input('msg');
      $message->email = $request->input('email');
      $message->save();

      return redirect('/contact')->with('feedback', 'Thanks for contacting us, we\'ll be in touch with you shortly');
    }
}
