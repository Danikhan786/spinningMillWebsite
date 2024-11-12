@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Property</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="mb-3">
                    <label for="propertyName" class="form-label"><strong>Property Name:</strong></label>
                    <input 
                        type="text" 
                        name="propertyName" 
                        class="form-control @error('propertyName') is-invalid @enderror" 
                        id="propertyName" 
                        placeholder="Property Name" 
                        value="{{ old('propertyName') }}">
                    @error('propertyName')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="propertyPrice" class="form-label"><strong>Property Price:</strong></label>
                    <input 
                        type="text" 
                        name="propertyPrice" 
                        class="form-control @error('propertyPrice') is-invalid @enderror" 
                        id="propertyPrice" 
                        placeholder="Property Price" 
                        value="{{ old('propertyPrice') }}">
                    @error('propertyPrice')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="bed" class="form-label"><strong>Bed:</strong></label>
                    <input 
                        type="number" 
                        name="bed" 
                        class="form-control @error('bed') is-invalid @enderror" 
                        id="bed" 
                        placeholder="Number of Beds" 
                        value="{{ old('bed') }}">
                    @error('bed')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="bath" class="form-label"><strong>Bath:</strong></label>
                    <input 
                        type="number" 
                        name="bath" 
                        class="form-control @error('bath') is-invalid @enderror" 
                        id="bath" 
                        placeholder="Number of Baths" 
                        value="{{ old('bath') }}">
                    @error('bath')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="propertySqft" class="form-label"><strong>Square Feet:</strong></label>
                    <input 
                        type="text" 
                        name="propertySqft" 
                        class="form-control @error('propertySqft') is-invalid @enderror" 
                        id="propertySqft" 
                        placeholder="Square Feet" 
                        value="{{ old('propertySqft') }}">
                    @error('propertySqft')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="location" class="form-label"><strong>Location:</strong></label>
                    <input 
                        type="text" 
                        name="location" 
                        class="form-control @error('location') is-invalid @enderror" 
                        id="location" 
                        placeholder="Location" 
                        value="{{ old('location') }}">
                    @error('location')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="pricePerSqft" class="form-label"><strong>Price per Sqft:</strong></label>
                    <input 
                        type="text" 
                        name="pricePerSqft" 
                        class="form-control @error('pricePerSqft') is-invalid @enderror" 
                        id="pricePerSqft" 
                        placeholder="Price per Square Feet" 
                        value="{{ old('pricePerSqft') }}">
                    @error('pricePerSqft')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="propertyImage" class="form-label"><strong>Primary Image:</strong></label>
                    <input 
                        type="file" 
                        name="propertyImage" 
                        class="form-control @error('propertyImage') is-invalid @enderror" 
                        id="propertyImage">
                    @error('propertyImage')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="propertyImages" class="form-label"><strong>Additional Images:</strong></label>
                    <input 
                        type="file" 
                        name="propertyImages[]" 
                        class="form-control @error('propertyImages') is-invalid @enderror" 
                        id="propertyImages" 
                        multiple>
                    @error('propertyImages')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <button type="submit" class="btn btn-success">Submit</button>
            </form>            
        </div>
    </div>
</div>
@endsection
