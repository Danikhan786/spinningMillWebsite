@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Property</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('properties.update', $properties->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="propertyName" class="form-label"><strong>Property Name:</strong></label>
                    <input 
                        type="text" 
                        name="propertyName" 
                        value="{{ $properties->propertyName }}"
                        class="form-control @error('propertyName') is-invalid @enderror" 
                        id="propertyName" 
                        placeholder="Property Name">
                    @error('propertyName')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="propertyPrice" class="form-label"><strong>Property Price:</strong></label>
                    <input 
                        type="text" 
                        name="propertyPrice" 
                        value="{{ $properties->propertyPrice }}"
                        class="form-control @error('propertyPrice') is-invalid @enderror" 
                        id="propertyPrice" 
                        placeholder="Property Price">
                    @error('propertyPrice')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="bed" class="form-label"><strong>Bed:</strong></label>
                    <input 
                        type="number" 
                        name="bed" 
                        value="{{ $properties->bed }}"
                        class="form-control @error('bed') is-invalid @enderror" 
                        id="bed" 
                        placeholder="Bed">
                    @error('bed')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="bath" class="form-label"><strong>Bath:</strong></label>
                    <input 
                        type="number" 
                        name="bath" 
                        value="{{ $properties->bath }}"
                        class="form-control @error('bath') is-invalid @enderror" 
                        id="bath" 
                        placeholder="Bath">
                    @error('bath')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="propertySqft" class="form-label"><strong>Square Feet:</strong></label>
                    <input 
                        type="text" 
                        name="propertySqft" 
                        value="{{ old('propertySqft', $properties->propertySqft) }}" 
                        class="form-control @error('propertySqft') is-invalid @enderror" 
                        id="propertySqft" 
                        placeholder="Property Sqft"
                        min="1"> <!-- Setting a minimum value -->
                    @error('propertySqft')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                

                <div class="mb-3">
                    <label for="location" class="form-label"><strong>Location:</strong></label>
                    <input 
                        type="text" 
                        name="location" 
                        value="{{ $properties->location }}"
                        class="form-control @error('location') is-invalid @enderror" 
                        id="location" 
                        placeholder="Location">
                    @error('location')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="pricePerSqft" class="form-label"><strong>Price per Sqft:</strong></label>
                    <input 
                        type="text" 
                        name="pricePerSqft" 
                        value="{{ $properties->pricePerSqft }}"
                        class="form-control @error('pricePerSqft') is-invalid @enderror" 
                        id="pricePerSqft" 
                        placeholder="Price Per Sqft">
                    @error('pricePerSqft')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="propertyImage" class="form-label"><strong>Primary Image:</strong></label>
                    @if($properties->propertyImage)
                        <div class="mb-2">
                            <img src="{{ asset('storage/'.$properties->propertyImage) }}" alt="Current Property Image" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    @endif
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
                    @if($properties->propertyImages)
                        <div class="mb-2">
                            @if(is_array($additionalImages) || is_object($additionalImages))
                            @foreach($additionalImages as $image)
                                <img src="{{ asset('storage/'.$image) }}" width="30%" alt="Additional Property Image">
                            @endforeach
                        @else
                            <p>No additional images available.</p>
                        @endif
                        </div>
                    @endif
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

                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
