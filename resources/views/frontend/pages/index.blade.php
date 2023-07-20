@extends('frontend.layouts.app')
@section('content')
<!-- =============Banner Section============= -->
<section class="banner-section">
    <div class="container">
        <div class="banner-content  wow fadeInUp" data-wow-delay=".3s">
            <span class="category">
                Build a better customer experience
            </span>
            <h1 class="title">reach more customers with faster, more reliable SMS messaging</h1>
            <div class="video-button-group">
                <a href="#0" class="custom-button active">contact to expert</a>
                <div class="v-button">
                    <!-- <span>watch video</span> -->
                    <a data-rel="lightcase:myCollection" href="https://www.youtube.com/embed/GT6-H4BRyqQ" class="video-button"><i class="flaticon-play-button"></i></a>
                </div>
            </div>
            <div class="round-shape">
            </div>
        </div>
    </div>
    <div class="maps-shape bg_img bg-contain" data-background="{{ asset('assets-front/images/banner/banner-bg01.png') }}"></div>
    <div class="shape-thumb">
        <img class="wow slideInUp" data-wow-delay=".7s" src="{{ asset('assets-front/images/banner/banner-shape01.png') }}" alt="banner">
    </div>
</section>
<!-- =============Banner Section============= -->

<!--=================Chooose Us================= -->
<section class="choose-us-section padding-top padding-bottom">
    <div class="container">
        <div class="section-header wow fadeInUp">
            <span class="cate">our feature</span>
            <h2 class="title">why choose us</h2>
        </div>
        <div class="row mb-30-none justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="choose-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="choose-thumb">
                        <i class="flaticon-global"></i>
                    </div>
                    <div class="choose-content">
                        <h5 class="title">Global reach and local presence</h5>
                        <p>Amet mus venenatis diccauctor amet amet eget seeacit over
                        eget sempertatio</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="choose-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="choose-thumb">
                        <i class="flaticon-ui"></i>
                    </div>
                    <div class="choose-content">
                        <h5 class="title">customer user experience</h5>
                        <p>Amet mus venenatis diccauctor amet amet eget seeacit over
                        eget sempertatio</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="choose-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="choose-thumb">
                        <i class="flaticon-clock"></i>
                    </div>
                    <div class="choose-content">
                        <h5 class="title">fast & Flexible solutions</h5>
                        <p>Amet mus venenatis diccauctor amet amet eget seeacit over
                        eget sempertatio</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="bb-dashed"></div>
</div>
<!--=================Chooose Us================= -->

<!--=================Bulk Sms================= -->
<section class="bulk-sms padding-top">
    <div class="container">
        <div class="row flex-wrap-reverse align-items-center">
            <div class="col-lg-6">
                <div class="bulk-content text-center text-sm-left wow fadeIn" data-wow-delay=".3s">
                    <span>wellcome to bulk sms</span>
                    <h2 class="title">global Bulk SMS Service company</h2>
                    <p>Mauris iaculis pede, tellus commodo justo. Ligula in tortmris libero lectus libero aliquet, vestibulum aut nullloret ac sictus, id pede quis quisque lacinia consectetuer. uere eros velit eu nec arcu, repellat urna ad odio nunc. Doletiarcu eginrdum tiunt morbi, aenean dui amet at mapro Sed quis nunc est justo, in in, elit lorem vulputate, suspendisse  pellentesque pede tpluptatem ut mattis, eros diam litora nullam. Ac cras, mollis quis maecenas urna ullamper eros.</p>
                    <a href="#0" class="custom-button active">sign-up & start</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bulk-thumb wow slideInRight">
                    <img src="{{ asset('assets-front/images/bulk/bulk01.png') }}" alt="bulk">
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================Bulk Sms================= -->

<!--=================Our Service================= -->
<section class="service-section padding-bottom padding-top">
    <div class="container">
        <div class="section-header wow fadeInUp">
            <span class="cate">our service</span>
            <h2 class="title">what we do in here</h2>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-love"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">Mask SMS</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-sms"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">non Masking SMS</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-mic"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">voice message</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-route"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">location based SMS</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-megaphone"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">promo SMS</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-thumb">
                        <i class="flaticon-paper-plane"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="title"><a href="#0">Email Service</a></h4>
                        <p>Temporibus magnis. Aliquam netus phasellus wisi utacper fusce wold of messgeuing </p>
                        <a href="#0">Find Out More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================Our Service================= -->

