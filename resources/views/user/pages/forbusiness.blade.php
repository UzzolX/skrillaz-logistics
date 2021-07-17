<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>For Business</title>
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
                        <div class="col-xl-6">
                            <div class="banner" data-aos="zoom-in" data-aos-duration="2000">
                                <h1>How we can help your business deliver</h1>
                                <ul>
                                    <li>We deliver for all shapes and sizes of companies from household retailers to independent restaurants</li>
                                    <li>Dedicated account support and out of office customer service hours</li>
                                    <li>COVID-compliant ‘contactless’ delivery option</li>
                                </ul>

                                <button><a href="#">Get in touch</a></button>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="banner-img" data-aos="zoom-in" data-aos-duration="2000">
                                <img src="{{asset('frontend-asstets/assets/image/banner/7.svg')}}" alt="">
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
                            <h1>WHO WE WORK WITH</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="next-day">
                        <p>Companies big and small are using Quiqup to fulfil their deliveries and improve their customer’s experience.</p>
                    </div>
                </div>
                <div class="testimonial autoplaytestimonial" data-aos="zoom-in" data-aos-duration="2000">
                    <div class=" single-box-testimonial">
                        <div class="testimonil-customer-pic">
                            <img src="{{asset('frontend-asstets/assets/image/testimonial/3.png')}}" alt="">
                        </div>
                        <div class="testimonil-info">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus, nibh molestie vitae cras volutpat varius et hendrerit cursus</p>
                            <div class="testimonil-name">
                                <h4>Uzzol Ahmed</h4>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class=" single-box-testimonial">
                        <div class="testimonil-customer-pic">
                            <img src="{{asset('frontend-asstets/assets/image/testimonial/2.png')}}" alt="">
                        </div>
                        <div class="testimonil-info">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus, nibh molestie vitae cras volutpat varius et hendrerit cursus</p>
                            <div class="testimonil-name">
                                <h4>jafor siddique</h4>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class=" single-box-testimonial">
                        <div class="testimonil-customer-pic">
                            <img src="{{asset('frontend-asstets/assets/image/testimonial/1.png')}}" alt="">
                        </div>
                        <div class="testimonil-info">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus, nibh molestie vitae cras volutpat varius et hendrerit cursus</p>
                            <div class="testimonil-name">
                                <h4>Arya Stark</h4>
                                <span>Web Developer</span>
                            </div>
                        </div>
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