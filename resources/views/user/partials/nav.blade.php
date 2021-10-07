<header class="nav-menu">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid p-0">
                        <a class="navbar-brand" href="/">
                            <img src="{{asset('frontend-asstets/assets/image/logo/logo.svg')}}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    Our Solutions
                                    <ul>
                                        <li><a href="{{route('retailer.index')}}">For Retailers</a></li>
                                        <li><a href="{{route('ecommerce.index')}}">For E-Commerce</a></li>
                                        <li><a href="{{route('courierservice.index')}}">Courier Service</a></li>
                                        <li><a href="{{route('fleet.index')}}">Fleet Solutions</a></li>
                                        <li><a href="{{route('technology.index')}}">Technology Solutions</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    About Skrillaz
                                    <ul>
                                        <li><a href="{{route('ourvision.index')}}">Our Vision</a></li>
                                        <li><a href="{{route('forbusiness.index')}}">For Businesses</a></li>
                                        <li><a href="">For Couriers</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    Services
                                    <ul>
                                        <li><a href="{{route('on-demand-delivery.index')}}">On Demand Delivery</a></li>
                                        <li><a href="{{route('same-day-delivery.index')}}">Same Day Delivery</a></li>
                                        <li><a href="{{route('next-day-delivery.index')}}">Next Day Delivery</a></li>
                                        <li><a href="{{route('time-sensitive-delivery.index')}}">Time Sensitive Delivery</a></li>
                                        <li><a href="{{route('client-returns.index')}}">Client Returns</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    Company
                                    <ul>
                                        <li><a href="{{route('blog.index')}}">Blog</a></li>
                                        <li><a href="{{route('termsFront.index')}}">Terms and Conditions</a></li>
                                        <li><a href="{{route('privacyFront.index')}}">Privacy Policy</a></li>
                                        <li><a href="{{route('contact.index')}}">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>