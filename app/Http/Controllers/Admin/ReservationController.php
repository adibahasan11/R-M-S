<?php

namespace App\Http\Controllers\Admin;

use DB;
//use App\Notifications\ReservationConfirmed;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = DB::select('select * from reservations');
        return view('admin.reservation.index',['reservations'=>$reservations]);
        //return view('admin.reservation.index',compact('reservations'));
    }
    public function status($id){
        $reservation = Reservation::find($id);
        $status = 'Confirmed';
        $reservation->status1 = $status;
        //DB::update('UPDATE reservations 
        //    SET status1 = ?
        //    WHERE id = ?',[$status, $id]);
        $reservation->save();
        //Notification::route('mail',$reservation->email )
          //  ->notify(new ReservationConfirmed());
        Toastr::success('Reservation successfully confirmed.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function destory($id){
        Reservation::find($id)->delete();
        Toastr::success('Reservation successfully deleted.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
