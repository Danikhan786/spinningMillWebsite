@extends('frontend.layout.app')
 
@section('content')


       <!-- Page Header Start -->
       <div
       class="container-fluid page-header py-5 mb-5 wow fadeIn"
       data-wow-delay="0.1s"
     >
       <div class="container text-center py-5">
         <h1 class="display-4 text-white animated slideInDown mb-4">
           Features
         </h1>
         <nav aria-label="breadcrumb animated slideInDown">
           <ol class="breadcrumb justify-content-center mb-0">
             <li class="breadcrumb-item">
               <a class="text-white" href="{{route('index')}}">Home</a>
             </li>
             <li class="breadcrumb-item text-primary active" aria-current="page">
                Features
             </li>
           </ol>
         </nav>
       </div>
     </div>
     <!-- Page Header End -->

   <!-- Service Start -->
   <div class="container-xxl py-5">
       <div class="container">
       <div class="row g-5 align-items-end mb-5">
           <div class="text-center">
           <h3 class="text-primary text-uppercase">Features</h3>
           {{-- <h2 class="display-6 mb-0">
               Sustainable Living & Historic Restoration
           </h2> --}}
           <p class="text-center p-2">
               The Spinning Mill Lofts project in Millbury, Massachusetts
               offers a compelling combination of sustainable living and historic
               restoration. Set within a historic mill that originally operated
               on hydroelectric power, the project transforms the space into
               modern luxury lofts while honoring its past. Each unit
               incorporates eco-friendly innovations like solar panels, green
               roofs, and energy-efficient appliances, ensuring a reduced
               environmental impact and lower utility costs.
           </p>
           </div>
       </div>

       <div class="row g-4 justify-content-center">
           <!-- Eco-Friendly Innovations -->
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
           <div class="service-item bg-light overflow-hidden h-100">
               <img class="img-fluid" src="frontend/img/asset/18.png" alt="" />
               <div class="service-text position-relative text-center h-100 p-4">
               <h5 class="mb-3">Eco-Friendly Innovations</h5>
               <p>
                   Each unit includes green roofs, solar panels, and
                   energy-efficient appliances, reducing environmental impact and
                   saving on utility costs.
               </p>
               <a class="small" href=""
                   >READ MORE<i class="fa fa-arrow-right ms-3"></i
               ></a>
               </div>
           </div>
           </div>

           <!-- Smart Home Features -->
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
           <div class="service-item bg-light overflow-hidden h-100">
               <img class="img-fluid" src="frontend/img/asset/21.png" alt="" />
               <div class="service-text position-relative text-center h-100 p-4">
               <h5 class="mb-3">Smart Home Features</h5>
               <p>
                   Control lighting, climate, and security remotely with advanced
                   smart home technology, offering convenience and peace of mind.
               </p>
               <a class="small" href=""
                   >READ MORE<i class="fa fa-arrow-right ms-3"></i
               ></a>
               </div>
           </div>
           </div>

           <!-- Historic Restoration -->
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
           <div class="service-item bg-light overflow-hidden h-100">
               <img class="img-fluid" src="frontend/img/asset/5.png" alt="" />
               <div class="service-text position-relative text-center h-100 p-4">
               <h5 class="mb-3">Historic Restoration</h5>
               <p>
                   Our units maintain the integrity of the original 100-year-old
                   mill, combining historic charm with modern design and luxury.
               </p>
               <a class="small" href=""
                   >READ MORE<i class="fa fa-arrow-right ms-3"></i
               ></a>
               </div>
           </div>
           </div>

           <!-- Energy Efficiency -->
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
           <div class="service-item bg-light overflow-hidden h-100">
               <img class="img-fluid" src="frontend/img/asset/24.png" alt="" />
               <div class="service-text position-relative text-center h-100 p-4">
               <h5 class="mb-3">Energy Efficiency</h5>
               <p>
                   Our buildings feature high insulation and advanced
                   soundproofing to ensure energy savings and a peaceful living
                   environment.
               </p>
               <a class="small" href=""
                   >READ MORE<i class="fa fa-arrow-right ms-3"></i
               ></a>
               </div>
           </div>
           </div>

           <!-- Custom Luxury Finishes -->
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
           <div class="service-item bg-light overflow-hidden h-100">
               <img class="img-fluid" src="frontend/img/asset/22.png" alt="" />
               <div class="service-text position-relative text-center h-100 p-4">
               <h5 class="mb-3">Custom Luxury Finishes</h5>
               <p>
                   High ceilings, expansive windows, and custom finishes elevate
                   the living experience, blending outdoor beauty with indoor
                   elegance.
               </p>
               <a class="small" href=""
                   >READ MORE<i class="fa fa-arrow-right ms-3"></i
               ></a>
               </div>
           </div>
           </div>

           <!-- Electric Vehicle Charging Stations -->
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
           <div class="service-item bg-light overflow-hidden h-100">
               <img class="img-fluid" src="frontend/img/asset/28.png" alt="" />
               <div class="service-text position-relative text-center h-100 p-4">
               <h5 class="mb-3">EV Charging Stations</h5>
               <p>
                   Supporting sustainable living, each unit has access to
                   electric vehicle charging stations, providing convenience for
                   eco-conscious residents.
               </p>
               <a class="small" href=""
                   >READ MORE<i class="fa fa-arrow-right ms-3"></i
               ></a>
               </div>
           </div>
           </div>
       </div>
       {{-- <div class="wow fadeInUp pt-4 text-center" data-wow-delay="0.3s">
           <a class="btn btn-primary py-3 px-5" href=""> More Services</a>
       </div> --}}
       </div>
   </div>

   <!-- Service End -->

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
