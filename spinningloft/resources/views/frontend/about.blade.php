@extends('frontend.layout.app')
 
@section('content')

   <!-- Page Header Start -->
   <div
   class="container-fluid page-header py-5 mb-5 wow fadeIn"
   data-wow-delay="0.1s" >
   <div class="container text-center py-5">
     <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
     <nav aria-label="breadcrumb animated slideInDown">
       <ol class="breadcrumb justify-content-center mb-0">
         <li class="breadcrumb-item">
           <a class="text-white" href="{{route('index')}}">Home</a>
         </li>
 
         <li class="breadcrumb-item text-primary active" aria-current="page">
           About
         </li>
       </ol>
     </nav>
   </div>
 </div>
 <!-- Page Header End -->

   <!-- About Start -->
   <div class="container-xxl py-5">
       <div class="container">
       <div class="row g-5">
           <div class="col-lg-6">
               <div class="position-relative overflow-hidden ps-5 h-100">
                   <img class="w-100" src="frontend/img/asset/2.png" alt="" style="object-fit: cover" />
               </div>
           </div>
           <div class="col-lg-6">
               <div class="h-100">
                   <div class="border-start border-5 border-primary ps-4 mb-5">
                   <h6 class="text-body text-uppercase mb-2">About Us</h6>
                   <h1 class="display-6 mb-0">Luxury Living in a Historic Mill</h1>
                   </div>
                   <p class="pt-4">
                   Spinning Mill Lofts blends modern luxury with rich historical
                   roots in Millbury, Massachusetts. Set in a building that
                   originally operated with hydroelectric energy, each unit offers
                   a unique opportunity to experience the perfect combination of
                   modern comforts and historical elegance.
                   </p>
                   <p class="mb-4 pt-4">
                   Our 18 meticulously designed two-bedroom units incorporate
                   eco-friendly innovations like solar panels, green roofs, and
                   energy-efficient appliances, allowing residents to reduce their
                   environmental footprint while enjoying cost savings.
                   </p>
                   <div class="border-top mt-4 pt-4">
                   <div class="row g-4">
                       <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                       <i
                           class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                       ></i>
                       <h6 class="mb-0">Ontime Services</h6>
                       </div>
                       <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                       <i
                           class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                       ></i>
                       <h6 class="mb-0">24/7 Availability</h6>
                       </div>
                       <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                       <i
                           class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                       ></i>
                       <h6 class="mb-0">Verified Professionals</h6>
                       </div>
                   </div>
                   </div>
               </div>
           </div>
       </div>
       </div>
   </div>
   <!-- About End -->

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
