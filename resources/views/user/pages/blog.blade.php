<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Blog</title>
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
                                <h1>OUR BLOG</h1>
                                <p>Our fast, convenient and reliable last-mile delivery solutions across London and the UK for all kinds of business; from household name retail brands to local independent restaurants. </p>
                                <button><a href="#">Get in touch</a></button>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner-img" data-aos="zoom-in" data-aos-duration="2000">
                                <img src="{{asset('frontend-asstets/assets/image/banner/8.svg')}}" alt="">
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
                            <h1>LATEST FROM BLOG </h1>
                            <img data-aos="zoom-in" data-aos-duration="2000" src="{{asset('frontend-asstets/assets/image/banner/tittle.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="row">
                        <!---single-box-blog-start-->
                        @foreach ($blogs as $blog)
                        <div class="col-xl-4 col-lg-4">
                            <div class="single-box-blog" data-aos="zoom-in" data-aos-duration="2000">
                                <div class="blog-image">
                                    <img src="{{ asset('images/blogs/' . $blog->image) }}" alt="">
                                    <span>{{$blog->category}}</span>
                                </div>
                                <div class="blog-content">
                                    <span>{{ date('jS M Y', strtotime($blog->updated_at)) }}</span>
                                    <h4>{{$blog->title}}</h4>
                                    <a href="/blog/{{ $blog->slug }}">Read more..</a>
                                </div>
                            </div>
                        </div>
                        <!---single-box-blog-end-->
                        @endforeach
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