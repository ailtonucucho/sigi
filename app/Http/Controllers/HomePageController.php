<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    //

    public function index()
    {
        $properties = Property::where('status', 'available')->get();

        $users = User::count();

        $properties_rent = $properties->where('stype', 'rent')->count();
        $properties_sale = $properties->where('stype', 'sale')->count();

        $districts = District::withCount('properties')
            ->orderByDesc('properties_count')
            ->get();
        return view('welcome', compact('properties', 'users', 'properties_rent', 'properties_sale', 'districts'));
    }

    public function about()
    {
        return view('about');
    }

    public function agent()
    {
        $users = User::get();
        return view('agent', compact('users'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function property()
    {

        $properties = Property::when(request('user_id'), fn($query) =>
            $query->where('user_id', request('user_id')))
            ->when(request('type'), fn($query) =>
            $query->where('type', request('type')))
            ->when(request('stype'), fn($query) =>
            $query->where('stype', request('stype')))
            ->when(request('city'), fn($query) =>
            $query->whereHas('districtname', fn($q) =>
            $q->where('name','like' , "%".request('city')."%")
        ))
            ->where('status', 'available')->get();

        $properties_featured = $properties->where('isfeatured', 1);
        $properties_recent = Property::where('status', 'available')
            ->orderByDesc('id')
            ->limit(2)
            ->get();

        return view('property', compact('properties', 'properties_featured', 'properties_recent'));
    }

    public function propertydetails(string $id)
    {
        $property = Property::find($id);
        $properties_recent = Property::where('status', 'available')
            ->orderByDesc('id')
            ->limit(2)
            ->get();

        return view('propertydetail', compact('property', 'properties_recent'));
    }

    public function feature()
    {
        $properties = Property::where('user_id', Auth::user()->id)->get();
        return view('feature', compact('properties'));
    }

    public function admin(){
        return view('admin.login');
    }
}
