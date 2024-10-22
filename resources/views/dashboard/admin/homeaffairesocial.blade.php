
@extends('layouts.app')
@section('content')
<!-- Banner Main Start Here  -->



<!-- Banner Main End Here  -->

<!-- Feature Section Start Here  -->
<section class="features-section my-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="text-uppercase line-bottom-center heading-text m-0 mb-2"> Featured
                <span class="primary-text font-weight-600"> Services</span>
            </h2>
            <div class="title-icon py-3"></div>
        </div>
        {{-- {{asset('frontend/)}} --}}
        <div class="row align-items-center">
            <div class="col-sm-6 col-xl-3">
                <div class="feature-card rounded-4  border primary-border card-bg p-2 p-xl-4 mb-3">
                    <div class="icon-bg shadow rounded-pill card-bg text-center mb-3">
                        <img src="{{asset('frontend/assets/img/icons/icon_1.svg')}}" width="30" alt="icon_1">
                    </div>
                    <h4 class="primary-text">Become a Volunteer</h4>
                    <p class="para-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                    <div>
                        <a href="contact.html" class="btn  btn-sm btn-outline-primary rounded-pill">Join Us Now </a>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="feature-card rounded-4 border primary-border card-bg p-2 p-xl-4 mb-3">
                    <div class="icon-bg shadow rounded-pill card-bg text-center mb-3">
                        <img src="{{asset('frontend/assets/img/icons/icon_2.svg')}}" width="30" alt="icon_2">
                    </div>
                    <h4 class="primary-text">Adopt a Child</h4>
                    <p class="para-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                    <div>
                        <a href="contact.html" class="btn  btn-sm btn-outline-primary rounded-pill">Contact Us </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="feature-card rounded-4 border primary-border card-bg p-2 p-xl-4 mb-3">
                    <div class="icon-bg shadow rounded-pill card-bg text-center mb-3">
                        <img src="{{asset('frontend/assets/img/icons/icon_3.svg')}}" width="30" alt="icon_3">
                    </div>
                    <h4 class="primary-text">Get Involved</h4>
                    <p class="para-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                    <div>
                        <a href="#quick_donation" class="btn  btn-sm btn-outline-primary rounded-pill">Donate Us</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="feature-card rounded-4 border primary-border card-bg p-2 p-xl-4 mb-3">
                    <div class="icon-bg shadow rounded-pill card-bg text-center mb-3">
                        <img src="{{asset('frontend/assets/img/icons/icon_4.svg')}}" width="30" alt="icon_4">
                    </div>
                    <h4 class="primary-text">Emergency Case</h4>
                    <p class="fs-3 heading-text fw-bold">+91-1234567890</p>
                    <div>
                        <a href="javascript:void(0)" class="btn  btn-sm btn-outline-primary rounded-pill">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Section End Here  -->

<!-- About Section Start Here  -->
<section class="py-5 about_area pt-120">
    <div class="about_white_bg">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-md-6 col-lg-4 ">
                    <div class="circle-img py-3 text-center">
                        <img src="{{asset('frontend/assets/img/circle-img.webp')}}" alt="circle-img" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-8 mb-2 mb-lg-0">
                    <div class="about_wrapper">
                        <div class="section_title">
                            <span class="primary-text">About Us</span>
                            <h1 class="display-5 fw-bold heading-text">Charity to Change Child’s
                                and Poor People Life</h1>
                        </div>
                        <p class="mb-3 para-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis with
                            nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        <div class="about_summary mb-3">
                            <p class="position-relative fs-5 ps-4 fw-semibold para-text">Helped Fund <span
                                    class="primary-text fw-bold">24,537</span> Projects in <span
                                    class="theme-4 heading-text">24
                                    Countries</span>, <br>
                                Benefiting Over <span class="info-text fw-bold">8.2 Million</span> People.</p>
                        </div>
                        <a href="about.html" class="btn btn-primary rounded-pill">Learn More <span></span></a>

                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- About Section End Here  -->

<!-- The Causes Section Start Here  -->
<section class="py-5 alt-bg" id="causemain">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase line-bottom-center heading-text"> The
                <span class="primary-text font-weight-600"> Causes</span>
            </h2>
            <div class="title-icon py-3"></div>
            <p class="py-2 para-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem
                voluptatem obcaecati!<br>ipsum dolor sit Rem autem voluptatem obcaecati
            </p>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="single_nfeed single_nfeed_2 has_before card-bg mt-4 causes_card">
                    <div class="">
                        <a href="causes-details.html">
                            <img src="{{asset('frontend/assets/img/causes_img/causes_img_1.webp')}}" alt="causes_img_1"
                                class="img-fluid w-100">
                        </a>
                    </div>
                    <div class="p-3 d-flex justify-content-between flex-column cust_cause_card">
                        <div class="d-flex justify-content-between mb-3 align-items-center">
                            <span class="fs-5 para-text">Raised:
                                <span class="fw-semibold primary-text"> $4457 </span>
                            </span>
                            <span class="fs-5 para-text">Goal:
                                <span class="fw-semibold primary-text"> $6556</span>
                            </span>
                        </div>
                        <div class="mb-3">
                            <h3 class="fs-5 pt-2 heading-text m-0 mb-4">SHELTER FOR POOR CHILD</h3>
                            <div class="progress orange">
                                <div class="progress-bar primary-bg" style="width:60%;">
                                    <div class="progress-value"><span>60</span>%</div>
                                </div>
                            </div>
                            <p class="para-text m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="contact.html" class="btn btn-outline-primary rounded-pill btn-sm">Donate</a>
                            <span class="fs-5 para-text">Beneficiaries:
                                <span class="fw-semibold primary-text"> 145</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="single_nfeed single_nfeed_2 has_before card-bg mt-4 causes_card">
                    <div class="">
                        <a href="causes-details.html">
                            <img src="{{asset('frontend/assets/img/causes_img/causes_img_2.webp')}}" alt="causes_img_2"
                                class="img-fluid w-100">
                        </a>
                    </div>
                    <div class="p-3 d-flex justify-content-between flex-column cust_cause_card">
                        <div class="d-flex justify-content-between mb-3 align-items-center">
                            <span class="fs-5 para-text">Raised:
                                <span class="fw-semibold primary-text"> $4457 </span>
                            </span>
                            <span class="fs-5 para-text">Goal:
                                <span class="fw-semibold primary-text"> $6556</span>
                            </span>
                        </div>
                        <div class="mb-3">
                            <h3 class="fs-5 pt-2 heading-text m-0 mb-4">HAPPYNESS FOR ORPHAN CHILD</h3>
                            <div class="progress orange">
                                <div class="progress-bar primary-bg" style="width:85%;">
                                    <div class="progress-value"><span>85</span>%</div>
                                </div>
                            </div>
                            <p class="para-text m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="contact.html" class="btn btn-outline-primary rounded-pill btn-sm">Donate</a>
                            <span class="fs-5 para-text">Beneficiaries:
                                <span class="fw-semibold primary-text"> 145</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="single_nfeed single_nfeed_2 has_before card-bg mt-4 causes_card">
                    <div class="">
                        <a href="causes-details.html">
                            <img src="{{asset('frontend/assets/img/causes_img/causes_img_3.webp')}}" alt="causes_img_3"
                                class="img-fluid w-100">
                        </a>
                    </div>
                    <div class="p-3 d-flex justify-content-between flex-column cust_cause_card">
                        <div class="d-flex justify-content-between mb-3 align-items-center">
                            <span class="fs-5 para-text">Raised:
                                <span class="fw-semibold primary-text"> $4457 </span>
                            </span>
                            <span class="fs-5 para-text">Goal:
                                <span class="fw-semibold primary-text"> $6556</span>
                            </span>
                        </div>
                        <div class="mb-3">
                            <h3 class="fs-5 pt-2 heading-text m-0 mb-4">DONATION FOR POOR CHILD</h3>
                            <div class="progress orange">
                                <div class="progress-bar primary-bg" style="width:55%;">
                                    <div class="progress-value"><span>55</span>%</div>
                                </div>
                            </div>
                            <p class="para-text m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="contact.html" class="btn btn-outline-primary rounded-pill btn-sm">Donate</a>
                            <span class="fs-5 para-text">Beneficiaries:
                                <span class="fw-semibold primary-text"> 145</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center my-4">
            <a href="#" class="btn btn-primary rounded-pill btn-sm"> View More </a>
        </div>
    </div>
</section>
<!-- The Causes Section End Here  -->

<!-- Counter Section Start Here  -->
<section class="counter-section py-5">
    <div class="container">
        <div class="row" id="counter">
            <div class="col-md-3">
                <div class="milestone-counter text-center pb-5">
                    <i class="fa-solid fa-face-smile white-text pb-4" aria-hidden="true"></i><br>
                    <h4 class="stat-count highlight white-text pt-2">4286</h4>
                    <p class="milestone-details white-text text-uppercase">Happy Donators</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="milestone-counter text-center pb-5">
                    <i class="fa-solid fa-rocket  white-text pb-4" aria-hidden="true"></i><br>
                    <h4 class="stat-count highlight white-text pt-2">820</h4>
                    <p class="milestone-details white-text text-uppercase">SUCCESS MISSION</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="milestone-counter text-center  pb-4">
                    <i class="fa-solid fa-user-plus white-text pb-3" aria-hidden="true"></i><br>
                    <h4 class="stat-count highlight white-text pt-2">1232</h4>
                    <div class="milestone-details white-text">VOLUNTEER REACHED</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="milestone-counter text-center  pb-4">
                    <i class="fa-solid fa-globe white-text pb-3" aria-hidden="true"></i><br>
                    <h4 class="stat-count highlight white-text pt-2">1250</h4>
                    <div class="milestone-details white-text text-uppercase">GLOBALIZATION WORK</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End Here  -->

<!-- The Mission Section Start Here  -->
<section class="py-5 body-bg">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase line-bottom-center heading-text"> The <span
                    class="primary-text font-weight-600"> Mission </span></h2>
            <div class="title-icon py-3"></div>
            <p class="py-2 para-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem
                obcaecati!
                <br>ipsum dolor sit Rem autem voluptatem obcaecati
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mission py-2 mt-2">
                    <div class="icon-box d-flex border primary-border p-3 rounded-3 card-bg"> <a
                            class="media-left pull-left flip" href="javascript:void(0)">
                            <img src="{{asset('frontend/assets/img/icons/mission_1.svg')}}" alt="mission_1"></a>
                        <div class="media-body">
                            <h4 class="font-15 text-uppercase primary-text">Save The children</h4>
                            <p class="para-text">Lorem ipsum dolor sit ametcons ecte adipisicing eli cumconse teturs
                                lorem ipsum
                                dolor is emmit</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mission py-2 mt-2">
                    <div class="icon-box d-flex border primary-border p-3 rounded-3 card-bg"> <a
                            class="media-left pull-left flip" href="javascript:void(0)">
                            <img src="{{asset('frontend/assets/img/icons/mission_2.svg')}}" alt="mission_2"></a>
                        <div class="media-body">
                            <h4 class="font-15 text-uppercase primary-text">Help The Helpless</h4>
                            <p class="para-text">Lorem ipsum dolor sit ametcons ecte adipisicing eli cumconse teturs
                                lorem ipsum
                                dolor is emmit</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mission py-2 mt-2">
                    <div class="icon-box d-flex border primary-border p-3 rounded-3 card-bg"> <a
                            class="media-left pull-left flip" href="javascript:void(0)">
                            <img src="{{asset('frontend/assets/img/icons/mission_3.svg')}}" alt="mission_3"></a>
                        <div class="media-body">
                            <h4 class="font-15 text-uppercase primary-text">Pure Water For Poor</h4>
                            <p class="para-text">Lorem ipsum dolor sit ametcons ecte adipisicing eli cumconse teturs
                                lorem ipsum
                                dolor is emmit</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mission py-2 mt-2">
                    <div class="icon-box d-flex  border primary-border p-3 rounded-3 card-bg"> <a
                            class="media-left pull-left flip" href="javascript:void(0)">
                            <img src="{{asset('frontend/assets/img/icons/mission_4.svg')}}" alt="mission_4"></a>
                        <div class="media-body">
                            <h4 class="font-15 text-uppercase primary-text">Donation For Poor</h4>
                            <p class="para-text">Lorem ipsum dolor sit ametcons ecte adipisicing eli cumconse teturs
                                lorem ipsum
                                dolor is emmit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- The Mission Section Start Here  -->

<!-- The Events Section Start Here  -->
<section class="alt-bg py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase line-bottom-center heading-text"> Our <span
                    class="primary-text font-weight-600"> Events </span>
            </h2>   
            <div class="title-icon py-3"></div>
            <p class="py-2 para-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem
                obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati
            </p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="schedule-box mt-4 d-flex justify-content-between flex-column">
                    <div class="thumb">
                        <img class="img-fluid w-100" alt="event-img-01" src="{{asset('frontend/assets/img/events-img/event-img-01.webp')}}">
                    </div>
                    <div
                        class="schedule-details p-3 card-bg d-flex justify-content-between flex-column cust_event_card">
                        <div class="mb-3">
                            <div>
                                <h4 class="title mt-0 sub-heading-text a-heading-text m-0 mb-3 mt-3"><a
                                        href="events-details.html">Summertime Cloth Donation...</a></h4>
                            </div>
                            <div class="d-flex justify-space-between flex-column">
                                <span><i class="fa-regular fa-clock primary-text"></i> <span class="para-text"> 5:00 pm
                                        - 7:30 pm </span> </span>

                                <span><i class="fa-solid fa-location-dot mr-5 primary-text"></i> <span
                                        class="para-text">
                                        25 newyork City </span></span>
                            </div>
                            <p class="para-text m-0 mt-3">Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla
                                nihil,
                                dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum
                                dicta.</p>
                        </div>

                        <div class="">
                            <a href="events-details.html"
                                class="btn btn-outline-primary rounded-pill btn-sm">Details</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="schedule-box mt-4">
                    <div class="thumb">
                        <img class="img-fluid w-100" alt="event-img-02" src="{{asset('frontend/assets/img/events-img/event-img-02.webp')}}">
                    </div>
                    <div
                        class="schedule-details p-3 card-bg d-flex justify-content-between flex-column cust_event_card">
                        <div class="mb-3">
                            <div>
                                <h4 class="title mt-0 sub-heading-text a-heading-text m-0 mb-3 mt-3"><a
                                        href="events-details.html">Health & Wellness Camp</a></h4>
                            </div>
                            <div class=" d-flex justify-space-between flex-column">
                                <span><i class="fa-regular fa-clock primary-text"></i> <span class="para-text">3:00 pm - 6:30 pm </span> </span>

                                <span><i class="fa-solid fa-location-dot mr-5 primary-text"></i> <span
                                        class="para-text">
                                        25 newyork City </span></span>
                            </div>
                            <p class="para-text m-0 mt-3">Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla
                                nihil,
                                dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum
                                dicta.</p>
                        </div>

                        <div class="">
                            <a href="events-details.html"
                                class="btn btn-outline-primary rounded-pill btn-sm">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="schedule-box mt-4">
                    <div class="thumb">
                        <img class="img-fluid w-100" alt="event-img-03" src="{{asset('frontend/assets/img/events-img/event-img-03.webp')}}">
                    </div>
                    <div
                        class="schedule-details p-3 card-bg d-flex justify-content-between flex-column cust_event_card">
                        <div class="mb-3">
                            <div>
                                <h4 class="title mt-0 sub-heading-text a-heading-text m-0 mb-3 mt-3"><a
                                        href="events-details.html">Annual Charity Gala</a></h4>
                            </div>
                            <div class=" d-flex justify-space-between flex-column">
                                <span><i class="fa-regular fa-clock primary-text"></i> <span class="para-text"> 2:00 pm - 5:30 pm</span> </span>

                                <span><i class="fa-solid fa-location-dot mr-5 primary-text"></i> <span
                                        class="para-text">
                                        21 Los Angeles </span></span>
                            </div>
                            <p class="para-text m-0 mt-3">Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla
                                nihil,
                                dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum
                                dicta.</p>
                        </div>

                        <div class="">
                            <a href="events-details.html"
                                class="btn btn-outline-primary rounded-pill btn-sm">Details</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- The Events Section End Here  -->

<!-- Image Gallery Section Start Here  -->
<section class="py-5 pt-5 body-bg" id="gallery">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase line-bottom-center heading-text"> Image <span
                    class="primary-text font-weight-600"> GAllery </span></h2>
            <div class="title-icon py-3"></div>
            <p class="py-2 para-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem
                obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati </p>
        </div>
        <div id="image-gallery">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrapper">
                        <a href="assets/img/gallery_img/g_1.webp"><img src="{{asset('frontend/assets/img/gallery_img/g_1.webp')}}"
                                class="img-responsive" alt="g_1"></a>
                        <div class="img-overlay">
                            <i class="fa fa-image white-text" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrapper">
                        <a href="assets/img/gallery_img/g_2.webp"><img src="{{asset('frontend/assets/img/gallery_img/g_2.webp')}}"
                                class="img-responsive" alt="g_2"></a>
                        <div class="img-overlay">
                            <i class="fa fa-image white-text" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrapper">
                        <a href="assets/img/gallery_img/g_3.webp"><img src="{{asset('frontend/assets/img/gallery_img/g_3.webp')}}"
                                class="img-responsive" alt="g_3"></a>
                        <div class="img-overlay">
                            <i class="fa fa-image white-text" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrapper">
                        <a href="assets/img/gallery_img/g_4.webp"><img src="{{asset('frontend/assets/img/gallery_img/g_4.webp')}}"
                                class="img-responsive" alt="g_4"></a>
                        <div class="img-overlay">
                            <i class="fa fa-image white-text" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrapper">
                        <a href="assets/img/gallery_img/g_5.webp"><img src="{{asset('frontend/assets/img/gallery_img/g_5.webp')}}"
                                class="img-responsive" alt="g_5"></a>
                        <div class="img-overlay">
                            <i class="fa fa-image white-text" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrapper">
                        <a href="assets/img/gallery_img/g_6.webp"><img src="{{asset('frontend/assets/img/gallery_img/g_6.webp')}}"
                                class="img-responsive" alt="g_6"></a>
                        <div class="img-overlay">
                            <i class="fa fa-image white-text" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrapper">
                        <a href="assets/img/gallery_img/g_7.webp"><img src="{{asset('frontend/assets/img/gallery_img/g_7.webp')}}"
                                class="img-responsive" alt="g_7"></a>
                        <div class="img-overlay">
                            <i class="fa fa-image white-text" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrapper">
                        <a href="assets/img/gallery_img/g_8.webp"><img src="{{asset('frontend/assets/img/gallery_img/g_8.webp')}}"
                                class="img-responsive" alt="g_8"></a>
                        <div class="img-overlay">
                            <i class="fa fa-image white-text" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div><!-- End row -->
        </div>
    </div>

</section>
<!-- Image Gallery Section End Here  -->

<!-- Quick Donation Section Start Here  -->
<section class="py-5 quick-donation-section section-padding alt-bg" id="quick_donation">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase line-bottom-center heading-text"> Quick <span
                    class="primary-text font-weight-600"> Donation </span>
            </h2>
            <div class="title-icon py-3">

            </div>
            <p class="py-2 para-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem
                voluptatem
                obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati
            </p>
        </div>
        <div class="donation-form shadow">
            <form action="#" class="form">
                <div class="my-4">
                    <label for="select_cause" class="fw-bold text-uppercase fs-5 heading-text mb-2">select Cause
                        :</label>
                    <select
                        class="form-select text-center p-3 border primary-border fw-bold text-uppercase shadow form-input-bg"
                        id="select_cause">
                        <option class="form-input-text">causes 1</option>
                        <option class="form-input-text">causes 2</option>
                        <option class="form-input-text">causes 3</option>
                        <option class="form-input-text">causes 4</option>
                    </select>
                </div>
                <label for="select_cause" class="fw-bold text-uppercase fs-5  heading-text mb-2">select Donation
                    Amount :</label>
                <div class="radio-buttons d-flex justify-space-between gap-2 flex-wrap">
                    <label class="radio-button shadow fs-4 fw-semibold white-text">
                        <input type="radio" name="donation" value="100">
                        <span class="radio-tick"></span>
                        $100
                    </label>
                    <label class="radio-button shadow fs-4 fw-semibold white-text">
                        <input type="radio" name="donation" value="200">
                        <span class="radio-tick"></span>
                        $200
                    </label>
                    <label class="radio-button shadow fs-4 fw-semibold white-text">
                        <input type="radio" name="donation" value="300">
                        <span class="radio-tick"></span>
                        $300
                    </label>
                    <label class="radio-button shadow fs-4 fw-semibold white-text">
                        <input type="radio" name="donation" value="400">
                        <span class="radio-tick"></span>
                        $400
                    </label>
                </div>

                <div class="donate-as-anonymous py-4">
                    <input type="checkbox" id="d1" class="form-check-label">
                    <label for="d1" class="para-text ps-2 fs-5"> Donate As Anonymous</label>
                </div>
                <div class="donate-btn">
                    <button class="btn btn-primary rounded-pill" type="submit">Donate</button>
                </div>
            </form>
        </div>  
    </div>
</section>
<!-- Quick Donation Section End Here  -->

<!-- CTA Section Start Here  -->
<section class="py-5 cta-bg">
    <div class="container">
        <div class="section-content text-center">
            <h2 class="mt-0 white-text">How you can help us</h2>
            <h2 class="white-text">Just call at <span class="primary-text">(01) 234 5678</span> to make a donation</h2>
        </div>
    </div>
</section>
<!-- CTA Section End Here  -->

<!-- Blog Section Start Here  -->
<section class="py-5 alt-bg">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase line-bottom-center  heading-text m-0"> Our <span
                    class="primary-text font-weight-600">Blog </span></h2>
            <div class="title-icon py-3"></div>
            <p class="py-2 para-text m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem
                voluptatem obcaecati!<br>ipsum dolor sit Rem autem voluptatem obcaecati
            </p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="single_nfeed single_nfeed_2 has_before card-bg mt-4">
                    <div class="single_feed_img img_effect_white">
                        <a href="blog-details.html">
                            <img src="{{asset('frontend/assets/img/blog_img/blog-img-01.webp')}}" alt="blog-img-01" class="img-fluid w-100">
                        </a>
                    </div>

                    <div class="primary-bg text-center d-flex justify-content-between align-items-center p-3">
                        <span class="white-text"><i class="fa-solid fa-share-nodes me-2 white-text"></i>44
                            Share</span>
                        <span class="white-text"><i class="fa-solid fa-comments  me-2 white-text"></i> 314
                            Comments</span>
                        <span class="white-text"><i class="fa-solid fa-heart  me-2 white-text"></i> 789
                            Likes</span>
                    </div>

                    <div class="p-3">
                        <div class="py-2 custcard-body">
                            <a href="javascript:void(0)" class="nsub_title nsub_title_2 para-text">Charity,
                                Cloths</a>
                            <h3 class="fs-5 pt-2 heading-text a-heading-text"><a href="javascript:void(0)">Expected
                                    Goods for everybody
                                    in a fund campaign anyways to win.</a></h3>
                        </div>
                        <div class="nfeed_meta_wrapper d-flex">
                            <div class="nfeed_meta me-2">
                                <a href="javascript:void(0)" class="nmeta_icon theme-1" aria-label="user">
                                    <i class="fa-regular fa-user danger-text me-2"></i>
                                </a>
                                <a href="javascript:void(0)" class="nmeta_text theme-1">
                                    <span class="nmeta_by para-text">Liam Oliver</span>
                                </a>
                            </div>
                            <div class="nfeed_meta">
                                <a href="javascript:void(0)" class="nmeta_icon theme-2" aria-label="calender">
                                    <i class="fa-regular fa-calendar-days success-text me-2"></i>
                                </a>
                                <a href="javascript:void(0)" class="nmeta_text theme-2">
                                    <span class="nmeta_date para-text">24 Jun 2024</span>
                                </a>
                            </div>
                        </div>
                        <div class="py-2 mt-2">
                            <a href="blog-details.html" class="btn btn-outline-primary rounded-pill btn-sm">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single_nfeed single_nfeed_2 has_before card-bg mt-4">
                    <div class="single_feed_img img_effect_white">
                        <a href="blog-details.html">
                            <img src="{{asset('frontend/assets/img/blog_img/blog-img-02.webp')}}" alt="blog-img-02"
                                class="img-fluid w-100"></a>
                    </div>
                    <div class="primary-bg text-center d-flex justify-content-between align-items-center p-3">
                        <span class="white-text"><i class="fa-solid fa-share-nodes me-2 white-text"></i>34
                            Share</span>
                        <span class="white-text"><i class="fa-solid fa-comments  me-2 white-text"></i> 314
                            Comments</span>
                        <span class="white-text"><i class="fa-solid fa-heart  me-2 white-text"></i> 995
                            Likes</span>
                    </div>

                    <div class="p-3">
                        <div class="py-2 custcard-body">
                            <a href="javascript:void(0)" class="nsub_title nsub_title_2 para-text">Charity,
                                Cloths</a>
                            <h3 class="fs-5 pt-2 heading-text a-heading-text"><a href="sub-heading-text.html">Empowering
                                    Education: A Path to a Brighter Future.</a></h3>
                        </div>
                        <div class="nfeed_meta_wrapper d-flex">
                            <div class="nfeed_meta me-2">
                                <a href="javascript:void(0)" class="nmeta_icon theme-1" aria-label="user">
                                    <i class="fa-regular fa-user danger-text me-2"></i>
                                </a>
                                <a href="javascript:void(0)" class="nmeta_text theme-1">
                                    <span class="nmeta_by para-text">Henry Mateo</span>
                                </a>
                            </div>
                            <div class="nfeed_meta">
                                <a href="javascript:void(0)" class="nmeta_icon theme-2" aria-label="calender">
                                    <i class="fa-regular fa-calendar-days success-text me-2"></i>
                                </a>
                                <a href="javascript:void(0)" class="nmeta_text theme-2">
                                    <span class="nmeta_date para-text">30 June 2024</span>
                                </a>
                            </div>
                        </div>
                        <div class="py-2 mt-2">
                            <a href="blog-details.html" class="btn btn-outline-primary rounded-pill btn-sm">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single_nfeed single_nfeed_2 has_before card-bg mt-4">
                    <div class="single_feed_img img_effect_white">
                        <a href="blog-details.html">
                            <img src="{{asset('frontend/assets/img/blog_img/blog-img-03.webp')}}" alt="blog-img-03"
                                class="img-fluid w-100"></a>
                    </div>
                    <div class="primary-bg text-center d-flex justify-content-between align-items-center p-3">
                        <span class="white-text"><i class="fa-solid fa-share-nodes me-2 white-text"></i>35
                            Share</span>
                        <span class="white-text"><i class="fa-solid fa-comments  me-2 white-text"></i> 264
                            Comments</span>
                        <span class="white-text"><i class="fa-solid fa-heart  me-2 white-text"></i> 345
                            Likes</span>
                    </div>

                    <div class="p-3">
                        <div class="py-2 custcard-body">
                            <a href="javascript:void(0)" class="nsub_title nsub_title_2 para-text">Charity,
                                Cloths</a>
                            <h3 class="fs-5 pt-2 heading-text a-heading-text"><a href="sub-heading-text.html">Nourishing
                                    Lives: Food for All</a></h3>
                        </div>
                        <div class="nfeed_meta_wrapper d-flex">
                            <div class="nfeed_meta me-2">
                                <a href="javascript:void(0)" class="nmeta_icon theme-1" aria-label="user">
                                    <i class="fa-regular fa-user danger-text me-2"></i>
                                </a>
                                <a href="javascript:void(0)" class="nmeta_text theme-1">
                                    <span class="nmeta_by para-text">Levi Jack</span>
                                </a>
                            </div>
                            <div class="nfeed_meta">
                                <a href="javascript:void(0)" class="nmeta_icon theme-2" aria-label="calender">
                                    <i class="fa-regular fa-calendar-days success-text me-2"></i>
                                </a>
                                <a href="javascript:void(0)" class="nmeta_text theme-2">
                                    <span class="nmeta_date para-text">5 July 2024</span>
                                </a>
                            </div>
                        </div>
                        <div class="py-2 mt-2">
                            <a href="blog-details.html" class="btn btn-outline-primary rounded-pill btn-sm">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="text-center my-4">
            <a href="blog.html" class="btn btn-primary rounded-pill btn-sm"> View More </a>
        </div>
    </div>
</section>
<!-- Blog Section End Here  -->

<!-- Feedbacks Section Start Here  -->
<section class="secondary-bg feedback py-5">
  <div class="container">
        <div class="section-title text-center">
            <h3 class="h1 white-text pb-2 text-uppercase">Happy Donors Says</h3>
        </div>
        <div id="testimonial-slider" class="owl-carousel">
            <div class="testimonial item">
                <div class="primary-bg p-2 rounded-4 my-2">
                    <span class="icon fa fa-quote-left white-text ms-3"></span>
                    <p class="description white-text text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis with
                        nostrud
                    </p>
                </div>
                <div class="testimonial-content d-flex align-items-center gap-3 justify-space-between">
                    <div class="pic mt-3">
                        <img src="{{asset('frontend/assets/img/clients/c1.png')}}" alt="c1" width="100">
                    </div>
                    <div class="">
                        <h3 class="name primary-text">Jonathan Smith</h3>
                        <span class="title white-text">Kod. Inch</span>
                    </div>
                </div>
            </div>
            <div class="testimonial item">
                <div class="primary-bg p-2 rounded-4 my-2">
                    <span class="icon fa fa-quote-left white-text ms-3"></span>
                    <p class="description white-text text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis with
                        nostrud
                    </p>
                </div>
                <div class="testimonial-content d-flex align-items-center gap-3 justify-space-between">
                    <div class="pic mt-3">
                        <img src="{{asset('frontend/assets/img/clients/c2.png')}}" alt="c2" width="100">
                    </div>
                    <div class="">
                        <h3 class="name primary-text">Liam Noah</h3>
                        <span class="title white-text">Project Manager</span>
                    </div>
                </div>
            </div>
            <div class="testimonial item">
                <div class="primary-bg p-2 rounded-4 my-2">
                    <span class="icon fa fa-quote-left white-text ms-3"></span>
                    <p class="description white-text text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis with
                        nostrud
                    </p>
                </div>
                <div class="testimonial-content d-flex align-items-center gap-3 justify-space-between">
                    <div class="pic mt-3">
                        <img src="{{asset('frontend/assets/img/clients/c3.png')}}" alt="c3" width="100">
                    </div>
                    <div class="">
                        <h3 class="name primary-text">James Elijah</h3>
                        <span class="title white-text">CEO</span>
                    </div>
                </div>
            </div>
            <div class="testimonial item">
                <div class="primary-bg p-2 rounded-4 my-2">
                    <span class="icon fa fa-quote-left white-text ms-3"></span>
                    <p class="description white-text text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis with
                        nostrud
                    </p>
                </div>
                <div class="testimonial-content d-flex align-items-center gap-3 justify-space-between">
                    <div class="pic mt-3">
                        <img src="{{asset('frontend/assets/img/clients/c4.png')}}" alt="c4" width="100">
                    </div>
                    <div class="">
                        <h3 class="name primary-text">Henry Lucas</h3>
                        <span class="title white-text">Kod. Inch</span>
                    </div>
                </div>
            </div>
            <div class="testimonial item">
                <div class="primary-bg p-2 rounded-4 my-2">
                    <span class="icon fa fa-quote-left white-text ms-3"></span>
                    <p class="description white-text text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis with
                        nostrud
                    </p>
                </div>
                <div class="testimonial-content d-flex align-items-center gap-3 justify-space-between">
                    <div class="pic mt-3">
                        <img src="{{asset('frontend/assets/img/clients/c5.png')}}" alt="c5" width="100">
                    </div>
                    <div class="">
                        <h3 class="name primary-text">Benjamin Smith</h3>
                        <span class="title white-text">Engineer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial item">
                <div class="primary-bg p-2 rounded-4 my-2">
                    <span class="icon fa fa-quote-left white-text ms-3"></span>
                    <p class="description white-text text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis with
                        nostrud
                    </p>
                </div>
                <div class="testimonial-content d-flex align-items-center gap-3 justify-space-between">
                    <div class="pic mt-3">
                        <img src="{{asset('frontend/assets/img/clients/c6.png')}}" alt="c6" width="100">
                    </div>
                    <div class="">
                        <h3 class="name primary-text">Oliver William</h3>
                        <span class="title white-text">Architect</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feedbacks Section End Here  -->

<!-- Contact Us Section Start Here  -->
<section class="py-5 body-bg">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase line-bottom-center heading-text"> Contact <span class="primary-text font-weight-600"> Us </span>
            </h2>
            <div class="title-icon py-3"></div>
            <p class="py-2 para-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem
                obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati
            </p>
        </div>
        <form class="g-3" id="contactForm">
            <div class="row">
                <div class="col-md-6">
                    <label for="name" class="form-label fs-0">Enter Name</label>
                    <input type="text" class="form-control para-text p-3 form-input-bg" id="name" name="name"
                        placeholder="Enter Name">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label fs-0">Enter Email</label>
                    <input type="email" class="form-control para-text p-3 form-input-bg" id="email" name="email"
                        placeholder="Enter Your Email">
                </div>
                <div class="col-md-6">
                    <label for="subject" class="form-label fs-0">Enter Subject</label>
                    <input type="text" class="form-control para-text p-3 form-input-bg" id="subject" name="subject"
                        placeholder="Enter Your Subject">
                </div>
                <div class="col-md-6">
                    <label for="number" class="form-label fs-0">Enter Phone</label>
                    <input type="text" class="form-control p-3 form-input-bg" id="number" name="number"
                        placeholder="Enter Your Phone Number">
                </div>
                <div class="col-md-12 mb-4">
                    <div class="form-group">
                        <label for="message" class="form-label fs-0">Message</label>
                        <textarea class="form-control para-text form-input-bg required" name="message" rows="5"
                            placeholder="Enter Message" aria-required="true" id="message"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary rounded-pill btn-sm">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Contact Us Section End Here  -->

<!-- Clients Section Start Here  -->
<div class="clients primary-bg py-4">
    <div class="container">
        <div class="client-carousel owl-carousel owl-theme">
            <div class="item"><img alt="client logo" class="client-img img-fluid"
                    src="{{asset('frontend/assets/img/company_logo_img/c1.png')}}"></div>
            <div class="item"><img alt="client logo" class="client-img img-fluid"
                    src="{{asset('frontend/assets/img/company_logo_img/c2.png')}}"></div>
            <div class="item"><img alt="client logo" class="client-img img-fluid"
                    src="{{asset('frontend/assets/img/company_logo_img/c3.png')}}"></div>
            <div class="item"><img alt="client logo" class="client-img img-fluid"
                    src="{{asset('frontend/assets/img/company_logo_img/c4.png')}}"></div>
            <div class="item"><img alt="client logo" class="client-img img-fluid"
                    src="{{asset('frontend/assets/img/company_logo_img/c5.png')}}"></div>
            <div class="item"><img alt="client logo" class="client-img img-fluid"
                    src="{{asset('frontend/assets/img/company_logo_img/c6.png')}}"></div>
        </div>
    </div>
</div>
@endsection
<!-- Clients Section End Here  -->