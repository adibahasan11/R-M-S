<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        DB::insert('insert into contacts (name, email, subject, message) values(?, ?, ?, ?)',[$name, $email, $subject, $message]);
        Toastr::success('Your message successfully send.','Success',["positionClass" => "toast-top-right"]);
        return redirect('/');
    }
}
