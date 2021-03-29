<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\Category;
use App\Models\Item;
use App\Models\Reservation;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        /*$categoryCount = Category::count();
        $itemCount = Item::count();
        $sliderCount = Slider::count();
        $reservations = Reservation::where('status',false)->get();
        $contactCount = Contact::count();
        return view('admin.dashboard',compact('categoryCount','itemCount','sliderCount','reservations','contactCount'));*/
    
        $categories = Category::all();
        $items = DB::select('select * from items, categories where items.category_id = categories.id');
        return view('welcomePage',compact('categories','items'));
    }
}
