<?php

namespace App\Http\Controllers;


use App\Models\Property;
use App\Models\PropertyInquiry;
use App\Models\Contact;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        $properties = Property::count();
        $inquiries = PropertyInquiry::count();
        $contacts = Contact::count();
        
        return view('dashboard.index',compact('properties','inquiries','contacts'));
    }
    public function adminProperty()
    {
        $properties = Property::all();
        return view('properties.index', compact('properties'));
    }

    public function propertyInquery(){
        $inquiries = PropertyInquiry::all();
        return view('dashboard.propertyInquery', compact('inquiries'));
    }
    public function gellAllContacts(){
        $contacts = Contact::all();
        return view('dashboard.contact', compact('contacts'));
    }
}
