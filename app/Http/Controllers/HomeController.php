<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use App\Models\Reservation;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$sliders = Slider::all();
        $items = Item::all();
        $categories = Category::all();
        $reservations = Reservation::where('status1','Pending')->get();
        $contact = Contact::all();
        return view('adminHome',compact('contact','reservations','categories','items'));

        //return view('welcome');
    }
    public function index_dashboard()
    {
        //
    }
}
