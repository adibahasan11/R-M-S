<?php

namespace App\Http\Controllers;

use DB;
use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;


class ReservationController extends Controller
{
    public function reserve(Request $request){
        
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $date_and_time = $request->input('date_and_time');
        $message = $request->input('message');
        $status = 'Pending';
        DB::insert('insert into reservations (name, phone, email, date_and_time, status1, message) values(?, ?, ?, ?, ?, ?)',[$name, $phone, $email, $date_and_time, $status, $message]);
        Toastr::success('Reservation request sent successfully. we will confirm to you shortly','Success',["positionClass" => "toast-top-right"]);
        return redirect('/');
    }
}
