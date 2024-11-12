@extends('frontend.layout.app')
 
@section('content')

  <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
             Property
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                <a class="text-white" href="{{route('index')}}">Home</a>
                </li>
                <li class="breadcrumb-item text-primary active" aria-current="page">
                  Property
                </li>
            </ol>
            </nav>
        </div>
    </div>
<!-- Page Header End -->

   <!-- Project start  -->

   <div class="container">
       <div class="row g-5 align-items-end mb-5">
       <div class="text-center">
           <h3 class="text-primary pt-4 pb-2 text-uppercase">Property</h3>
       </div>
       </div>

         <!-- Service Start -->
         <div class="container-xxl py-5">
            <div class="container">
                {{-- <div class="row g-5 align-items-end mb-5"></div> --}}
                <div class="row g-4 justify-content-center">
                    @forelse ($properties as $property)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-light overflow-hidden h-100">
                            <img class="rounded-5"src="{{ asset('storage/' . $property->propertyImage) }}" width="100%" height="250px" alt="" />
                            <div class="position-relative h-100 p-4"S>
                                <h6 class="mb-3">{{ $property->propertyName }}</h6>
                                <h5 class="mb-3">$ {{ $property->propertyPrice }}</h5>
                                <div class="d-flex justify-content-between align-iterm-center flex-wrap">
                                    <div><b>{{ $property->bed}} </b> Bed</div>
                                    <div><b>{{ $property->bath}} </b> Bath</div>
                                    <div><b>{{ $property->propertySqft}} </b> sqft</div>
                                </div>
                                <p class="mt-3">{{ $property->location}} </p>
                                <div class="text-center">
                                    <a class="bg-dark py-2 px-3 rounded-pill" href="{{ route('propertybyId', $property->id) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <p>There are no property</p>
                @endforelse
                </div>
            </div>
        </div>
   </div>

   <!-- Project end --> 

    <!-- contact start -->
    <div class="container bg-dark rounded p-5">
        <div class="row g-5 align-items-end">
            <div class="text-center">
                <h3 class="text-primary text-uppercase">
                Interested in collaborating with us?
                </h3>

                <p class="text-center">
                Reach out today to explore the solutions we can create for you.
                Request a time to connect with one of our experts.
                </p>
                <a href="{{route('contact')}}" class="btn btn-primary py-3 px-5">Contact us</a>
            </div>
        </div>
    </div>
    <!-- contact end -->

 @endsection
