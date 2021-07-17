<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Services On demand delivary</title>
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
                                <h1>Are you out of time? We deliver quickly and on-demand.</h1>
                                <p>On demand delivery services for every business
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner-img" data-aos="zoom-in" data-aos-duration="2000">
                                <img src="{{asset('frontend-asstets/assets/image/banner/fastdelivery.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner area end-->

        <!--why skrillaz area start-->
        <section class="pt-100 pb-100">
            <!--Tittle-area-start-->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>Deliveries that go the distance</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="next-day" data-aos="zoom-in" data-aos-duration="2000">
                        <p>Say goodbye to old fashioned courier services. Our product has been designed to deal with emergencies - we will deliver your goods with both speed and precision. When you request a job our real-time dispatch solution automatically
                            connects you with the nearest and most adequate courier, based on package size and drop off location.</p>
                    </div>
                </div>
            </div>
            <!--Tittle-area-end-->

        </section>
        <!--why skrillaz area end-->


        <!--white area start-->
        <section class="white-area pt-100 pb-100">
            <div class="container ">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="Grow-area" data-aos="zoom-in" data-aos-duration="2000">
                            <h1>
                                Deliver your product as soon as your customer orders it.
                            </h1>
                            <li>Get a courier to pick up within 15 minutes</li>
                            <li>Delivery completed within 50 minutes, with an average of 30 minutes </li>
                            <li>Dashboard to manage live deliveries</li>
                            <li>Live tracking and customer support</li>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="Grow-area" data-aos="zoom-in" data-aos-duration="2000">
                            <img src="{{asset('frontend-asstets/assets/image/banner/deliverproducts.jpg')}}" alt="">
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