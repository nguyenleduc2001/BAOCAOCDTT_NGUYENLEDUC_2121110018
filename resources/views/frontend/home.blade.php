@extends('layouts.site')
@section('title', 'NLD-MARKET')
@section('header')
    <b class="screen-overlay"></b>

    <header class="section-header">
        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <a href="http://bootstrap-ecommerce.com" class="brand-wrap">
                            <H1>NLD-MARKET </H1>
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <select class="custom-select border-right" name="category_name">
                                    <option value="">All type</option>
                                    <option value="codex">Special</option>
                                    <option value="comments">Only best</option>
                                    <option value="content">Latest</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Search">

                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="widgets-wrap float-md-right">
                            <div class="widget-header mr-3">
                                <a href="#" class="widget-view">
                                    <div class="icon-area">
                                        <i class="fa fa-user"></i>
                                        <span class="notify">3</span>
                                    </div>
                                    <small class="text"> My profile </small>
                                </a>
                            </div>
                            <div class="widget-header mr-3">
                                <a href="#" class="widget-view">
                                    <div class="icon-area">
                                        <i class="fa fa-comment-dots"></i>
                                        <span class="notify">1</span>
                                    </div>
                                    <small class="text"> Message </small>
                                </a>
                            </div>
                            <div class="widget-header mr-3">
                                <a href="#" class="widget-view">
                                    <div class="icon-area">
                                        <i class="fa fa-store"></i>
                                    </div>
                                    <small class="text"> Orders </small>
                                </a>
                            </div>
                            <div class="widget-header">
                                <a href="#" class="widget-view">
                                    <div class="icon-area">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <small class="text"> Cart </small>
                                </a>
                            </div>
                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section>
    @endsection
    @section('content')
        <nav class="navbar navbar-main navbar-expand-lg border-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <x-main-menu />
                <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav>

    </header> <!-- section-header.// -->


    <div class="container">
        <!-- ========================= SECTION MAIN  ========================= -->
        <section class="section-main padding-y">
            <main class="card">
                <div class="card-body">

                    <div class="row">
                        <aside class="col-lg col-md-3 flex-lg-grow-0">

                        </aside> <!-- col.// -->
                        <div class="col-md-9 col-xl-7 col-lg-7">

                            <!-- ================== COMPONENT SLIDER  BOOTSTRAP  ==================  -->
                            <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                                    <li data-target="#carousel1_indicator" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/slider/1a.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/slider/1b.png" alt="Second slide">
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#carousel1_indicator" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel1_indicator" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- ==================  COMPONENT SLIDER BOOTSTRAP end.// ==================  .// -->

                        </div> <!-- col.// -->
                        <div class="col-md d-none d-lg-block flex-grow-1">
                            <aside class="special-home-right">
                                <h6 class="bg-blue text-center text-white mb-0 p-2">Popular category</h6>

                                <div class="card-banner border-bottom">
                                    <div class="py-3" style="width:80%">
                                        <h6 class="card-title">Men clothing</h6>
                                        <a href="#" class="btn btn-secondary btn-sm"> Source now </a>
                                    </div>
                                    <img src="images/product/bep-gas-am-canzy-cz-eb688.png" height="80"
                                        class="img-bg">
                                </div>

                                <div class="card-banner border-bottom">
                                    <div class="py-3" style="width:80%">
                                        <h6 class="card-title">Winter clothing </h6>
                                        <a href="#" class="btn btn-secondary btn-sm"> Source now </a>
                                    </div>
                                    <img src="images/product/bo-dao-zwilling-gourmet-set-7-tu-mai.jpg" height="80"
                                        class="img-bg">
                                </div>

                                <div class="card-banner border-bottom">
                                    <div class="py-3" style="width:80%">
                                        <h6 class="card-title">Home inventory</h6>
                                        <a href="#" class="btn btn-secondary btn-sm"> Source now </a>
                                    </div>
                                    <img src="images/product/tu-lanh-lg-inverter-635-lit-gr-x257mc-san-pham-trung-bay.jpg"
                                        height="80" class="img-bg">
                                </div>

                            </aside>
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->

                </div> <!-- card-body.// -->
            </main> <!-- card.// -->

        </section>
        <!-- ========================= SECTION MAIN END// ========================= -->



        <!-- =============== SECTION DEAL =============== -->
        <section class="padding-bottom">
            <div class="card card-deal">
                <div class="col-heading content-body">
                    <header class="section-heading">
                        <h3 class="section-title">Deals and offers</h3>
                        <p>Hygiene equipments</p>
                    </header><!-- sect-heading -->
                    <div class="timer">
                        <div> <span class="num">04</span> <small>Days</small></div>
                        <div> <span class="num">12</span> <small>Hours</small></div>
                        <div> <span class="num">58</span> <small>Min</small></div>
                        <div> <span class="num">02</span> <small>Sec</small></div>
                    </div>
                </div> <!-- col.// -->
                <div class="row no-gutters items-wrap">
                    <div class="col-md col-6">
                        <figure class="card-product-grid card-sm">
                            <a href="#" class="img-wrap">
                                <img src="images/product/tu-lanh-lg-inverter-635-lit-gr-x257mc-san-pham-trung-bay.jpg">
                            </a>
                            <div class="text-wrap p-3">
                                <a href="#" class="title">Tủ Lạnh</a>
                                <span class="badge badge-danger"> -20% </span>
                            </div>
                        </figure>
                    </div> <!-- col.// -->
                    <div class="col-md col-6">
                        <figure class="card-product-grid card-sm">
                            <a href="#" class="img-wrap">
                                <img src="images/items/4.jpg">
                            </a>
                            <div class="text-wrap p-3">
                                <a href="#" class="title">Chảo</a>
                                <span class="badge badge-danger"> -5% </span>
                            </div>
                        </figure>
                    </div> <!-- col.// -->
                    <div class="col-md col-6">
                        <figure class="card-product-grid card-sm">
                            <a href="#" class="img-wrap">
                                <img src="images/product/tap-de-nau-an-hinh-gau-dau-sieu-de-thuong.jpg  ">
                            </a>
                            <div class="text-wrap p-3">
                                <a href="#" class="title">Tạp Dề</a>
                                <span class="badge badge-danger"> -20% </span>
                            </div>
                        </figure>
                    </div> <!-- col.// -->
                    <div class="col-md col-6">
                        <figure class="card-product-grid card-sm">
                            <a href="#" class="img-wrap">
                                <img src="images/product/bep-gas-am-canzy-cz-eb688.png">
                            </a>
                            <div class="text-wrap p-3">
                                <a href="#" class="title">Bếp Ga</a>
                                <span class="badge badge-danger"> -15% </span>
                            </div>
                        </figure>
                    </div> <!-- col.// -->
                    <div class="col-md col-6">
                        <figure class="card-product-grid card-sm">
                            <a href="#" class="img-wrap">
                                <img src="images/product/bo-dao-zwilling-gourmet-set-7-tu-mai.jpg">
                            </a>
                            <div class="text-wrap p-3">
                                <a href="#" class="title text-truncate">Dao</a>
                                <span class="badge badge-danger"> -10% </span>
                            </div>
                        </figure>
                    </div> <!-- col.// -->
                </div>
            </div>

        </section>
        <!-- =============== SECTION DEAL // END =============== -->

        <!-- =============== SECTION 1 =============== -->
        {{-- <div class="home-category-banner bg-light-orange">
                            <h5 class="title">Best trending clothes only for summer</h5>
                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. </p>
                            <a href="#" class="btn btn-outline-primary rounded-pill">Source now</a>
                            <img src="images/items/2.jpg" class="img-bg">
                        </div> --}}
        <section class="padding-bottom">
            <header class="section-heading heading-line">
                {{-- @foreach ($list_category as $category)
                    <x-product-home :rowcate="$category" />
                    <div class="col-md-9">
                        <ul class="row no-gutters bordered-cols">
                            <li class="col-6 col-lg-3 col-md-4">
                                <a href="#" class="item">
                                    <div class="card-body">
                                        @foreach ($new_product as $product)
                                            <div class="col-6 col-md-3 " style=width:160px>
                                                <x-product-item :productitem="$product" />
                                                 <p class="text-muted"><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                            </div>
                                        @endforeach
                                        
                                       
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                @endforeach --}}
            </header>

            <div class="card card-home-category">
                <div class="row no-gutters">
                    <div class="col-md-3">



                    </div> <!-- col.// -->
                    <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->
        </section>
        <!-- =============== SECTION 1 END =============== -->

        <!-- =============== SECTION 2 =============== -->
        {{-- <section class="padding-bottom">
            <header class="section-heading heading-line">
                <h4 class="title-section text-uppercase">Electronics</h4>
            </header>

            <div class="card card-home-category">
                <div class="row no-gutters">
                    <div class="col-md-3">

                        <div class="home-category-banner bg-light-orange">
                            <h5 class="title">Machinery items for manufacturers</h5>
                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. </p>
                            <a href="#" class="btn btn-outline-primary rounded-pill">Source now</a>
                            <img src="images/items/14.jpg" class="img-bg">
                        </div>

                    </div> <!-- col.// -->
                    <div class="col-md-9">
                        <ul class="row no-gutters bordered-cols">
                            <li class="col-6 col-lg-3 col-md-4">
                                <a href="#" class="item">
                                    <div class="card-body">
                                        <h6 class="title">Well made electronic stuff collection </h6>
                                        <img class="img-sm float-right" src="images/items/7.jpg">
                                        <p class="text-muted"><i class="fa fa-map-marker-alt"></i> Tokyo, Japan</p>
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-lg-3 col-md-4">
                                <a href="#" class="item">
                                    <div class="card-body">
                                        <h6 class="title">Another demo text for item stuff goes here </h6>
                                        <img class="img-sm float-right" src="images/items/8.jpg">
                                        <p class="text-muted"><i class="fa fa-map-marker-alt"></i> Hong Kong, China
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-lg-3 col-md-4">
                                <a href="#" class="item">
                                    <div class="card-body">
                                        <h6 class="title">Home and kitchen electronic stuff collection </h6>
                                        <img class="img-sm float-right" src="images/items/9.jpg">
                                        <p class="text-muted"><i class="fa fa-map-marker-alt"></i> Tashkent, Uzb</p>
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-lg-3 col-md-4">
                                <a href="#" class="item">
                                    <div class="card-body">
                                        <h6 class="title">Group of electronic stuff collection </h6>
                                        <img class="img-sm float-right" src="images/items/10.jpg">
                                        <p class="text-muted"><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-lg-3 col-md-4">
                                <a href="#" class="item">
                                    <div class="card-body">
                                        <h6 class="title">Home and kitchen electronic stuff collection </h6>
                                        <img class="img-sm float-right" src="images/items/11.jpg">
                                        <p class="text-muted"><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-lg-3 col-md-4">
                                <a href="#" class="item">
                                    <div class="card-body">
                                        <h6 class="title">Home and kitchen electronic stuff collection </h6>
                                        <img class="img-sm float-right" src="images/items/12.jpg">
                                        <p class="text-muted"><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-lg-3 col-md-4">
                                <a href="#" class="item">
                                    <div class="card-body">
                                        <h6 class="title">Home and kitchen electronic stuff collection </h6>
                                        <img class="img-sm float-right" src="images/items/1.jpg">
                                        <p class="text-muted"><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>

                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-lg-3 col-md-4">
                                <a href="#" class="item">
                                    <div class="card-body">
                                        <h6 class="title">Home and kitchen electronic stuff collection </h6>
                                        <img class="img-sm float-right" src="images/items/2.jpg">
                                        <p class="text-muted"><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->
        </section> --}}
        <!-- =============== SECTION 2 END =============== -->



        <!-- =============== SECTION REQUEST =============== -->

        <section class="padding-bottom">

            <header class="section-heading heading-line">
                <h4 class="title-section text-uppercase">Request for Quotation</h4>
            </header>

            <div class="row">
                <div class="col-md-8">
                    <div class="card-banner banner-quote overlay-gradient"
                        style="background-image: url('images/slider/1a.jpg');">
                        <div class="card-img-overlay white">
                            <h3 class="card-title">Hãy liên hệ tới hệ thống NLD-MAKERT</h3>
                            <p class="card-text" style="max-width: 400px">Nếu như có thắc mắc, hãy điền form để thông báo hoặc gọi đường dây nóng 19001009
                                để được tư vấn và giúp đỡ</p>
                            <a href="" class="btn btn-primary rounded-pill">Liên hệ</a>
                        </div>
                    </div>
                </div> <!-- col // -->
                <div class="col-md-4">

                    <div class="card card-body">
                        <h4 class="title py-3">One Request, Multiple Quotes</h4>
                        <form>
                            <div class="form-group">
                                <input class="form-control" name="" placeholder="What are you looking for?"
                                    type="text">
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Quantity" name="" type="text">

                                    <select class="custom-select form-control">
                                        <option>Pieces</option>
                                        <option>Litres</option>
                                        <option>Tons</option>
                                        <option>Gramms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-muted">
                                <p>Select template type:</p>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="option1">
                                    <span class="form-check-label">Request price</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="option2">
                                    <dspaniv class="form-check-label">Request a sample</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-warning">Request for quote</button>
                            </div>
                        </form>
                    </div>

                </div> <!-- col // -->
            </div> <!-- row // -->
        </section>

        <!-- =============== SECTION REQUEST .//END =============== -->


        <!-- =============== SECTION ITEMS =============== -->
        <!-- =============== SECTION ITEMS .//END =============== -->


        <!-- =============== SECTION SERVICES =============== -->

    </div>
