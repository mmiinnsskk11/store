@extends('layouts.app')

@section('content')

    @include('elements.header')

    <section class="about-us-page">
        <div class="container">
            <div class="heading-sub ver2">
                <h3 class="pull-left">ABOUT US</h3>
                <ul class="other-link-sub pull-right">
                    <li><a href="/">Главная</a></li>
                    <li><a class="active" href="#aboutus">О нас</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="widget-about-us">
                <a href="#"><img src="img/about/about-us.png" alt="imgages" class="img-responsive"></a>
                <div class="text-description">
                    <p>I’m a freelance fashion designer who specialises in print designs and combining fabrics. My designs have been sold all over Europe and the USA and I have worked with some of the biggest designers in the industry. I’m also currently working with a big supermarket to develop a gorgeous, yet affordable, range of beautifully printed key pieces that no women’s wardrobe should be without!</p>
                    <p>To see a selection of my designs and sketches, which is how all my best designs start, take a look at my portfolio page. To see who I have worked with see my client list and stockists.</p>
                    <p>I’m a freelance fashion designer who specialises in print designs and combining fabrics. My designs have been sold all over Europe and the USA and I have worked with some of the biggest designers in the industry. I’m also currently working with a big supermarket to develop a gorgeous, yet affordable, range of beautifully printed key pieces that no women’s wardrobe should be without!</p>
                </div>
            </div>
        </div>
    </section>
    <div class="brand">
        <div class="container">
            <div class="owl-carousel owl-theme js-owl-brand">
                <div class="item">
                    <a href="#"><img src="img/brand/midnight.jpg" alt="images" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/brand/shepad.jpg" alt="images" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/brand/target.jpg" alt="images" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/brand/netsuite.jpg" alt="images" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/brand/yourclothes.jpg" alt="images" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/brand/midnight.jpg" alt="images" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/brand/midnight.jpg" alt="images" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/brand/midnight.jpg" alt="images" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/brand/midnight.jpg" alt="images" class="img-responsive"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="img/brand/midnight.jpg" alt="images" class="img-responsive"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fea-column-inner">
                    <div class="fea-box">
                        <div class="photo">
                            <img src="img/gift.png" alt="images" class="img-reponsive">
                        </div>
                        <p class="inform-ver2">
                            <span class="strong">Deal of the day<br></span> check out today's deal
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fea-column-inner">
                    <div class="fea-box">
                        <div class="photo">
                            <img src="img/fly.png" alt="images" class="img-reponsive">
                        </div>
                        <p class="inform-ver2">
                            <span class="strong">Free Shipping<br></span> on thousands of products
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fea-column-inner">
                    <div class="fea-box">
                        <div class="photo">
                            <img src="img/return.png" alt="images" class="img-reponsive">
                        </div>
                        <p class="inform-ver2">
                            <span class="strong">Easy Returns<br></span> on all purchases made
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fea-column-inner">
                    <div class="fea-box">
                        <div class="photo">
                            <img src="img/secu.png" alt="images" class="img-reponsive">
                        </div>
                        <p class="inform-ver2">
                            <span class="strong">Best Services Medal<br></span> we are proud of best service
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('elements.footer')
