@extends('front-end.master')
@section('content')
    <section id="hero" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-md-none d-block mb-4">
                    <div class="hero_img text-center">
                        <img src="{{asset('front-end-asset')}}/images/mobile.png" alt="applab" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 offset-lg-1">
                    <div class="hero_text wow slideInLeft">
                        <div class="marking_text">
                <span class="rounded-pill c_padding pe-4 text-dark"><img src="{{asset('front-end-asset')}}/images/arrow-right.png" alt="applab" class="pe-3">
               </span>
                        </div>
                        <h1 class="mt-3">GROW YOUR BUSINESS
                        </h1>
                        <p class="hero_text_p">We provide great solution for save your time to get all your business
                            message in one place</p>
                        <p><a href="#" class="btn rounded-pill c_h_btn">Try for free</a><a href="#" class="btn ps-sm-4 ps-3 color_blue">Watch for free</a></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="hero_img wow slideInRight">
                        <img src="{{asset('front-end-asset')}}/images/mobile.png" alt="applab" class="c_width">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trasted">
        <div class="container">
            <p class="trasted-text text-center">Trusted by companies like</p>
            <div class="row align-items-center justify-content-center gy-4 wow slideInLeft">
                <div class="col-md col-4"><img src="{{asset('front-end-asset')}}/images/company-1.png" alt="applab" class="img-fluid"></div>
                <div class="col-md col-4"><img src="{{asset('front-end-asset')}}/images/company-2.png" alt="applab" class="img-fluid"></div>
                <div class="col-md col-4"><img src="{{asset('front-end-asset')}}/images/company-3.png" alt="applab" class="img-fluid"></div>
                <div class="col-md col-4"><img src="{{asset('front-end-asset')}}/images/company-4.png" alt="applab" class="img-fluid"></div>
                <div class="col-md col-4"><img src="{{asset('front-end-asset')}}/images/company-5.png" alt="applab" class="img-fluid"></div>
            </div>
        </div>
    </section>
    <section class="awesome-app trasted" id="awesome">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="awesome-app-img wow slideInLeft">
                        <img src="{{asset('front-end-asset')}}/images/feature-bg.png" alt="applab" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="awesome-app-heading wow slideInRight">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8">
                                <h1>Awesome app feature</h1>
                            </div>
                            <div class="col-lg-10">
                                <p>Increase productivity with a simple to-do app. app for
                                    managing your personal budgets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="awesome-app-text">
                        <div class="single_item mb-4">
                            <div class="row align-items-center wow slideInRight" data-wow-delay=".3s">
                                <div class="col-lg-2 col-md-3 col-sm-2 col-3"><img src="{{asset('front-end-asset')}}/images/fast-performance.png" alt="applab" class="img-fluid"></div>
                                <div class="col-lg-10 col-md-9 col-sm-10 col-9">
                                    <div class="single_item_text">
                                        <h3>Fast Performence</h3>
                                        <p>Get your blood tests delivered at
                                            home collect a sample from the
                                            news your blood tests.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_item mb-4">
                            <div class="row align-items-center wow slideInRight" data-wow-delay=".6s">
                                <div class="col-lg-2 col-md-3 col-sm-2 col-3"><img src="{{asset('front-end-asset')}}/images/prototype.png" alt="applab" class="img-fluid"></div>
                                <div class="col-lg-10 col-md-9 col-sm-10 col-9">
                                    <div class="single_item_text">
                                        <h3 class="color-2563ff">Prototyping</h3>
                                        <p>Get your blood tests delivered at
                                            home collect a sample from the
                                            news your blood tests.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_item">
                            <div class="row align-items-center wow slideInRight" data-wow-delay=".9s">
                                <div class="col-lg-2 col-md-3 col-sm-2 col-3"><img src="{{asset('front-end-asset')}}/images/vector.png" alt="applab" class="img-fluid"></div>
                                <div class="col-lg-10 col-md-9 col-sm-10 col-9">
                                    <div class="single_item_text">
                                        <h3 class="color-40975f">Vector Editing</h3>
                                        <p>Get your blood tests delivered at
                                            home collect a sample from the
                                            news your blood tests.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="smart">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="smart_heading wow slideInLeft">
                        <h1>Smart jackpots that
                            you may love this
                            anytime & anywhere</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="smart_para wow slideInRight" data-wow-delay=".3s">
                        <p>The rise of mobile devices transforms the way we
                            consume information entirely and the world's most
                            elevant channels such as Facebook.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service smart">
        <div class="container">
            <div class="row g-lg-5 g-md-4 g-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service wow bounceInLeft">
                        <img src="{{asset('front-end-asset')}}/images/automatic.png" alt="applab" class="img-fluid d-block">
                        <h3>Automatic Payouts</h3>
                        <p>Get your blood tests delivered at
                            home collect a sample from the
                            news your blood tests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service wow bounceInDown">
                        <img src="{{asset('front-end-asset')}}/images/network.png" alt="applab" class="img-fluid d-block">
                        <h3 class="color-2563ff">Network Effect</h3>
                        <p>Get your blood tests delivered at
                            home collect a sample from the
                            news your blood tests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service wow bounceInRight">
                        <img src="{{asset('front-end-asset')}}/images/rewards.png" alt="applab" class="img-fluid d-block">
                        <h3 class="color-40975f">Bigger Rewards Method</h3>
                        <p>Get your blood tests delivered at
                            home collect a sample from the
                            news your blood tests.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="designed faq smart">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <div class="awesome-app-img wow bounceInLeft">
                        <img src="{{asset('front-end-asset')}}/images/call-to-action.png" alt="applab" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="designed_text  wow bounceInRight">
                        <h1>Designed & built by
                            the latest code
                            integration</h1>
                        <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        <button class="btn rounded-pill c_h_btn" type="button">Learn more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choose trasted">
        <div class="container">
            <div class="choose_heading">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="choose_title text-center">
                            <h1>Why you should choose
                                our app</h1>
                        </div>
                    </div>
                    <div class="col-lg-8 text-center">
                        <div class="choose_text">
                            <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-lg-5 g-md-4 g-3">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single_choose_item text-center wow bounceInUp" data-wow-offset="10">
                        <img src="{{asset('front-end-asset')}}/images/app.png" alt="applab" class="img-fluid d-block m-auto">
                        <h3>App Development</h3>
                        <p>Get your blood tests delivered at
                            home collect a sample from the
                            news your blood tests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single_choose_item text-center wow bounceInUp" data-wow-delay=".3s" data-wow-offset="10">
                        <img src="{{asset('front-end-asset')}}/images/time-award.png" alt="applab" class="img-fluid d-block m-auto">
                        <h3>10 Times Award</h3>
                        <p>Get your blood tests delivered at
                            home collect a sample from the
                            news your blood tests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single_choose_item text-center wow bounceInUp" data-wow-delay=".6s" data-wow-offset="10">
                        <img src="{{asset('front-end-asset')}}/images/cloud.png" alt="applab" class="img-fluid d-block m-auto">
                        <h3>Cloud Storage</h3>
                        <p>Get your blood tests delivered at
                            home collect a sample from the
                            news your blood tests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single_choose_item text-center wow bounceInUp" data-wow-delay=".9s" data-wow-offset="10">
                        <img src="{{asset('front-end-asset')}}/images/customization.png" alt="applab" class="img-fluid d-block m-auto">
                        <h3>Customization</h3>
                        <p>Get your blood tests delivered at
                            home collect a sample from the
                            news your blood tests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single_choose_item text-center wow bounceInUp" data-wow-delay="1.2s" data-wow-offset="10">
                        <img src="{{asset('front-end-asset')}}/images/ux.png" alt="applab" class="img-fluid d-block m-auto">
                        <h3>UX Planning</h3>
                        <p>Get your blood tests delivered at
                            home collect a sample from the
                            news your blood tests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single_choose_item text-center wow bounceInUp" data-wow-delay="1.5s" data-wow-offset="10">
                        <img src="{{asset('front-end-asset')}}/images/support.png" alt="applab" class="img-fluid d-block m-auto">
                        <h3>Custom Support</h3>
                        <p>Get your blood tests delivered at
                            home collect a sample from the
                            news your blood tests.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ultimate trasted">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-md-none d-block">
                    <div class="awesome-app-img text-center">
                        <img src="{{asset('front-end-asset')}}/images/ultimate-feature.png" alt="applab" class="img-fluid mb-3">
                    </div>
                </div>
                <div class="col-md-6 wow slideInLeft">
                    <div class="awesome-app-heading">
                        <div class="row">
                            <div class="col-xl-8 col-lg-9">
                                <h1>Ultimate features
                                    that we built</h1>
                            </div>
                            <div class="col-lg-10">
                                <p>The rise of mobile devices transforms the way we consume information entirely.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-md-4 gy-3 mb-md-4 mb-sm-3 mb-2">
                        <div class="col-md-6">
                            <div class="single_choose_item">
                                <img src="{{asset('front-end-asset')}}/images/app.png" alt="applab" class="img-fluid d-block">
                                <h3>App Development</h3>
                                <p>Get your blood tests delivered at
                                    home collect a sample from the
                                    news your blood tests.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_choose_item">
                                <img src="{{asset('front-end-asset')}}/images/cloud.png" alt="applab" class="img-fluid d-block">
                                <h3>UX planning</h3>
                                <p>Get your blood tests delivered at
                                    home collect a sample from the
                                    news your blood tests.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_choose_item">
                                <img src="{{asset('front-end-asset')}}/images/ux.png" alt="applab" class="img-fluid d-block">
                                <h3>Cloud Storage</h3>
                                <p>Get your blood tests delivered at
                                    home collect a sample from the
                                    news your blood tests.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_choose_item">
                                <img src="{{asset('front-end-asset')}}/images/support.png" alt="applab" class="img-fluid d-block">
                                <h3>Custom Support</h3>
                                <p>Get your blood tests delivered at
                                    home collect a sample from the
                                    news your blood tests.</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn rounded-pill c_h_btn" type="button">See all</button>
                </div>
                <div class="col-md-6 d-md-block d-none wow slideInRight">
                    <div class="awesome-app-img">
                        <img src="{{asset('front-end-asset')}}/images/ultimate-feature.png" alt="applab" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="price faq trasted" id="price">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="choose_title text-center">
                        <h1>Get awesome features, without extra charges</h1>
                    </div>
                    <div class="choose_text text-center">
                        <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                    </div>
                    <div class="d-block text-center">
                        <div class="c_btn_group">
                            <button type="button" class="btn active1 c_click1">Monthly</button>
                            <button type="button" class="btn c_click2">Annually</button>
                        </div>
                    </div>
                    <div class="row mt-5 gx-lg-5 gx-4">
                        <div class="col-sm-6 wow slideInLeft">
                            <div class="single_price scale mb-sm-0 mb-3">
                                <div class="single_price_heading text-center">
                                    <h2>$0<span>/month</span></h2>
                                    <h3>Business class</h3>
                                    <p>For small team or office</p>
                                </div>
                                <div class="single_price_detail text-center">
                                    <p>Darg & Drop Builder</p>
                                    <p>1,000's of Templates</p>
                                    <p>Blog Support Tools</p>
                                    <p>eCommerce Store</p>
                                    <button class="btn rounded-pill c_h_btn mt-2" type="button">Start free trail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow slideInRight">
                            <div class="single_price">
                                <div class="single_price_heading text-center">
                                    <h2>$99<span>/month</span></h2>
                                    <h3>Pro Master</h3>
                                    <p>For best opportunity</p>
                                </div>
                                <div class="single_price_detail text-center">
                                    <p>Darg & Drop Builder</p>
                                    <p>1,000's of Templates</p>
                                    <p>Blog Support Tools</p>
                                    <p>eCommerce Store</p>
                                    <button class="btn rounded-pill c_h_btn mt-2" type="button">Start free trail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial trasted" id="testimonial">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow slideInLeft">
                    <img src="{{asset('front-end-asset')}}/images/testimonial.png" alt="applab" class="img-fluid mb-md-0 mb-3">
                </div>
                <div class="col-lg-6 wow slideInRight">
                    <!-- slider start -->
                    <div id="firstSlider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="c_slider">
                                    <h2>Meet Client Satisfaction
                                        by using product</h2>
                                    <p class="sliderFPara">
                                        The rise of mobile devices transforms the way we consume. Elevant channels such as Facebook.
                                    </p>
                                    <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                    <h4>User friendly & Customizable</h4>
                                    <p class="sliderSPara">
                                        Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
                                    </p>
                                    <div class="row align-items-center">
                                        <div class="col-lg-2 col-sm-2 col-3">
                                            <img src="{{asset('front-end-asset')}}/images/user.png" alt="applab" class="img-fluid">
                                        </div>
                                        <div class="col-lg-5 col-sm-6 col-7">
                                            <h5>Zoltan Nemeth</h5>
                                            <span class="personPosition">CEO of Pixer Lab</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="c_slider">
                                    <h2>Meet Client Satisfaction
                                        by using product</h2>
                                    <p class="sliderFPara">
                                        The rise of mobile devices transforms the way we consume. Elevant channels such as Facebook.
                                    </p>
                                    <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                    <h4>User friendly & Customizable</h4>
                                    <p class="sliderSPara">
                                        Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
                                    </p>
                                    <div class="row align-items-center">
                                        <div class="col-lg-2 col-sm-2 col-3">
                                            <img src="{{asset('front-end-asset')}}/images/user.png" alt="applab" class="img-fluid">
                                        </div>
                                        <div class="col-lg-5 col-sm-6 col-7">
                                            <h5>Zoltan Nemeth</h5>
                                            <span class="personPosition">CEO of Pixer Lab</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="c_slider">
                                    <h2>Meet Client Satisfaction
                                        by using product</h2>
                                    <p class="sliderFPara">
                                        The rise of mobile devices transforms the way we consume. Elevant channels such as Facebook.
                                    </p>
                                    <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                    <h4>User friendly & Customizable</h4>
                                    <p class="sliderSPara">
                                        Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
                                    </p>
                                    <div class="row align-items-center">
                                        <div class="col-lg-2 col-sm-2 col-3">
                                            <img src="{{asset('front-end-asset')}}/images/user.png" alt="applab" class="img-fluid">
                                        </div>
                                        <div class="col-lg-5 col-sm-6 col-7">
                                            <h5>Zoltan Nemeth</h5>
                                            <span class="personPosition">CEO of Pixer Lab</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev c_c_p" type="button" data-bs-target="#firstSlider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon c_c_p_icon" aria-hidden="true"></span>
                            <i class="fas fa-arrow-left"></i>
                        </button>
                        <button class="carousel-control-next c_c_n" type="button" data-bs-target="#firstSlider" data-bs-slide="next">
                            <span class="carousel-control-next-icon c_c_n_icon" aria-hidden="true"></span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                    <!-- slider end -->
                </div>
            </div>
        </div>
    </section>
    <section class="faq trasted" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="choose_title text-center">
                        <h1>Frequently asked questions</h1>
                    </div>
                    <div class="choose_text text-center">
                        <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center  wow slideInRight">
                <div class="col-lg-10 col-12">
                    <div class="accordion" id="firstAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How to contact with riders emergency?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#firstAccordion">
                                <div class="accordion-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    App installation failed, how to update system information?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#firstAccordion">
                                <div class="accordion-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Website reponse taking time, how to improve?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#firstAccordion">
                                <div class="accordion-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    New update fixed all bug and issues
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#firstAccordion">
                                <div class="accordion-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How to contact with riders emergency?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#firstAccordion">
                                <div class="accordion-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="download trasted">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 wow slideInLeft">
                    <div class="download_text">
                        <h1> Download our App now!</h1>
                        <p>The rise of mobile devices transforms the way we consume information entirely
                            and the world's most elevant channels such as Facebook.</p>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                                <button type="button" class="btn p-0"><img src="{{asset('front-end-asset')}}/images/google-play.png" alt="applab" class="img-fluid"></button>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                                <button type="button" class="btn p-0"><img src="{{asset('front-end-asset')}}/images/app-store.png" alt="applab" class="img-fluid"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow slideInRight">
                    <img src="{{asset('front-end-asset')}}/images/cta.png" alt="applab" class="img-fluid c_img_margin">
                </div>
            </div>
        </div>
    </section>
@endsection