@extends('frontend.layout.app')
 
@section('content')

  <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Emeneties
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                <a class="text-white" href="{{route('index')}}">Home</a>
                </li>
                <li class="breadcrumb-item text-primary active" aria-current="page">
                   Emeneties
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
           <h3 class="text-primary pt-4 pb-2 text-uppercase">Emeneties</h3>

           <p class="text-center">
           Redeveloped an outdated industrial building into a modern,
           eco-friendly residential facility with green technologies Renovated
           a historic building into luxury apartments with eco-friendly living
           spaces Transformed a derelict structure into a residential complex
           with energy-efficient features and modern amenities
           </p>
       </div>
       </div>

       <!-- Service Start -->
       <div class="container-xxl py-5">
       <div class="container">
           <div class="row g-5 align-items-end mb-5"></div>

           <div class="row g-4 justify-content-center">
           <!-- Eco-Friendly Innovations -->
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
               <div class="service-item bg-light overflow-hidden h-100">
               <img class="img-fluid" src="frontend/img/asset/1.png" alt="" />
               <div
                   class="service-text position-relative text-center h-100 p-4"
               >
                   <h5 class="mb-3">Building Construction</h5>
                   <p>
                   Our construction services blend modern techniques with
                   eco-friendly innovations, ensuring sustainable and efficient
                   development.
                   </p>
               </div>
               </div>
           </div>

           <!-- Smart Home Features -->
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
               <div class="service-item bg-light overflow-hidden h-100">
               <img class="img-fluid" src="frontend/img/asset/25.png" alt="" />
               <div
                   class="service-text position-relative text-center h-100 p-4"
               >
                   <h5 class="mb-3">Home Maintenance</h5>
                   <p>
                   Keep your home running smoothly with regular maintenance
                   services tailored to extend the life of your property.
                   </p>
               </div>
               </div>
           </div>

           <!-- Historic Restoration -->
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
               <div class="service-item bg-light overflow-hidden h-100">
               <img class="img-fluid" src="frontend/img/asset/15.png" alt="" />
               <div
                   class="service-text position-relative text-center h-100 p-4"
               >
                   <h5 class="mb-3">Renovation and Painting</h5>
                   <p>
                   Transform spaces with expert renovation and eco-friendly
                   painting solutions designed to enhance your lifestyle.
                   </p>
               </div>
               </div>
           </div>
           </div>
       </div>
       {{-- <div class="wow fadeInUp pt-4 text-center" data-wow-delay="0.3s">
           <a class="btn btn-primary py-3 px-5" href=""> My Projects</a>
       </div> --}}
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
