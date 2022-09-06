<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Mail\sendMail;
use App\Http\Controllers\Controller;

class mailController extends Controller
{
    public function sendMail(Request $req)
    {
        $data=[
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message,
        ];
        Mail::to('shakilsb4646@gmail.com')->send(new sendMail($data));
        return redirect('/message'); 
    }
}