<!--=================Our Offer================= -->
<section class="offer-section bg-ash padding-top padding-bottom">
    <div class="container">
        <div class="section-header wow fadeInUp">
            <span class="cate">our offer</span>
            <h2 class="title">what we offer</h2>
        </div>
    </div>
    <div class="container mw-lg-100">
        <div class="row align-items-center flex-wrap-reverse">
            <div class="col-lg-6">
                <div class="left-side-offer wow fadeInUp" data-wow-delay=".3s">
                    <h4 class="title">get our best offer for your better business</h4>
                    <p>Porttitor vivamus, pellentesque praesent feugiat sitluportaarcu neque sed, augue magna, non libemaurisuricetiam erat, amet ac nulla lectus autem.</p>
                    <ul>
                        <li>Vestibulum id rhoncus tempus nul ultrices sollicitudin</li>
                        <li>Tellus fermentum a aenean varius morbi lorem lacinia</li>
                        <li>Pulvinar cursus imperdiet montes </li>
                        <li>Elementum purus maecenas condimentum sliquam amet inceptos</li>
                        <li>Convallis mi suspendisse eaque consectetuer </li>
                    </ul>
                    <p>Convallis in amet justo. Tellus fermentum a aenelaoreet libero in, at convallis varius morbi lorem lacini Tcomentum id lacinia eros, lectus erat vel nullam, vel auctor.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-side-offer wow slideInRight" data-wow-delay=".3s">
                    <img src="{{ asset('assets-front/images/offer/offer01.png') }}" alt="offer">
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================Our Offer================= -->

<!--=================Client Say================= -->
<section class="client-say padding-bottom padding-top">
    <div class="container">
        <div class="section-header wow fadeInUp">
            <span class="cate">client feedback</span>
            <h2 class="title">client what say about</h2>
        </div>
        <div class="client-say-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="client-item">
                        <div class="client-thumb">
                            <a href="#0"><img src="{{ asset('assets-front/images/client/client02.jpg') }}" alt="client"></a>
                        </div>
                        <div class="client-content">
                            <h4 class="title"><a href="#0">fahad bin foyej</a></h4>
                            <span>Business Man</span>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod teodunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risuodo viverra maecenas accumsan lacus vel facilisis.
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-item">
                        <div class="client-thumb">
                            <a href="#0"><img src="{{ asset('assets-front/images/client/client03.jpg') }}" alt="client"></a>
                        </div>
                        <div class="client-content">
                            <h4 class="title"><a href="#0">Abu Raihan Rafuj</a></h4>
                            <span>Business Man</span>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod teodunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risuodo viverra maecenas accumsan lacus vel facilisis.
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-pagination"></div>
        </div>
    </div>
</section>
<!--=================Client Say================= -->

<!--=================Counter================= -->
<section class="counter-up-section">
    <div class="container">
        <div class="counter-wrapper">
            <div class="counter-item wow fadeInUp" data-wow-delay=".3s">
                <div class="counter-header">
                    <i class="flaticon-call-center"></i>
                    <h2 class="title">
                        <span class="counter">1000</span>+
                    </h2>
                </div>
                <p>Support Countries</p>
            </div>
            <div class="counter-item wow fadeInUp" data-wow-delay=".3s">
                <div class="counter-header">
                    <i class="flaticon-happiness"></i>
                    <h2 class="title">
                        <span class="counter">35</span>k
                    </h2>
                </div>
                <p>happy customers</p>
            </div>
            <div class="counter-item wow fadeInUp" data-wow-delay=".3s">
                <div class="counter-header">
                    <i class="flaticon-project"></i>
                    <h2 class="title">
                        <span class="counter">230</span>
                    </h2>
                </div>
                <p>total project done</p>
            </div>
            <div class="counter-item wow fadeInUp" data-wow-delay=".3s">
                <div class="counter-header">
                    <i class="flaticon-collaboration"></i>
                    <h2 class="title">
                        <span class="counter">658</span>
                    </h2>
                </div>
                <p>team members</p>
            </div>
        </div>
    </div>
</section>
<!--=================Counter================= -->

<!--=================Sms Testing================= -->
<section class="sms-testing padding-bottom padding-top bg-ash">
    <div class="container">
        <div class="section-header wow fadeInUp">
            <span class="cate">sms testing</span>
            <h2 class="title">test your SMS delivery</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="testing-item wow fadeInUp" data-wow-delay=".3s">
                    <h4 class="title">send us your SMS text</h4>
                    <form class="testing-form">
                        <div class="form-group">
                            <input type="text" placeholder="Country">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Registration Email">
                        </div>
                        <div class="form-group w-100">
                            <input type="tel" placeholder="Phone">
                        </div>
                        <div class="form-group w-100">
                            <textarea placeholder="SMS text write in here"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit Now">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testing-item wow fadeInUp" data-wow-delay=".3s">
                    <h4 class="title">about our privacy</h4>
                    <p>Menenatis malesuada at vestibulum, proin at nudit iaculis nullam ut, massa hac, arcu adipiscing in vel ac amllicitudin tempus dictum donec lorem libero. Turpis integpendisse felis, consectetuer odio, volutpat consectetuer erat tortor over hhead to do comeing </p>
                    <ul class="bullet-list">
                        <li>
                            Vestibulum id rhoncus tempus
                        </li>
                        <li>
                            Tellus fermentum a aenean
                        </li>
                        <li>
                            Pulvinar cursus imperdiet
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================Sms Testing================= -->

