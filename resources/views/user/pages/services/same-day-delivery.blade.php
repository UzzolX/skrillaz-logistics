<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Services Same day delivary</title>
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
                            <div class="banner" data-aos="zoom-in" data-aos-duration="2000">
                                <h1>Same-day delivery service you can depend on</h1>
                                <p>Need fast shipping options for your time-sensitive packages? Our same-day services provide reliable door-to-door delivery within hours. You can count on:
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner-img" data-aos="zoom-in" data-aos-duration="2000">
                                <img src="{{asset('frontend-asstets/assets/image/banner/5.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner area end-->

        <!--why skrillaz area start-->
        <section class="pt-100 pb-100">
            <div class="container ">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="ecommerce" data-aos="zoom-in" data-aos-duration="2000">
                            <h2>
                                Deliver your product on the same day your customer places an order.
                            </h2>
                            <li>Customers choose a delivery window</li>
                            <li>Delivery windows range from 1 to 4 hours</li>
                            <li>Dashboard to manage ongoing deliveries
                            </li>
                            <li>Live tracking & customer support</li>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="mobile" data-aos="zoom-in" data-aos-duration="2000">
                            <img src="{{asset('frontend-asstets/assets/image/banner/grocerymobile.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--why skrillaz area end-->


        <!--white area start-->
        <section class="sky-area pt-100 pb-100">
            <div class="container ">
                <div class="col-xl-12">
                    <div class="cta" data-aos="zoom-in" data-aos-duration="2000">
                        <h1>How does it work?</h1>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="cta-list" data-aos="zoom-in" data-aos-duration="2000">
                                <span>
                                    Order
                                </span>
                                <p>Your customer places an order on your website for same day delivery</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="cta-list" data-aos="zoom-in" data-aos-duration="2000">
                                <span>
                                    Pick-up
                                </span>
                                <p>We pick-up all your same day orders and sort them in preparation for delivery</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="cta-list" data-aos="zoom-in" data-aos-duration="2000">
                                <span>
                                    Tracking
                                </span>
                                <p>When the order is ready to be delivered your customer will be able to track it in real time</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="cta-list" data-aos="zoom-in" data-aos-duration="2000">
                                <span>
                                    Delivery
                                </span>
                                <p>We deliver all day in 1 to 4 hour windows</p>
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