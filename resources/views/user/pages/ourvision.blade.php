<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Our Vision</title>
    @include('user.partials.head')
</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->

    <!----------------------------------------main area start---------------------------------------->
    <main class="main-area">
        <!--banner area start-->
        <section class="top-header Vision position-relative" style="background-image: url(frontend-asstets/assets/image/banner/ourvisoin2.png);">
            <div class="Vision-banner">
                <h1 data-aos="zoom-in" data-aos-duration="2000">Our Vision</h1>
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
                            <h1>We have a simple vision</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="next-day" data-aos="zoom-in" data-aos-duration="2000">
                        <p>Our vision is to act as an irreplaceable partner to our clients by helping them construct and maximize sustainable competitive focal points. We do this by helping them get their products to showcase rapidly, productively, and securely.
                            In addition to our expertly crafted and dependably conveyed logistics arrangements, our clients can rest assured that each interaction will be driven by astuteness and regard, the elemental standards of our commerce.</p>
                    </div>
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