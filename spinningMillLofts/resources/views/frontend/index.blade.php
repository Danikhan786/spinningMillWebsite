 @extends('frontend.layout.app')
 
 @section('content')
     
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 ">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="w-100" src="frontend/img/slider/slider1.png" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10 sliderSection">
                                    <h5 class="text-light text-uppercase mb-3 animated slideInDown">
                                        Welcome to Spinning Mill Lofts
                                    </h5>
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                                        Discover modern living in a historical setting at Spinning
                                        Mill Lofts
                                    </h1>
                                    <ol class="breadcrumb mb-4 pb-2">
                                        <li class="breadcrumb-item text-light">
                                        Eco-Friendly Innovations
                                        </li>
                                        <li class="breadcrumb-item text-light">
                                        Sustainable Living
                                        </li>
                                        <li class="breadcrumb-item text-light">
                                        Historical Elegance
                                        </li>
                                    </ol>
                                    <a href="{{route('contact')}}" class="btn btn-primary"
                                        >More Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="w-100" src="frontend/img/slider/slider2.png" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10 sliderSection">
                                <h5
                                    class="text-light text-uppercase mb-3 animated slideInDown"
                                >
                                    Welcome to Spinning Mill Lofts
                                </h5>
                                <h1 class="display-2 text-light mb-3 animated slideInDown">
                                    Sustainable Living in a Historic Mill
                                </h1>
                                <ol class="breadcrumb mb-4 pb-2">
                                    <li class="breadcrumb-item text-light">
                                    Investment Opportunities
                                    </li>
                                    <li class="breadcrumb-item text-light">
                                    Luxury Living
                                    </li>
                                    <li class="breadcrumb-item text-light">
                                    Modern Comfort
                                    </li>
                                </ol>
                                <a href="{{route('contact')}}" class="btn btn-primary"
                                    >More Details</a
                                >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="frontend/img/slider/slider3.png" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10 sliderSection">
                                <h5
                                    class="text-light text-uppercase mb-3 animated slideInDown"
                                >
                                    Welcome to Spinning Mill Lofts
                                </h5>
                                <h1 class="display-2 text-light mb-3 animated slideInDown">
                                    Experience Comfort and Style at Spinning Mill Lofts
                                </h1>
                                <ol class="breadcrumb mb-4 pb-2">
                                    <li class="breadcrumb-item text-light">
                                    Investment Opportunities
                                    </li>
                                    <li class="breadcrumb-item text-light">
                                    Luxury Living
                                    </li>
                                    <li class="breadcrumb-item text-light">
                                    Modern Comfort
                                    </li>
                                </ol>
                                <a href="{{route('contact')}}" class="btn btn-primary"
                                    >More Details</a
                                >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="frontend/img/slider/slider4.png" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10 sliderSection">
                                <h5
                                    class="text-light text-uppercase mb-3 animated slideInDown"
                                >
                                    Welcome to Spinning Mill Lofts
                                </h5>
                                <h1 class="display-2 text-light mb-3 animated slideInDown">
                                    Redefine Your Living with Modern Amenities
                                </h1>
                                <ol class="breadcrumb mb-4 pb-2">
                                    <li class="breadcrumb-item text-light">
                                    Investment Opportunities
                                    </li>
                                    <li class="breadcrumb-item text-light">
                                    Luxury Living
                                    </li>
                                    <li class="breadcrumb-item text-light">
                                    Modern Comfort
                                    </li>
                                </ol>
                                <a href="{{route('contact')}}" class="btn btn-primary"
                                    >More Details</a
                                >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="frontend/img/slider/slider5.png" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10 sliderSection">
                                <h5
                                    class="text-light text-uppercase mb-3 animated slideInDown"
                                >
                                    Welcome to Spinning Mill Lofts
                                </h5>
                                <h1 class="display-2 text-light mb-3 animated slideInDown">
                                    Luxury Living Meets Historical Charm
                                </h1>
                                <ol class="breadcrumb mb-4 pb-2">
                                    <li class="breadcrumb-item text-light">
                                    Investment Opportunities
                                    </li>
                                    <li class="breadcrumb-item text-light">
                                    Luxury Living
                                    </li>
                                    <li class="breadcrumb-item text-light">
                                    Modern Comfort
                                    </li>
                                </ol>
                                <a href="{{route('contact')}}" class="btn btn-primary"
                                    >More Details</a
                                >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="position-relative overflow-hidden ">
                    <img class="w-100" src="frontend/img/asset/2.png" alt=""  />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="h-100">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                    <h6 class="text-body text-uppercase mb-2">About Us</h6>
                    <h1 class="display-6 mb-0">Luxury Living in a Historic Mill</h1>
                    </div>
                    <p class="pt-2">
                    Spinning Mill Lofts blends modern luxury with rich historical
                    roots in Millbury, Massachusetts. Set in a building that
                    originally operated with hydroelectric energy, each unit offers
                    a unique opportunity to experience the perfect combination of
                    modern comforts and historical elegance.
                    </p>
                    <p class="mb-4 pt-2">
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

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 ">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Why Choose Us!</h6>
                        <h1 class="display-6 mb-0">Why Spinning Mill Lofts</h1>
                    </div>
                    <p class="">
                        Experience historical charm paired with modern luxury in
                        Millbury’s Spinning Mill Lofts, offering eco-friendly living
                        spaces and premium amenities.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i
                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                            ></i>
                            <h6 class="mb-0">Sustainable Living</h6>
                        </div>
                        <span>
                            Featuring green roofs, energy-efficient appliances, and smart
                            home features for a low carbon footprint.
                        </span>
                        </div>
                        <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i
                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                            ></i>
                            <h6 class="mb-0">Historical Elegance</h6>
                        </div>
                        <span>
                            Restored to preserve its original architectural integrity,
                            blending the beauty of the past with today’s conveniences.
                        </span>
                        </div>
                        <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i
                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                            ></i>
                            <h6 class="mb-0">Exclusive Location</h6>
                        </div>
                        <span>
                            Spinning Mill Lofts is situated in a vibrant neighborhood,
                            close to shops, parks, and local restaurants.
                        </span>
                        </div>
                        <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i
                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                            ></i>
                            <h6 class="mb-0">Smart Home Technology</h6>
                        </div>
                        <span>
                            Control your home’s lighting, temperature, and security from
                            anywhere, making life simpler and safer.
                        </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                <div
                    class="position-relative overflow-hidden  h-100"
                    style="min-height: 400px" >
                    <img
                    class="position-absolute w-100 h-100"
                    src="frontend/img/asset/19.png"
                    alt=""
                    style="object-fit: cover"
                    />
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
        <div class="row g-5 align-items-end mb-5">
            <div class="text-center">
            <h3 class="text-primary text-uppercase">Our Services</h3>
            {{-- <h2 class="display-6 my-4">
                Sustainable Living & Historic Restoration
            </h2> --}}
            <p class="text-center">
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
        <div class="wow fadeInUp pt-4 text-center" data-wow-delay="0.3s">
            <a class="btn btn-primary py-3 px-5" href=""> More Services</a>
        </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Project start  -->
    <div class="container">
        <div class="row g-5 align-items-end mb-5">
        <div class="text-center">
            <h3 class="text-primary pt-4 pb-2 text-uppercase">Our Projects</h3>

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
        <div class="wow fadeInUp pt-4 text-center" data-wow-delay="0.3s">
            <a class="btn btn-primary py-3 px-5" href=""> My Projects</a>
        </div>
        </div>
    </div>
    <!-- Project end -->

    <!-- Proerty start  -->
    <div class="container">
        <div class="row g-5 align-items-end">
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
                                <h5 class="mb-3">$300000 - ${{ $property->propertyPrice }}</h5>
                                <div class="d-flex justify-content-between align-iterm-center flex-wrap">
                                    <div><b>{{ $property->bed}} </b> Beds</div>
                                    <div><b>{{ $property->bath}} </b> Baths</div>
                                    
                                    <div>
                                        <b>{{ $property->propertySqft}} </b> sqft
                                    </div>
                                </div>
                                <p class="mt-3">
                                    {{-- {{ $property->location}}  --}}
                                </p>
                                <div class="text-center">
                                    <a class="bg-dark py-2 px-3 rounded-pill" href="{{ route('propertybyId', $property->id) }}">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <p>There are no property</p>
                @endforelse
                </div>
            </div>
            <div class="wow fadeInUp pt-4 text-center" data-wow-delay="0.3s">
                <a class="btn btn-primary py-3 px-5" href="{{route('property')}}">Show More</a>
            </div>
        </div>
    </div>
    <!-- Project end -->

    <!-- new section start -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-4">
                <h3 class="text-primary pb-2 text-uppercase">Marketing the Spinning Mill Lofts</h3>
                <p class="py-2">
                    The Spinning Mill Lofts offer a perfect combination of historic charm and modern living, featuring spacious, open-concept designs with high ceilings and large windows that flood each unit with natural light. Each loft is equipped with luxury finishes such as hardwood floors, granite countertops, and energy-efficient appliances, blending comfort with sustainability. With eco-friendly features and smart home technology, these lofts are designed to lower utility costs and reduce environmental impact.
                </p>
                <p class="pb-2">
                    Located in a vibrant neighborhood, residents enjoy easy access to local shops, dining, and public transportation, while the building’s amenities, including a fitness center and rooftop garden, provide additional convenience and leisure. At a competitive price point around $350,000, the Spinning Mill Lofts offer an attractive investment, with mortgage payments that could be lower than renting in the area.
                </p>
            </div>
            <div class="col-md-6">
                <img src="frontend/img/asset/16.png" alt="Location" width="100%" />
            </div>
        </div>
    </div>
    <!-- new section end -->

    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
            <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2">Testimonial</h6>
                <h1 class="display-6 mb-0">What Our Happy Clients Say!</h1>
            </div>
            <p class="mb-4">
                Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                dolore erat amet
            </p>
            <div class="row g-4">
                <div class="col-sm-6">
                <div class="d-flex align-items-center mb-2">
                    <i class="fa fa-users fa-2x text-primary flex-shrink-0"></i>
                    <h1 class="ms-3 mb-0">123+</h1>
                </div>
                <h5 class="mb-0">Happy Clients</h5>
                </div>
                <div class="col-sm-6">
                <div class="d-flex align-items-center mb-2">
                    <i class="fa fa-check fa-2x text-primary flex-shrink-0"></i>
                    <h1 class="ms-3 mb-0">123+</h1>
                </div>
                <h5 class="mb-0">Projects Done</h5>
                </div>
            </div>
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                <img
                    class="img-fluid mb-4"
                    src="frontend/img/testimonial-1.jpg"
                    alt=""
                />
                <p class="fs-5">
                    Dolores sed duo clita tempor justo dolor et stet lorem kasd
                    labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                    et labore et tempor diam tempor erat.
                </p>
                <div
                    class="bg-primary mb-3"
                    style="width: 60px; height: 5px"
                ></div>
                <h5>Client Name</h5>
                <span>Profession</span>
                </div>
                <div class="testimonial-item">
                <img
                    class="img-fluid mb-4"
                    src="frontend/img/testimonial-2.jpg"
                    alt=""
                />
                <p class="fs-5">
                    Dolores sed duo clita tempor justo dolor et stet lorem kasd
                    labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                    et labore et tempor diam tempor erat.
                </p>
                <div
                    class="bg-primary mb-3"
                    style="width: 60px; height: 5px"
                ></div>
                <h5>Client Name</h5>
                <span>Profession</span>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->

    {{-- popup Section start --}}
    <div>
        <!-- Button trigger modal -->
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button> --}}
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-light">
                    <div class="modal-header">
                        <button type="button" class="btn-close custom-close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="service-item overflow-hidden h-100">
                            <h2 class="text-center lig" id="exampleModalLabel">Reserve Your Unit</h2>
                            <img src="{{ asset('storage/' . $property->propertyImage) }}" width="100%" height="200px" alt="" />
                            <div class="position-relative h-100 p-4">
                                {{-- <h6 class="mb-3">{{ $property->propertyName }}</h6> --}}
                                <h5 class="mb-3 text-center">$300000 - ${{ $property->propertyPrice }}</h5>
                                <div class="d-flex justify-content-evenly align-iterm-center flex-wrap">
                                    <div><b>{{ $property->bed }} </b> Beds</div>
                                    <div><b>{{ $property->bath }} </b> Baths</div>
                                    <div><b>{{ $property->propertySqft }} </b> Sqft</div>
                                </div>
                                <p class="mt-3 text-center">
                                    {{-- {{ $property->location }}  --}}
                                </p>
                                <div class="text-center">
                                    <a class="py-2 px-3 rounded-pill" href="{{ route('propertybyId', $property->id) }}">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- popup Section end --}}

    <!-- Script for Auto Modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
                keyboard: false
            });
            myModal.show();
    
            // Automatically hide the modal after 3 seconds
            setTimeout(() => {
                myModal.hide();
            }, 3000); // 3000 milliseconds = 3 seconds
        });
    </script>


  @endsection
