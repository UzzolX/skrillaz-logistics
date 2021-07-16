<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Our Solutions Retailer</title>
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
                                <h1>For Retailers</h1>
                                <p>Our fast, convenient and reliable last-mile delivery solutions across London and the UK for all kinds of business; from household name retail brands to local independent restaurants.

                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner-img" data-aos="zoom-in" data-aos-duration="2000">
                                <img src="{{asset('frontend-asstets/assets/image/banner/3.svg')}}" alt="">
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
                                Deliver faster by shipping straight from your store, delivery on the same day.
                            </h2>
                            <li>gives you full control of the customer experience and data</li>
                            <li>White labelled experience ensures your brand stays visible at every step
                            </li>
                            <li>Deliver as soon as 3 hours after an order is placed
                            </li>
                            <li>Flexibility on how you split the delivery cost with your customer</li>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="mobile" data-aos="zoom-in" data-aos-duration="2000">
                            <img src="{{asset('frontend-asstets/assets/image/banner/greenmobile.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--why skrillaz area end-->


        <!--white area start-->
        <section class="green-area pt-100 pb-100">
            <div class="container ">
                <div class="col-xl-12">
                    <div class="cta" data-aos="zoom-in" data-aos-duration="2000">
                        <h1>Start delivering with Skrillaz</h1>
                        <a href="#"><button>Request a consultation</button></a>
                    </div>
                </div>
            </div>
            <div class="cloud">
                <img src="{{asset('frontend-asstets/assets/image/banner/cloud.svg')}}" alt="">
            </div>
            <div class="clouds">
                <img src="{{asset('frontend-asstets/assets/image/banner/cloud.svg')}}" alt="">
            </div>
        </section>
        <!--white area end-->
    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')
</body>

</html>