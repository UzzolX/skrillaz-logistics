<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Technology Solutions</title>
    @include('user.partials.head')
</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->


    <!----------------------------------------main area start---------------------------------------->
    <main class="main-area">
        <!--banner area start-->
        <section class="top-header Vision position-relative" style="background-image: url(frontend-asstets/assets/image/technology-solutions/banner.png); 
        height: 835px;
    ">
            <div class="technology-banner">
                <h1 data-aos="zoom-in" data-aos-duration="2000"><span>Skrillaz</span> Advanced Routing System and Driver Application</h1>
                <div class="download-app">
                    <a href=""><button><i class="fab fa-apple"></i> <strong><span>Download on the</span> App Store</strong></button></a>
                </div>
                <div class="download-app">
                    <a href=""><button><i class="fab fa-google-play"></i> <strong><span>Download on the</span> App Store</strong></button></a>
                </div>
            </div>
            <div class="technology-banner-image">
                <img src="{{asset('frontend-asstets/assets/image/technology-solutions/hero.png')}}" alt="">
            </div>
        </section>
        <!--banner area end-->

        <!-- app f7 area start-->
        <section class="pt-100 pb-100">
            <div class="container">
                <!--Tittle-area-start-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>Skrillaz Driver App Home Screen</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--Tittle-area-end-->
                <div class="row d-flex align-items-center  pt-50 pb-50">
                    <div class="col-xl-5 col-lg-5">
                        <div class="ss-details">
                            <p>The Skrillaz driver app home screen welcomes you to a summary of your current orders. This is a running count of the total amount of parcels assigned, number of pending parcels, number of completed parcels, number of undeliverable
                                parcels and also the number of missing parcels.</p>
                            <p>This running summary is updated as and when a delivery is attempted.</p>
                            <p>On the menu icon the driver can find various options in which they can easily navigate through screens.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="row xs">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="app-ss">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="app-ss">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---app f7 area end-->
        <!---app wahite area start-->
        <section class="pt-100 pb-100 bg-color-white">
            <div class="container">
                <!--Tittle-area-start-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>Driver Profile and Verification</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--Tittle-area-end-->
                <div class="row  d-flex align-items-center lg-app pt-50 pb-50">
                    <div class="col-xl-5 col-lg-5 col-md-4">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="app-ss mt-md ss-md">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-8">
                        <div class="ss-details">
                            <p>The driver profile area allows each and every driver to upload their documentation such as Proof of Identification and Proof of Address. They driver can also specify details such as vehicle type, registration plate and any
                                insurance details.</p>
                            <p>The benefits of using this system is that it allows the Administrator to keep a driver deactivated until all of their documentation has been checked and approved. The information and documentation that is uploaded will then
                                be saved into the admin panel alongside the drivers??? profile making accessibility very easy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---app wahite area end-->
        <!-- app f7 area start-->
        <section class="pt-100 pb-100">
            <div class="container">
                <!--Tittle-area-start-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>Delivery History and Auto Calculation</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--Tittle-area-end-->
                <div class="row d-flex align-items-center lg-app pt-50 pb-50">
                    <div class="col-xl-7 col-lg-7 col-md-8">
                        <div class="ss-details">
                            <p>The Earnings and Commissions section of the driver application will calculate earnings for each driver automatically. The administrator can change the rates for each and every parcel delivered or they can also create an hourly
                                rate or a set rate per route depending on preference.</p>
                            <ul>
                                Example:
                                <li>
                                    Rates per parcel: If the rate per delivered parcel is set at ??2.00, the driver application will automatically increase the driver???s earnings after each successful delivery. This information will also be stored in the admin panel for ease of access.
                                </li>
                                <li>
                                    Rates per hour: The administrator can choose an hourly rate to pay the drivers, once each assigned route is competed, the driver app will calculate their earnings according to the hours worked and log this information in both the driver app and admin
                                    panel.
                                </li>
                                <li>
                                    Rates per route: The administrator also has the ability to pay flexibly by paying drivers a set rate per route. Companies that tend to use this method include DPD and Amazon.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-4">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="app-ss ss-md">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/4.png')}}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---app f7 area end-->
        <!---app wahite area start-->
        <section class="pt-100 pb-100 bg-color-white">
            <div class="container">
                <!--Tittle-area-start-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>Advanced Routing and Itinerary Optimization</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--Tittle-area-end-->
                <div class="row d-flex align-items-center pt-50 pb-50">

                    <div class="col-xl-7 col-lg-7">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="app-ss mt-md">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/5.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="app-ss mt-md">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/6.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="ss-details">
                            <p>The Skrillaz driver app advanced routing and itinerary optimization is a multiple tasking screen.</p>
                            <ul>

                                <li>
                                    The Skrillaz driver app itinerary will show total number of parcels, parcel size, parcel vendor, time slots and delivery location.
                                </li>
                                <li>
                                    The Skrillaz driver app routing optimization will optimize all deliveries according to live traffic, delivery distance, time slots and end location.
                                </li>
                                <li>
                                    The main benefit of the Skrillaz driver app is that it will auto optimize a driver???s route after each stop to ensure maximum efficiency when on the road.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---app wahite area end-->
        <!-- app f7 area start-->
        <section class="pt-100 pb-100">
            <div class="container">
                <!--Tittle-area-start-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>In App Navigation System and Geolocation</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--Tittle-area-end-->
                <div class="row d-flex align-items-center  pt-50 pb-50 ">
                    <div class="col-xl-5 col-lg-12">
                        <div class="ss-details">
                            <p>The Skrillaz driver app has in built voice command navigation with live traffic updates to ensure a smooth journey from point A to point B. This is beneficial to the driver as they do not have to switch between applications
                                for navigation and delivery.</p>
                            <ul>

                                <li>Another benefit of the in-app navigation is the ability to switch between different modes, such as Light Mode, Dark Mode and Satellite Mode with all modes providing live traffic updates.
                                    <br> The Satellite Mode is hugely beneficial when it comes to finding complex locations and new developments allowing the driver to save time. The app will also use geolocation to alert the driver when they are close
                                    to the vicinity of the delivery address by displaying a ???I???ve Arrived??? button. This button will not show if the driver is not near the delivery vicinity ensuring that the driver can not skip the delivery without attempting
                                    it.
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 ">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="app-ss more-ss">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/7.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="app-ss more-ss">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/8.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="app-ss more-ss">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/9.png')}}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---app f7 area end-->
        <!---app wahite area start-->
        <section class="pt-100 pb-100 bg-color-white">
            <div class="container">
                <!--Tittle-area-start-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>In App Parcel Scanner and Functionalities</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--Tittle-area-end-->
                <div class="row d-flex align-items-center pt-50 pb-50">

                    <div class="col-xl-7 col-lg-7">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="app-ss mt-md">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/10.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="app-ss mt-md">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/11.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="ss-details">
                            <p>The Skrillaz driver app has an in-app barcode scanner to scan all the parcels at the pickup and delivery location. By scanning parcel at the pickup location, the driver will know if he/she got any parcels missing. At the delivery
                                location the driver will know how many parcels is going to be delivered and the Skrillaz driver app will ensure the correct parcel is delivered to the correct address.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---app wahite area end-->
        <!-- app f7 area start-->
        <section class="pt-100 pb-100">
            <div class="container">
                <!--Tittle-area-start-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>Dynamic Options for Delivering or Attempting to Deliver Parcels</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--Tittle-area-end-->
                <div class="row d-flex align-items-center pt-50 pb-50">
                    <div class="col-xl-5 col-lg-5">
                        <div class="ss-details">
                            <p>The Skrillaz driver app allows the administrator to create dynamic values for both delivered and undeliverable parcels. These options can be added or removed from the admin panel</p>

                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="app-ss ">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/12.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="app-ss">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/13.png')}}" alt="">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---app f7 area end-->
        <!---app wahite area start-->
        <section class="pt-100 pb-100 bg-color-white">
            <div class="container">
                <!--Tittle-area-start-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>Multi Picture Upload and Functionalities</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--Tittle-area-end-->
                <div class="row d-flex align-items-center pt-50 pb-50">

                    <div class="col-xl-7 col-lg-7">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="app-ss mt-md">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/14-new.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="app-ss mt-md">
                                    <img src="{{asset('frontend-asstets/assets/image/technology-solutions/app/15-new.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="ss-details">
                            <p>When delivering a parcel, the drives device will open an in-app camera which contains a blue outlined area for where the parcel should be placed when taking pictures. This ensures that the quality of each picture is consistent
                                and second to none.</p>
                            <p>Other benefits of the Skrillaz driver app is the ability to take multiple pictures as well as taking the customers??? signature. By allowing a driver to take multiple pictures can reduce the number of concessions / disputes as
                                a driver can take a picture of the front door prior to taking a picture of the parcel with the front door opened.</p>
                            <p>Through this stage of the app, the driver can contact the customer by calling them or sending them a message. All calls will be masked ensuring privacy of both drivers and customers contact details. The number masking will
                                create random contact numbers which will directly connect the driver to the customer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---app wahite area end-->
        <!-- app f7 area start-->
        <section class="pt-100 pb-100">
            <div class="container">
                <!--Tittle-area-start-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>Other Features and Functionalities</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--Tittle-area-end-->
                <div class="row d-flex align-items-center pt-50 pb-50">
                    <div class="col-xl-12 col-lg-12">
                        <div class="ss-details">
                            <ul>
                                <li> <strong>Driver Calendar : </strong> Driver can see past and upcoming shifts. </li>
                                <li> <strong>Driver Earnings  : </strong> Driver can see how much they earned per day, week or month. And they will have updates about payment. </li>
                                <li> <strong>Driver Notifications  : </strong> this is where drivers will receive notifications from both admin and customers. </li>
                                <li> <strong>Driver Support / In-app Live Chat  : </strong> the in-built live chat option will allow drivers to contact admin and for admin to contact drivers regarding any issues. </li>
                                <li> <strong>Emergency Support  : </strong> the emergency support will connect drivers directly to the emergency services. </li>
                                <li> <strong>Custom Branding  : </strong> the driver app and admin panel can be branded with a logo of your choice and will be readily available in both Android and IOS version. </li>
                            </ul>


                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!---app f7 area end-->
    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')

</body>

</html>