<!--=================Price Plan================= -->
<section class="price-section padding-top padding-bottom">
    <div class="container">
        <div class="section-header wow fadeInUp">
            <span class="cate">pricing plan</span>
            <h2 class="title">bulk SMS price plan</h2>
        </div>
        <div class="row mb-30-none justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="price-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="price-header">
                        <span class="category">masking SMS</span>
                        <h3 class="sub-title">0.33$<span>sms</span></h3>
                    </div>
                    <ul>
                        <li>
                            <span>validity</span>06 Month
                        </li>
                        <li>
                            <span>quantity</span>600 SMS
                        </li>
                        <li>
                            <span>discount</span>05%
                        </li>
                        <li>
                            <span>24/7</span>yes
                        </li>
                        <li>
                            <span>worldwide access</span>yes
                        </li>
                        <li>
                            <a href="#0" class="custom-button">try now</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="price-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="price-header">
                        <span class="category">non-masking SMS</span>
                        <h3 class="sub-title">0.23$<span>sms</span></h3>
                    </div>
                    <ul>
                        <li>
                            <span>validity</span>06 Month
                        </li>
                        <li>
                            <span>quantity</span>600 SMS
                        </li>
                        <li>
                            <span>discount</span>05%
                        </li>
                        <li>
                            <span>24/7</span>yes
                        </li>
                        <li>
                            <span>worldwide access</span>yes
                        </li>
                        <li>
                            <a href="#0" class="custom-button">try now</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="price-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="price-header">
                        <span class="category">voice message</span>
                        <h3 class="sub-title">0.40$<span>sms</span></h3>
                    </div>
                    <ul>
                        <li>
                            <span>validity</span>06 Month
                        </li>
                        <li>
                            <span>quantity</span>600 SMS
                        </li>
                        <li>
                            <span>discount</span>05%
                        </li>
                        <li>
                            <span>24/7</span>yes
                        </li>
                        <li>
                            <span>worldwide access</span>yes
                        </li>
                        <li>
                            <a href="#0" class="custom-button">try now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================Price Plan================= -->

<!--=================Sponsor Section================= -->
<div class="sponsor-section bg-f3 padding-bottom padding-top">
    <div class="container">
        <div class="sponsor-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor01.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor02.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor03.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor04.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor05.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor06.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor07.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <img src="{{ asset('assets-front/images/sponsor/sponsor08.png') }}" alt="sponsor">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================Sponsor Section================= -->

<!--=================Sponsor Section================= -->
<section class="blog-section padding-bottom padding-top">
    <div class="container">
        <div class="section-header wow fadeInUp">
            <span class="cate">our blog post</span>
            <h2 class="title">the latest post & tips</h2>
        </div>
        <div class="row mb-30-none justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="post-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog.html">
                                <img src="{{ asset('assets-front/images/blog/blog01.jpg') }}" alt="blog">
                            </a>
                            <div class="post-date">
                                <span>22</span>
                                <span>dec</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h4 class="title">
                                <a href="blog.html">Business ipsum dolor cursus amet.</a>
                            </h4>
                            <p>pede augue peltesqvolpegesed sed. Et neque rhonctritiqultieam nunc, vitae consectetueMauorbi aenean non maecenas</p>
                            <a class="read-more" href="blog-details.html">read More <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="post-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog.html">
                                <img src="{{ asset('assets-front/images/blog/blog02.jpg') }}" alt="blog">
                            </a>
                            <div class="post-date">
                                <span>28</span>
                                <span>dec</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h4 class="title">
                                <a href="blog.html">Ectus aliquet nunc est massa nunc placerat</a>
                            </h4>
                            <p>pede augue peltesqvolpegesed sed. Et neque rhonctritiqultieam nunc, vitae consectetueMauorbi aenean non maecenas</p>
                            <a class="read-more" href="blog-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="post-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog.html">
                                <img src="{{ asset('assets-front/images/blog/blog03.jpg') }}" alt="blog">
                            </a>
                            <div class="post-date">
                                <span>31</span>
                                <span>dec</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h4 class="title">
                                <a href="blog.html">Condimentum magni velit mperdiet</a>
                            </h4>
                            <p>pede augue peltesqvolpegesed sed. Et neque rhonctritiqultieam nunc, vitae consectetueMauorbi aenean non maecenas</p>
                            <a class="read-more" href="blog-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection