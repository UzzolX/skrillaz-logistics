<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>For Courier</title>
    @include('user.partials.head')
</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->


    <!----------------------------------------main area start---------------------------------------->
    <main class="main-area">

        <!--banner area start-->
        <section class="top-header Vision position-relative" style="background-image: url(frontend-asstets/assets/image/Time-Sensitive-Delivery/1.png);height: 600px;">
            <div class="Vision-banner">
                <h1 data-aos="zoom-in" data-aos-duration="2000">For Courier </h1>
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
                            <h1>About For Courier </h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="next-day">
                        <p>Here at Skrillaz Logistics we have thorough knowledge in logistics and the resource to help your courier company. We are here to identify and fill any gaps your courier may have in their supply chain. We provide custom solutions that meet specific needs for assembly, packaging, warehousing and onsite integration.
                        </p>
                    </div>
                </div>
            </div>
            <!--Tittle-area-end-->
        </section>
        <!--why skrillaz area end-->
        <section class="pt-100 pb-100 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        
                        <div class="title-short">
                            <p>Depending on your specific needs and goals, we offer a variety of benefits:</p>
                        </div>
                    </div>
                </div>
                <!--time-sensitive-box-start--->
                <div class="row small-ts-box d-flex align-items-center mt-50 mb-50">
                    <div class="col-xl-6 col-md-8 col-lg-8 ">
                        <div class="time-sensitive-info-left">
                            <h2>
                               Save time and money
                            </h2>
                            <p>
                                If you use our logistics services, you don’t have to spend money building warehousing, hiring additional labor, facilitating transportation and installing technologies. Our large network can help you get lower overhead costs and quicker service.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6  col-md-4 col-lg-4 ">
                        <div class="time-sensitive-info-right">
                            <img src="{{asset('frontend-asstets/assets/image/for-courier/Save-time-and-money.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--time-sensitive-box-end--->
                <!--time-sensitive-box-start--->
                <div class="row small-ts-box d-flex align-items-center mt-50 mb-50">

                    <div class="col-xl-6 col-md-4 col-lg-4">
                        <div class="time-sensitive-info-right">
                            <img src="{{asset('frontend-asstets/assets/image/for-courier/Market-expansion.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-xl-6 col-md-8 col-lg-8">
                        <div class="time-sensitive-info-left">
                            <h2>
                                Market expansion 
                            </h2>
                            <p>
                                You can take advantage of our distribution centers and warehouses in various location where you don’t have an established presence so you can ship efficiently to your customers anywhere in the country.</p>
                        </div>
                    </div>
                </div>
                <!--time-sensitive-box-end--->
                <!--time-sensitive-box-start--->
                <div class="row small-ts-box d-flex align-items-center mt-50 mb-50">
                    <div class="col-xl-6 col-xl-6 col-md-8 col-lg-8">
                        <div class="time-sensitive-info-left">
                            <h2>
                                Scalability and flexibility
                            </h2>
                            <p>We have a large network over in-house supply chains so you can quickly expand in a cost-effective way. They can also adapt to the fluctuation of your service between busy and slow times.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-4 col-lg-4">
                        <div class="time-sensitive-info-right">
                            <img src="{{asset('frontend-asstets/assets/image/for-courier/Scalability-and-flexibility.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!--time-sensitive-box-end--->
                
            </div>

        </section>
        <!--why skrillaz area end-->
        <!--white area start-->
        <section class="pink-area pt-100 pb-100">
            <div class="container ">
                <div class="col-xl-12">
                    <div class="cta" data-aos="zoom-in" data-aos-duration="2000">
                        <h1>Here at Skrillaz For Courier </h1>
                        <p>For customized solutions for your courier to meet your assembly, packaging, warehousing and onsite integration needs.</p>
                        <a href="#"><button>Get a free quote</button></a>
                    </div>
                </div>
            </div>
            <div class="cloud">
                <img src="assets/image/banner/cloud.svg')}}" alt="">
            </div>
            <div class="clouds">
                <img src="assets/image/banner/cloud.svg')}}" alt="">
            </div>
        </section>
        <!--white area end-->

    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')

</body>

</html>