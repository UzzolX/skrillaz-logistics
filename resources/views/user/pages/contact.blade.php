<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Contact</title>
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
                        <div class="col-xl-6 col-lg-4">
                            <div class="banner" data-aos="zoom-in" data-aos-duration="2000">
                                <h1>CONTACTS US</h1>
                                <p>Unlimited customization possibilities </p>
                                <button><a href="#">Get in touch</a></button>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="banner-img" data-aos="zoom-in" data-aos-duration="2000">
                                <img src="{{asset('frontend-asstets/assets/image/banner/9.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="maildrone">
                <img src="{{asset('frontend-asstets/assets/image/banner/maildrone.svg')}}" alt="">
            </div>
        </section>
        <!--banner area end-->

        <!--why skrillaz area start-->
        <section class="pt-100 pb-100" style="background-color: white;">
            <!--Tittle-area-start-->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>How we can help you </h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="contacts">
                    <form action="">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6" data-aos="zoom-in" data-aos-duration="2000">
                                <input type="text" placeholder="Your name">
                                <input style="margin: 25px 0px;" type="text" placeholder="Your email">
                                <input type="text" placeholder="Your mobile">
                            </div>
                            <div class="col-xl-6 col-lg-6" data-aos="zoom-in" data-aos-duration="2000">
                                <textarea name="" placeholder="Your message"></textarea>
                            </div>
                            <div class="col-xl-3 col-lg-3" data-aos="zoom-in" data-aos-duration="2000">
                                <button type="submit">SEND MESSAGE</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!--Tittle-area-end-->
        </section>
        <!--why skrillaz area end-->
    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')

</body>

</html>