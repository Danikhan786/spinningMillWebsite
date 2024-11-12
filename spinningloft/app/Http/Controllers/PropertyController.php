<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'propertyName' => 'required|string|max:255',
            'propertyPrice' => 'required|string',
            'bed' => 'required|integer',
            'bath' => 'required|integer',
            'propertySqft' => 'required|string',
            'location' => 'required|string|max:255',
            'pricePerSqft' => 'required|string',
            'propertyImage' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048', // Corrected this line
            'propertyImages.*' => 'nullable|file|image|mimes:jpeg,png,jpg,gif|max:2048', // Also corrected additional images rule
        ]);
    
        // If validation fails, log the error and redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Create a new property instance
        $property = new Property();
        $property->propertyName = $request->input('propertyName');
        $property->propertyPrice = $request->input('propertyPrice');
        $property->bed = $request->input('bed');
        $property->bath = $request->input('bath');
        $property->propertySqft = $request->input('propertySqft');
        $property->location = $request->input('location');
        $property->pricePerSqft = $request->input('pricePerSqft');
    
        // Handle primary image upload
        if ($request->hasFile('propertyImage')) {
            $propertyImage = $request->file('propertyImage');
            $propertyImagePath = $propertyImage->store('property_images', 'public');
            $property->propertyImage = $propertyImagePath;
        }
    
        // Handle additional images upload
        if ($request->hasFile('propertyImages')) {
            $additionalImages = [];
            foreach ($request->file('propertyImages') as $image) {
                $additionalImages[] = $image->store('property_images', 'public');
            }
            $property->propertyImages = json_encode($additionalImages);
        }
    
        // Generate unique slug for property name
        $property->slug = Property::generateUniqueSlug($request->input('propertyName'));
    
        // Save the property
        $property->save();
    
        return redirect()->route('adminProperty')->with('success', 'Property added successfully.');
    }
    

    public function edit($id)
    {
        // Find the property by ID
        $properties = Property::findOrFail($id);
        $additionalImages = json_decode($properties->propertyImages); // Ensure this is an array

        // Return the edit view with the property data
        return view('properties.edit', compact('properties','additionalImages'));
    }


    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $request->validate([
            'propertyName' => 'required|string|max:255',
            'propertyPrice' => 'required|string',
            'bed' => 'required|integer',
            'bath' => 'required|integer',
            'propertySqft' => 'required|string',
            'location' => 'required|string|max:255',
            'pricePerSqft' => 'required|string',
            'propertyImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'propertyImages.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

          // Find the property by ID
        $property = Property::findOrFail($id);

        // Delete old primary image if a new one is uploaded
        if ($request->hasFile('propertyImage')) {
            // Delete the old image
            Storage::disk('public')->delete($property->propertyImage);

            // Store the new image
            $propertyImagePath = $request->file('propertyImage')->store('property_images', 'public');
            $property->propertyImage = $propertyImagePath;
        }

        // Update the property fields
        $property->propertyName = $request->input('propertyName');
        $property->propertyPrice = $request->input('propertyPrice');
        $property->bed = $request->input('bed');
        $property->bath = $request->input('bath');
        $property->propertySqft = $request->input('propertySqft');
        $property->location = $request->input('location');
        $property->pricePerSqft = $request->input('pricePerSqft');

        // Handle additional images (if uploaded)
        if ($request->hasFile('propertyImages')) {
            // Delete existing additional images
            $existingImages = json_decode($property->propertyImages, true);
            if ($existingImages) {
                foreach ($existingImages as $image) {
                    Storage::disk('public')->delete($image);
                }
            }

            // Store new additional images
            $additionalImages = [];
            foreach ($request->file('propertyImages') as $image) {
                $additionalImages[] = $image->store('property_images', 'public');
            }
            $property->propertyImages = json_encode($additionalImages);
        }

        // Save the property
        $property->save();

        return redirect()->route('adminProperty')->with('success', 'Property updated successfully.');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);

        // Delete the main image from storage
        Storage::disk('public')->delete($property->propertyImage);
        
        // Optionally, delete additional images if they are stored
        // Example: if you stored additional images as JSON, you might handle that here
        // $images = json_decode($property->propertyImages, true);
        // foreach ($images as $image) {
        //     Storage::disk('public')->delete($image);
        // }

        // Delete the property record from the database
        $property->delete();

        return redirect()->route('adminProperty')->with('success', 'Property deleted successfully.');
    }

}
