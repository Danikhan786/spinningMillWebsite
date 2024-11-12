@extends('frontend.layout.app')
 
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">Property</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="{{ route('index') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-white" href="{{ route('property') }}">Property</a>
                </li>
                <li class="breadcrumb-item text-primary active" aria-current="page">
                    {{ $property->propertyName }}
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Property Detail Start -->
<div class="container">
    {{-- <div class="row g-5 align-items-end mb-5">
        <div class="text-center">
            <h3 class="text-primary pt-4 pb-2 text-uppercase">{{ $property->propertyName }}</h3>
        </div>
    </div> --}}

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <!-- Carousel for Property Images -->
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Primary Image as Active Slide -->
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/' . $property->propertyImage) }}" class="d-block w-100" alt="Primary Image">
                    </div>
                    <!-- Loop through Additional Images -->
                    @if($propertyImages)
                        @foreach($propertyImages as $image)
                            <div class="carousel-item">
                                <img src="{{ asset('storage/' . $image) }}" class="d-block w-100" alt="Additional Image">
                            </div>
                        @endforeach
                    @endif
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="mt-4">
                <h3 class="text-primary pt-4 pb-2 text-uppercase">{{ $property->propertyName }}</h3>
                <h3>$ {{ $property->propertyPrice }}</h3>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div><b>{{ $property->bed }} </b> Bed</div>
                    <div><b>{{ $property->bath }} </b> Bath</div>
                    <div><b>{{ $property->propertySqft }} </b> sqft</div>
                </div>
                <p class="mt-3">{{ $property->location }} </p>
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <i class="fa-solid fa-ruler-combined fs-4 text-dark"></i>
                    </div>
                    <div>
                        <h5>$ {{ $property->pricePerSqft }}</h5>
                        <p>Price per sqft</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Property Details -->
        <div class="col-lg-4 col-md-4">
            <h4>More About this property</h4>
            <form action="{{ route('property.storeInquiry', $property->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name </label>
                    <input type="text" class="form-control" name="full_name" id="fullName" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>            
        </div>
    </div>
</div>
<!-- Property Detail End -->

<!-- Contact Start -->
<div class="containerrounded p-5">
    <div class="row g-5 align-items-end">
        <div class="text-center">
            <h3 class=" text-uppercase">Interested in COntact  with WhatsApp?</h3>
            <div class="whatsAppBtn mt-4">
                <a aria-label="Chat on WhatsApp" href="https://wa.me/+7742621252"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Contact Start -->
<div class="container bg-dark rounded p-5">
    <div class="row g-5 align-items-end">
        <div class="text-center">
            <h3 class="text-primary text-uppercase">Interested in collaborating with us?</h3>
            <p>Reach out today to explore the solutions we can create for you. Request a time to connect with one of our experts.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary py-3 px-5">Contact us</a>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
