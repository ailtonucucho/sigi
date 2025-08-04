<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::where('status', 'available')->get();

        $users = User::count();
        $users_admin = User::where('role','admin')->count();
        $users_agent = User::where('role','agent')->count();
        $users_user = User::where('role','user')->count();

        // $properties = Property::count();
        $properties_apartment = Property::where('type','apartment')->count();
        $properties_house = Property::where('type','house')->count();
        $properties_building = Property::where('type','building')->count();
        $properties_flat = Property::where('type','flat')->count();
        

        $properties_rent = $properties->where('stype', 'rent')->count();
        $properties_sale = $properties->where('stype', 'sale')->count();
        $districts = District::withCount('properties')
                            ->orderByDesc('properties_count')
                            ->limit(8)->get();
        if(Auth::check()){
            if(Auth::user()->role === 'admin'){
                return view('admin.dashboard',compact('users','users_agent','properties','properties_apartment','properties_house','properties_building','properties_flat','properties_sale','properties_rent'));
            }
        }


        return view('welcome', compact('properties', 'users', 'properties_rent', 'properties_sale','districts'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function submitproperty(){
        return view('property.submitproperty');
    }
}
