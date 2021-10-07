<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Client Returns</title>
    @include('user.partials.head')
</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->


    <!----------------------------------------main area start---------------------------------------->
    <main class="main-area">

        <!--banner area start-->
        <section class="top-header Vision position-relative" style="background-image: url(frontend-asstets/assets/image/client-returns/banner.png);height: 600px;">
            <div class="Vision-banner">
                <h1 data-aos="zoom-in" data-aos-duration="2000">Client Returns</h1>
                <div class="banner-info  autoplayinfo">
                    <p>Experts say to handle returns properly and managing returns may be the most challenging aspect for e-commerce sellers and physical stores.</p>
                    <p>A retailer should consider a return as a reverse purchase with all the same care and oversight that goes into managing the original purchase.</p>
                    <p>While it may be a hassle for some e-commerce businesses and physical stores, our client return services are here to help.</p>
                </div>

            </div>

        </section>
        <!--banner area end-->

        <!--why skrillaz area start-->
        <section class="pt-100 pb-100 bg-white">
            <!--Tittle-area-start-->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>WHY CHOOSE US</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--WHY-CHOOSE-US-start-->
                <div class="choose-us-box">

                    <!---WHY-CHOOSE-US-BOX-start-->

                    <div class="row small-ts-box align-items-center mt-50 mb-50">
                        <div class="col-xl-6  col-lg-6 col-md-6">
                            <div class="content-title">
                                <span>Handle Returns</span>
                            </div>
                            <div class="left-content-info">
                                <p>There's nothing more frustrating to customers than to go to a store to return an item. Our staffs are there to handle returns and solve customers' problems.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="right-image">
                                <img src="{{asset('frontend-asstets/assets/image/client-returns/handle-return.jpg.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <!---WHY-CHOOSE-US-BOX-end-->
                    <!---WHY-CHOOSE-US-BOX-start-->
                    <div class="row small-ts-box align-items-center mt-50 mb-50">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="right-image">
                                <img src="{{asset('frontend-asstets/assets/image/client-returns/Trained-Staffs.jpg.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="content-title">
                                <span>Trained Staffs</span>
                            </div>
                            <div class="left-content-info">
                                <p>Our staffs are trained in way that they can cope with your return policy and handle all the returns. It's just a matter of going over your return policies with our staff and showing them how to do the return process. It’s
                                    that simple with our empowered staffs.</p>
                            </div>
                        </div>
                    </div>

                    <!---WHY-CHOOSE-US-BOX-end-->
                    <!---WHY-CHOOSE-US-BOX-start-->
                    <div class="row small-ts-box align-items-center mt-50 mb-50">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="content-title">
                                <span>Friendly Demeanor</span>
                            </div>
                            <div class="left-content-info">
                                <p>People are not normally cheerful when they're making a return. They may even be rude, obnoxious and foul-mouthed. It's imperative that staff be trained not to respond in kind and remain calm and friendly throughout the
                                    return process. This kind of demeanor can calm an angry person and will certainly help achieve the goal of making the store return process as pleasant as possible.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="right-image">
                                <img src="{{asset('frontend-asstets/assets/image/client-returns/Friendly-Demeanor.jpg.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <!---WHY-CHOOSE-US-BOX-end-->
                    <!---WHY-CHOOSE-US-BOX-start-->
                    <div class="row small-ts-box align-items-center mt-50 mb-50">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="right-image">
                                <img src="{{asset('frontend-asstets/assets/image/client-returns/Fast-&-Simple.jpg.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="content-title">
                                <span>Fast & Simple</span>
                            </div>
                            <div class="left-content-info">
                                <p>Our staff doesn't have to make decisions when handling returns; they just apply the policy. We keep the paperwork simple too and make sure our staff is trained to use computer program fill out a form (if required).</p>
                            </div>
                        </div>
                    </div>

                    <!---WHY-CHOOSE-US-BOX-end-->

                </div>
                <!--WHY-CHOOSE-US-end-->
            </div>
            <!--Tittle-area-end-->
        </section>
        <!--why skrillaz area end-->
        <section class=" pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="Bottom-Line">
                            <h2>The Bottom Line</h2>
                            <p>Store returns are a fact of retail life weather it is online or offline. No matter what you sell, people will want to return things. We make the return process straightforward and simple and turn it into a pleasant transaction
                                rather than an unpleasant chore. It will not only keep your customers but encourage them to spread positive word-of-mouth about your business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')

</body>

</html>