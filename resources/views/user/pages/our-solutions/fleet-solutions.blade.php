<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Fleet Solutions</title>
    @include('user.partials.head')
</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->


    <!----------------------------------------main area start---------------------------------------->
    <main class="main-area">
        <!--banner area start-->
        <section class="top-header Vision position-relative" style="background-image: url(frontend-asstets/assets/image/fleet-solutions/fleet.png);height: 600px;">
            <div class="Vision-banner">
                <h1 data-aos="zoom-in" data-aos-duration="2000">Fleet Solutions</h1>
            </div>
        </section>
        <!--banner area end-->

        <!--fleet-logistics area start-->
        <section class="pt-100 pb-100 bg-white">
            <div class="container">
                <div class="row">
                    <!--Tittle-area-start-->
                    <div class="col-xl-12">
                        <div class="title-main mb-50">
                            <h1>FLEET LOGISTICS</h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                    <!--Tittle-area-end-->
                </div>
                <div class="fleet-logistics-box">
                    <div class="row">
                        <!--fleet-logistics-single-box-start-->
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="fleet-logistics-single-box">
                                <img src="{{asset('frontend-asstets/assets/image/fleet-solutions/simplification.svg')}}" alt="">
                                <span>Simplification</span>
                                <p>We offer aggregation of complex supply structures and translation into simple solutions.
                                </p>
                            </div>
                        </div>
                        <!--fleet-logistics-single-box-end-->
                        <!--fleet-logistics-single-box-start-->
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="fleet-logistics-single-box">
                                <img src="{{asset('frontend-asstets/assets/image/fleet-solutions/Flexibility.svg')}}" alt="">
                                <span>Flexibility</span>
                                <p>We offer flexibility to tailor the service offering to meet individual clients??? needs using standard tools, systems and processes. </p>
                            </div>
                        </div>
                        <!--fleet-logistics-single-box-end-->
                        <!--fleet-logistics-single-box-start-->
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="fleet-logistics-single-box">
                                <img src="{{asset('frontend-asstets/assets/image/fleet-solutions/Impartiality.svg')}}" alt="">
                                <span>Impartiality</span>
                                <p>We offer delivery of objective and relevant advice, from strategy to execution.</p>
                            </div>
                        </div>
                        <!--fleet-logistics-single-box-end-->
                        <!--fleet-logistics-single-box-start-->
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="fleet-logistics-single-box">
                                <img src="{{asset('frontend-asstets/assets/image/fleet-solutions/practice.svg')}}" alt="">
                                <span>Best practice</span>
                                <p>We offer our proven solutions to ensure an optimal implementation of your strategy.</p>
                            </div>
                        </div>
                        <!--fleet-logistics-single-box-end-->
                    </div>
                </div>

            </div>

        </section>
        <!--fleet-logistics area end-->
        <!--Fleet Management area start-->
        <section>
            <div class="container-fluid mid-banner" style="background-image: url(frontend-asstets/assets/image/fleet-solutions/teel-mid-banner.jpg);">
                <div class="Fleet Management">
                    <h1>Fleet Management </h1>
                    <p>Driver satisfaction, cost control, productivity and compliance are only a few facets of the bigger fleet management picture.
                    </p>
                    <p>Irrespective of your strategy and supplier set-up, be it single or multi-supply, with bundled or unbundled services, we provide objective and relevant advice from strategy creation to execution, including all aspects of operational
                        management. </p>
                </div>
            </div>

        </section>
        <!--Fleet Management area end-->
        <!--How  we operator start-->
        <section class="pt-100 pb-100 bg-white">
            <div class="container">
                <div class="row">
                    <div class="title-main mb-50">
                        <h1>HOW WE OPERATE</h1>
                        <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                    </div>
                </div>
                <div class="all-box-operator">
                    <div class="row">
                        <!--single-box-operator-start-->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-box-operator">
                                <div class="main-title-operator">
                                    <span>PROFESSIONAL</span>
                                </div>
                                <div class="operator-content">
                                    <h3>Vehicle Ordering</h3>
                                    <p>Our service covers all relevant process stages, starting with initiation, car configuration, supplier benchmark and final order, and including the coordination of delivery. <br> Our support ensures staff compliance
                                        with car policy and processes, and provides a clear and distinct paper trail.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-operator-end-->
                        <!--single-box-operator-start-->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-box-operator">
                                <div class="main-title-operator">
                                    <span>DEDICATED</span>
                                </div>
                                <div class="operator-content">
                                    <h3>Driver Communication </h3>
                                    <p>We offer a dedicated driver helpdesk including a client specific telephone number and a dedicated email address.
                                        <br> Pre-agreed KPIs/SLAs and a certain set of templates are implemented into our communication technology to ensure proper responsiveness.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-operator-end-->
                        <!--single-box-operator-start-->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-box-operator">
                                <div class="main-title-operator">
                                    <span>EFFICIENT</span>
                                </div>
                                <div class="operator-content">
                                    <h3>Cost Control</h3>
                                    <p>Through our invoice control services and processes, we focus on delivering accuracy and control through the scrutiny of all supplier invoices for exceptions, and challenge these wherever and whenever necessary. <br>                                        Our combination of professional invoice controllers and automated tools ensures that we validate 100% of all fleet-related invoices.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-operator-end-->
                        <!--single-box-operator-start-->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-box-operator">
                                <div class="main-title-operator">
                                    <span>STRUCTURAL</span>
                                </div>
                                <div class="operator-content">
                                    <h3>Contract Monitoring</h3>
                                    <p>Based on the most up to date fleet and vehicle information, stored in our proprietary fleet management software, we are able to forecast scenarios and determine contract adjustment requirements. <br> Within this process,
                                        we focus on TCO comparison, which we believe gives you the most reliable and accurate fleet cost picture.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-operator-end-->
                        <!--single-box-operator-start-->
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="single-box-operator">
                                <div class="main-title-operator">
                                    <span>SUPPLY CHAIN MATTERS </span>
                                </div>
                                <div class="operator-content">
                                    <h3>Vendor Management </h3>
                                    <p>In any fleet operation, multiple suppliers, both internal and external, are typically involved. This results in a high degree of complexity and the need for clear communication. <br> From a strategy point of view, we
                                        can provide you with detailed feedback on current processes, the potential for optimization and key developments in the market.
                                        <br> At an operational level, we manage your suppliers and ensure vendor compliance with your agreements.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-operator-end-->
                        <!--single-box-operator-start-->
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="single-box-operator">
                                <div class="main-title-operator">
                                    <span>SUPPORTIVE</span>
                                </div>
                                <div class="operator-content">
                                    <h3>Technology Tools</h3>
                                    <p>In the field of fleet management, a strong IT landscape is key to success. Over the years we have developed a suite of state-of-the-art tools that support digitalization and automatization.
                                        <br> All our innovations are developed in close co-operation with our clients.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-operator-end-->
                    </div>
                </div>
            </div>
        </section>
        <!--How  we operator end-->
        <!--the  REQUIREMENTS  for start-->
        <section class="">
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="left-requirement-main">
                            <div class="title-main mb-50">
                                <h1>THE REQUIREMENTS FOR</h1>
                                <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                            </div>
                            <div class="left-requirement-contant">
                                <h2>Fleet Solutions are diverse </h2>
                                <p>From the needs of an individual, to the goals of a company, to technological and legal requirements, there are noticeable changes in all areas. </p>
                            </div>
                            <div class="sub-contant">
                                <h4>ANSWERING QUESTIONS </h4>
                                <p>How can employee satisfaction be reconciled with the topic of ???savings??? or sustainable Fleet management? How are the requirements of liability issues and the implementation of technological innovation efficiently implemented?
                                </p>
                            </div>
                            <div class="sub-contant">
                                <h4>REACH GOALS</h4>
                                <p>Our mission is to support our customers in achieving their goals along with their operational and strategic requirements. We bring experience, flexibility, transparency and technology to guarantee our mutual success. </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 ">
                        <div class="right-requirement-photo">
                            <img src="{{asset('frontend-asstets/assets/image/fleet-solutions/side-banner.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--the  REQUIREMENTS  for end-->

    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')

</body>

</html>