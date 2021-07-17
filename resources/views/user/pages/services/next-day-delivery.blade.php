<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Services-Next Day Delivery</title>
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
                                <h1>Impress your clients with our next day evening delivery</h1>
                                <p>More convenient delivery timeslots and later cut off times.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner-img" data-aos="zoom-in" data-aos-duration="2000">
                                <img src="{{asset('frontend-asstets/assets/image/banner/6.svg')}}" alt="">
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
                        <div class="title-main mb-50" data-aos="zoom-in" data-aos-duration="2000">
                            <h1>Midnight cut-off time for next day delivery</h1>
                            <img src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="next-day" data-aos="zoom-in" data-aos-duration="2000">
                        <p>By integrating a next day evening offering at check out, you will allow your customers more time to make their purchases and ship their orders at a more convenient time. By increasing your cut off time by up to 12 hours you will
                            be able to wow your end-customer with convenient options, delivering to their door step between 6 and 10pm the next day. They order in the evening, at a convenient time, and their parcel is delivered 24 hours later, hassle-free.</p>
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
                                Grow your business sales thanks to better cut off times
                            </h1>
                            <p>
                                With 87% of retail purchases made online, shoppers now expect the best omnichannel experience from their favourite retailers. With our Next Day Evening delivery offering you can:
                            </p>
                            <li>Ship your product from a warehouse, hub or directly from your store
                            </li>
                            <li>Share a live tracking link with your end-customer
                            </li>
                            <li>4 hour delivery window</li>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="Grow-area" data-aos="zoom-in" data-aos-duration="2000">
                            <img src="{{asset('frontend-asstets/assets/image/banner/Grow.svg')}}" alt="">
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