@endsection
@section('footer')

    <section class="padding-bottom">

        <header class="section-heading heading-line">
            <h4 class="title-section text-uppercase">Trade services</h4>
        </header>

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <article class="card card-post">
                    <img src="images/posts/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="title">Trade Assurance</h6>
                        <p class="small text-uppercase text-muted">Order protection</p>
                    </div>
                </article> <!-- card.// -->
            </div> <!-- col.// -->
            <div class="col-md-3 col-sm-6">
                <article class="card card-post">
                    <img src="images/posts/2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="title">Pay anytime</h6>
                        <p class="small text-uppercase text-muted">Finance solution</p>
                    </div>
                </article> <!-- card.// -->
            </div> <!-- col.// -->
            <div class="col-md-3 col-sm-6">
                <article class="card card-post">
                    <img src="images/posts/3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="title">Inspection solution</h6>
                        <p class="small text-uppercase text-muted">Easy Inspection</p>
                    </div>
                </article> <!-- card.// -->
            </div> <!-- col.// -->
            <div class="col-md-3 col-sm-6">
                <article class="card card-post">
                    <img src="images/posts/4.jpg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="title">Ocean and Air Shipping</h6>
                        <p class="small text-uppercase text-muted">Logistic services</p>
                    </div>
                </article> <!-- card.// -->
            </div> <!-- col.// -->
        </div> <!-- row.// -->

    </section>
    <!-- =============== SECTION SERVICES .//END =============== -->

    <!-- =============== SECTION REGION =============== -->
    <section class="padding-bottom">

        <header class="section-heading heading-line">
            <h4 class="title-section text-uppercase">Choose region</h4>
        </header>

        <ul class="row mt-4">
            <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm"
                        src="images/icons/flags/CN.png"> <span>China</span> </a></li>
            <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm"
                        src="images/icons/flags/DE.png"> <span>Germany</span> </a></li>
            <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm"
                        src="images/icons/flags/AU.png"> <span>Australia</span> </a></li>
            <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm"
                        src="images/icons/flags/RU.png"> <span>Russia</span> </a></li>
            <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm"
                        src="images/icons/flags/IN.png"> <span>India</span> </a></li>
            <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm"
                        src="images/icons/flags/GB.png"> <span>England</span> </a></li>
            <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm"
                        src="images/icons/flags/TR.png"> <span>Turkey</span> </a></li>
            <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm"
                        src="images/icons/flags/UZ.png"> <span>Uzbekistan</span> </a></li>
            <li class="col-md col-6"><a href="#" class="icontext"> <i class="mr-3 fa fa-ellipsis-h"></i>
                    <span>More regions</span> </a></li>
        </ul>
    </section>
    <!-- =============== SECTION REGION .//END =============== -->

    <article class="my-4">
        <img src="images/banners/ad-sm.png" class="w-100">
    </article>
    <section class="section-subscribe padding-y-lg">
        <div class="container">

            <p class="pb-2 text-center text-white">Delivering the latest product trends and industry news straight to
                your inbox</p>

            <div class="row justify-content-md-center">
                <div class="col-lg-5 col-md-6">
                    <form class="form-row">
                        <div class="col-md-8 col-7">
                            <input class="form-control border-0" placeholder="Your Email" type="email">
                        </div> <!-- col.// -->
                        <div class="col-md-4 col-5">
                            <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i>
                                Subscribe </button>
                        </div> <!-- col.// -->
                    </form>
                    <small class="form-text text-white-50">We’ll never share your email address with a third-party.
                    </small>
                </div> <!-- col-md-6.// -->
            </div>


        </div>
    </section>
@endsection
