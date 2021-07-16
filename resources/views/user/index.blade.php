<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Skrillaz | Home</title>
    @include('user.partials.head')
</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->

    <!----------------------------------------main area start---------------------------------------->
    <main class="main-area">
        <!--banner area start-->
        <section class="top-header bgcolor pt-100 pb-100 position-relative">
            <div class="banner-area">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner" data-aos="zoom-in-down">
                                <h1>No More frustration with the delivery sector.</h1>
                                <p>Our fast, convenient and reliable last-mile delivery solutions across London and the UK for all kinds of business; from household name retail brands to local independent restaurants.
                                </p>
                                <button><a href="#">Get Started</a></button>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner-img" data-aos="zoom-in-down">
                                <img src="{{asset('frontend-asstets/assets/image/banner/1.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="drone" data-aos="zoom-in-down">
                <img src="{{asset('frontend-asstets/assets/image/banner/Drone.svg')}}" alt="">
            </div>
        </section>
        <!--banner area end-->

        <!--why skrillaz area start-->
        <section class="pt-100 pb-100">
            <!--Tittle-area-start-->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main">
                            <h1>Why Skrillaz?</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--Tittle-area-end-->
            <div class="container pt-100 pt-s-50">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="service-box" data-aos="zoom-in" data-aos-duration="2000">
                            <img src="{{asset('frontend-asstets/assets/image/why skrillaz/Clock.svg')}}" alt="">
                            <h3>On Demand</h3>
                            <p>Book a courier in minutes and deliver your items within an hour or two. Perfect for people who just can’t wait to get their hands on your product.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="service-box" data-aos="zoom-in" data-aos-duration="2000">
                            <img src="{{asset('frontend-asstets/assets/image/why skrillaz/NextDay2.svg')}}" alt="">
                            <h3>Same Day</h3>
                            <p>Deliver later on the same day an order is placed. Customers can choose their preferred delivery window, ranging from 1 to 4 hours.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="service-box" data-aos="zoom-in" data-aos-duration="2000">
                            <img src="{{asset('frontend-asstets/assets/image/why skrillaz/NextDay1.svg')}}" alt="">
                            <h3>Next Day</h3>
                            <p>Deliver later on the next day an order is placed. Customers can choose their preferred delivery window, ranging from 1 to 4 hours.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-12 text-center">
                        <div class="more-service" data-aos="zoom-in" data-aos-duration="2000">
                            <button><a href="#">Explore More Of Our Services</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--why skrillaz area end-->
        <!--all industries area start-->
        <section class="pb-100 pt-100  pb-s-50 bgcolor" style="
        overflow: inherit !important;">
            <!--BG-dark-Tittle-area-start-->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bg-dark-title-main">
                            <h1>We work with all industries</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--BG-dark-Tittle-area-end-->
            <!--all industries-box-area-start-->
            <div class="container pt-100 pb-100 pt-s-50 pb-s-50">
                <div class="row autoplay">

                    <div class="single-box-industries bg-color-purple" data-aos="zoom-in" data-aos-duration="2000">
                        <img src="{{asset('frontend-asstets/assets/image/all industries/ecommerce-manbg.svg')}}" alt="">
                        <div class="industries-containe">
                            <h4>Fleet Solutions</h4>
                            <p>Power your shop with on-demand delivaries</p>
                            <div class="top-arrow">
                                <img src="{{asset('frontend-asstets/assets/image/all industries/top-purple.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single-box-industries bg-color-yellow" data-aos="zoom-in" data-aos-duration="2000">
                        <img src="{{asset('frontend-asstets/assets/image/all industries/lightbg.svg')}}" alt="">
                        <div class="industries-containe">
                            <h4>Technology Solutions</h4>
                            <p>Power your shop with on-demand delivaries</p>
                            <div class="top-arrow">
                                <img src="{{asset('frontend-asstets/assets/image/all industries/top-yellow.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single-box-industries bg-color-pink" data-aos="zoom-in" data-aos-duration="2000">
                        <img src="{{asset('frontend-asstets/assets/image/all industries/Retailersbg.svg')}}" alt="">
                        <div class="industries-containe">
                            <h4>Retailers</h4>
                            <p>Power your shop with on-demand delivaries</p>
                            <div class="top-arrow">
                                <img src="{{asset('frontend-asstets/assets/image/all industries/top-pink.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single-box-industries bg-color-blue" data-aos="zoom-in" data-aos-duration="2000">
                        <img src="{{asset('frontend-asstets/assets/image/all industries/service-carbg.svg')}}" alt="">
                        <div class="industries-containe">
                            <h4>Courier Service</h4>
                            <p>Power your shop with on-demand delivaries</p>
                            <div class="top-arrow">
                                <img src="{{asset('frontend-asstets/assets/image/all industries/top-blue.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single-box-industries bg-color-dark-bule" data-aos="zoom-in" data-aos-duration="2000">
                        <img src="{{asset('frontend-asstets/assets/image/all industries/shipbg.svg')}}" alt="">
                        <div class="industries-containe">
                            <h4>E-Commerce</h4>
                            <p>Power your shop with on-demand delivaries</p>
                            <div class="top-arrow">
                                <img src="{{asset('frontend-asstets/assets/image/all industries/top-dark-blue.svg')}}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--all industries-box-area-end-->
        </section>
        <!--white area start-->
        <section class="brief" style="background-image: url(frontend-asstets/assets/image/banner/cta.png);">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="short-brief" data-aos="zoom-in" data-aos-duration="2000">
                            <span>A short brief</span>
                            <h1>Here to Help Your Every Business Need</h1>
                            <p>Stop worrying any shipping problems. Focus on your business. Let us provide the support you deserve.</p>
                            <button><a href="#">Get a Free Quote</a></button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--white area end-->
    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')
</body>

</html>