<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\PropertyInquiry;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;



use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('frontend.index', compact('properties'));
    }
    public function property(){
        $properties = Property::all();
        return view('frontend.properties', compact('properties'));
    }
    public function propertybyId($id) {
        $property = Property::findOrFail($id);
        $propertyImages = json_decode($property->propertyImages, true); // Decode additional images
        return view('frontend.propertyById', compact('property', 'propertyImages'));
    }
    public function about(){
        return view('frontend.about');
    }
    public function service(){
        return view('frontend.service');
    }
    public function project(){
        return view('frontend.project');
    }
    public function contact(){
        return view('frontend.contact');
    }

    public function contactStore(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Create a new contact entry
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    
    public function storeInquiry(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);
    
        // Store the inquiry in the database
        PropertyInquiry::create([
            'property_id' => $id,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
    
        // Email data
        $emailData = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];
    
        // Email recipient (client's email address)
        $clientEmail = 'spinningmilllofts@gmail.com'; // Replace with your client's email
    
        // Send the email
        Mail::send('emails.inquiry', ['data' => $emailData], function ($message) use ($clientEmail) {
            $message->to($clientEmail)
                    ->subject('New Property Inquiry');
        });
    
        // Redirect back with a success message
        return redirect()->route('propertybyId', ['id' => $id])
                         ->with('success', 'Your message has been submitted successfully. We will contact you soon!');
    }
    

    // public function login(){
    //     return view('authentication.login');
    // }
}
