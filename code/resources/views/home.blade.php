@extends('layouts.app')

@section('content')

@include('elements.header')

    <section class="slide">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="row top-row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-item js-banner">
                                <div class="slide-img">
                                    <img src="img/slider/image-slider1.jpg" alt="images" class="img-reponsive">
                                    <div class="slide-content">
                                        <h5 class="brand">Sony ALPHA</h5>
                                        <h3><span class="strong">Perfection</span><br>for all</h3>
                                        <p>Dolor sit amet, consecte, adipiscing.</p>
                                    </div>
                                    <a href="#" class="slide-button">shop now</a>
                                </div>
                                <div class="slide-img">
                                    <img src="img/slider/image-slider2.jpg" alt="images" class="img-reponsive">
                                    <div class="slide-content ver2">
                                        <h5 class="brand">Sony ALPHA</h5>
                                        <h3><span class="strong">Perfection</span><br>for all</h3>
                                        <p>Dolor sit amet, consecte, adipiscing.</p>
                                    </div>
                                    <a href="#" class="slide-button">shop now</a>
                                </div>
                                <div class="slide-img">
                                    <img src="img/slider/image-slider3.jpg" alt="images" class="img-reponsive">
                                    <div class="slide-content ver2">
                                        <h5 class="brand">Sony ALPHA</h5>
                                        <h3><span class="strong">Perfection</span><br>for all</h3>
                                        <p>Dolor sit amet, consecte, adipiscing.</p>
                                    </div>
                                    <a href="#" class="slide-button">shop now</a>
                                </div>
                                <div class="slide-img">
                                    <img src="img/slider/image-slider4.jpg" alt="images" class="img-reponsive">
                                    <div class="slide-content ver2">
                                        <h5 class="brand">Sony ALPHA</h5>
                                        <h3><span class="strong">Perfection</span><br>for all</h3>
                                        <p>Dolor sit amet, consecte, adipiscing.</p>
                                    </div>
                                    <a href="#" class="slide-button">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="sub-banner">
                                <a href="#"><img src="img/banner/banner-2.jpg" alt="images" class="img-reponsive"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="sub-banner">
                                <a href="#"><img src="img/banner/banner-3.jpg" alt="images" class="img-reponsive"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-banner"></div>
    </section>
{{--    <section class="bigdeal">--}}
{{--        <div class="container">--}}
{{--            <div class="label label-1">ONSALE</div>--}}
{{--            <div class="sale-list">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-7 col-sm-12">--}}
{{--                        <div class="product-item ver4 top-inner">--}}
{{--                            <div class="prod-item-img">--}}
{{--                                <a href="#"><img src="img/products/iwatch2.jpg" alt="images" class="img-reponsive"></a>--}}
{{--                                <div class="prod-choose">--}}
{{--                                    <div class="prod-color">--}}
{{--                                        <span class="dot"></span>--}}
{{--                                        <span class="dot yellow"></span>--}}
{{--                                        <span class="dot green"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="prod-price">--}}
{{--                                        <span class="price old">$200.50</span>--}}
{{--                                        <span class="price-ver2 price-lg">$125.00</span>--}}
{{--                                        <span class="productPriceDiscount">Save<br><span class="strong">$75.5</span></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="prod-info">--}}
{{--                                <h3><a class="prod-name" href="#" title="">Sony Smartwatch 3 - 2016</a></h3>--}}
{{--                                <p class="brand">SONY</p>--}}
{{--                                <div class="ratingstar">--}}
{{--                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>--}}
{{--                                    <span class="number">(12)</span>--}}
{{--                                </div>--}}
{{--                                <div class="prod-description">--}}
{{--                                    <ul>--}}
{{--                                        <li>Plays all your music, fomat type (WAV, MP4, ...)</li>--}}
{{--                                        <li>Fills the room with immersive</li>--}}
{{--                                        <li>Allows hands-free</li>--}}
{{--                                        <li>Controls lights, switches</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="countdown" data-countdown="countdown" data-date="08-31-2018-00-00-00">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-5 col-sm-12 ">--}}
{{--                        <div class="product-item ver1 padding--bottom margin-r">--}}
{{--                            <div class="prod-item-img set--width">--}}
{{--                                <a class="image" href="#"><img src="img/products/ipad.jpg" alt="images" class="img-responsive"></a>--}}
{{--                            </div>--}}
{{--                            <div class="prod-info ver1">--}}
{{--                                <h3><a href="#" title="">iPad Pro MLMX2CL/A (MLMX2LL/A) 9.7-inch</a></h3>--}}
{{--                                <div class="ratingstar sm">--}}
{{--                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                    <span class="number">(12)</span>--}}
{{--                                </div>--}}
{{--                                <div class="prod-price">--}}
{{--                                    <span class="price old">$299.6</span>--}}
{{--                                    <span class="price">$210.25</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="label label-2 blue">New</div>--}}
{{--                        </div>--}}
{{--                        <div class="product-item ver1 margin-r ">--}}
{{--                            <div class="prod-item-img set--width">--}}
{{--                                <a class="image" href="#"><img src="img/products/seiko.jpg" alt="images" class="img-responsive"></a>--}}
{{--                            </div>--}}
{{--                            <div class="prod-info ver1">--}}
{{--                                <h3><a href="#" title="">Motorola Moto 360 Sport - 45mm, Black</a></h3>--}}
{{--                                <div class="ratingstar sm">--}}
{{--                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                    <span class="number">(12)</span>--}}
{{--                                </div>--}}
{{--                                <div class="prod-price">--}}
{{--                                    <span class="price old">$399.6</span>--}}
{{--                                    <span class="price">$327.50</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="label label-2 red">Hot</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="featured-product">
        <div class="container">
            <div class="heading-v1">
                <h3 class="pull-left">Последние добавленный товары</h3>
{{--                <ul class="otherr-link pull-right">--}}
{{--                    <li class="active"><a data-toggle="pill" href="#all">all</a></li>--}}
{{--                    <li><a data-toggle="pill" href="#elec">Electronic</a></li>--}}
{{--                    <li><a data-toggle="pill" href="#fashion">Fashion        </a></li>--}}
{{--                    <li><a data-toggle="pill" href="#it">IT        </a></li>--}}
{{--                    <li><a data-toggle="pill" href="#food">Food & Drink</a></li>--}}
{{--                </ul>--}}
                <div class="clearfix"></div>
            </div>
            <div class="tab-content">
                <div id="all" class="tab-pane fade in active">
                    <div class="prod-fea-list">
                        <div class="row">
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/smarphone.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony Xperia X Compact - Unlocked Smartphone...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="prod-price">
                                            <span class="price black">$212.20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/sound3.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony MDRXB950BT/B Ex .fa-1tra Bass Bluetooth Headphones...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price">
                                            <span class="price old">$699.6</span>
                                            <span class="price">$510.02</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/tivi.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Samsung UN65KS8000 65-Inch 4K Ultra HD Smart LED TV...</a></h3>
                                        <div class="ratingstar sm" style="display:none;">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price margin--top">
                                            <span class="price old">$399.6</span>
                                            <span class="price">$299.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/sony.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony a7 Full-Frame Mirrorless Digital Camera...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price">
                                            <span class="price black">$199.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/macbook.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Apple iPad 4 16GB 9.7" Retina Display WiFi Bluetooth...</a></h3>
                                        <div class="ratingstar" style="display:none;"><span class="number">(12)</span></div>
                                        <div class="p-price margin--top">
                                            <span class="price old">$299.6</span>
                                            <span class="price">$109.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="elec" class="tab-pane fade ">
                    <div class="prod-fea-list">
                        <div class="row">
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/smarphone.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony Xperia X Compact - Unlocked Smartphone...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="prod-price">
                                            <span class="price black">$212.20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/sound3.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony MDRXB950BT/B Ex .fa-1tra Bass Bluetooth Headphones...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price">
                                            <span class="price old">$699.6</span>
                                            <span class="price">$510.02</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/tivi.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Samsung UN65KS8000 65-Inch 4K Ultra HD Smart LED TV...</a></h3>
                                        <div class="ratingstar sm" style="display:none;">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price margin--top">
                                            <span class="price old">$399.6</span>
                                            <span class="price">$299.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/sony.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony a7 Full-Frame Mirrorless Digital Camera...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price">
                                            <span class="price black">$199.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/macbook.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Apple iPad 4 16GB 9.7" Retina Display WiFi Bluetooth...</a></h3>
                                        <div class="ratingstar" style="display:none;"><span class="number">(12)</span></div>
                                        <div class="p-price margin--top">
                                            <span class="price old">$299.6</span>
                                            <span class="price">$109.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="fashion" class="tab-pane fade ">
                    <div class="prod-fea-list">
                        <div class="row">
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/smarphone.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony Xperia X Compact - Unlocked Smartphone...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="prod-price">
                                            <span class="price black">$212.20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/sound3.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony MDRXB950BT/B Ex .fa-1tra Bass Bluetooth Headphones...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price">
                                            <span class="price old">$699.6</span>
                                            <span class="price">$510.02</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/tivi.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Samsung UN65KS8000 65-Inch 4K Ultra HD Smart LED TV...</a></h3>
                                        <div class="ratingstar sm" style="display:none;">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price margin--top">
                                            <span class="price old">$399.6</span>
                                            <span class="price">$299.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/sony.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony a7 Full-Frame Mirrorless Digital Camera...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price">
                                            <span class="price black">$199.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/macbook.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Apple iPad 4 16GB 9.7" Retina Display WiFi Bluetooth...</a></h3>
                                        <div class="ratingstar" style="display:none;"><span class="number">(12)</span></div>
                                        <div class="p-price margin--top">
                                            <span class="price old">$299.6</span>
                                            <span class="price">$109.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="it" class="tab-pane fade  ">
                    <div class="prod-fea-list">
                        <div class="row">
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/smarphone.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony Xperia X Compact - Unlocked Smartphone...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="prod-price">
                                            <span class="price black">$212.20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/sound3.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony MDRXB950BT/B Ex .fa-1tra Bass Bluetooth Headphones...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price">
                                            <span class="price old">$699.6</span>
                                            <span class="price">$510.02</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/tivi.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Samsung UN65KS8000 65-Inch 4K Ultra HD Smart LED TV...</a></h3>
                                        <div class="ratingstar sm" style="display:none;">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price margin--top">
                                            <span class="price old">$399.6</span>
                                            <span class="price">$299.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/sony.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony a7 Full-Frame Mirrorless Digital Camera...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price">
                                            <span class="price black">$199.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/macbook.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Apple iPad 4 16GB 9.7" Retina Display WiFi Bluetooth...</a></h3>
                                        <div class="ratingstar" style="display:none;"><span class="number">(12)</span></div>
                                        <div class="p-price margin--top">
                                            <span class="price old">$299.6</span>
                                            <span class="price">$109.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="food" class="tab-pane fade  ">
                    <div class="prod-fea-list">
                        <div class="row">
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/smarphone.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony Xperia X Compact - Unlocked Smartphone...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="prod-price">
                                            <span class="price black">$212.20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/sound3.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony MDRXB950BT/B Ex .fa-1tra Bass Bluetooth Headphones...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price">
                                            <span class="price old">$699.6</span>
                                            <span class="price">$510.02</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/tivi.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Samsung UN65KS8000 65-Inch 4K Ultra HD Smart LED TV...</a></h3>
                                        <div class="ratingstar sm" style="display:none;">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price margin--top">
                                            <span class="price old">$399.6</span>
                                            <span class="price">$299.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/sony.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Sony a7 Full-Frame Mirrorless Digital Camera...</a></h3>
                                        <div class="ratingstar sm">
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>
                                            <span class="number">(12)</span>
                                        </div>
                                        <div class="p-price">
                                            <span class="price black">$199.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15 col-sm-4 col-xs-6">
                                <div class="product-item ver2">
                                    <div class="prod-item-img bd-style-2">
                                        <a href="#"><img src="img/products/macbook.jpg" alt="images" class="img-responsive"></a>
                                        <div class="button">
                                            <a href="#" class="addcart">ADD TO CART</a>
                                            <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="prod-info">
                                        <h3><a href="#">Apple iPad 4 16GB 9.7" Retina Display WiFi Bluetooth...</a></h3>
                                        <div class="ratingstar" style="display:none;"><span class="number">(12)</span></div>
                                        <div class="p-price margin--top">
                                            <span class="price old">$299.6</span>
                                            <span class="price">$109.69</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner_1">
        <div class="container">
            <a href="#"><img src="img/banner/ad2.jpg" alt="images" class="img-responsive"></a>
        </div>
    </div>
{{--    <section class="popular-product">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-7 col-sm-7 col-xs-12">--}}
{{--                    <div class="heading-v2">--}}
{{--                        <ul class="breadcrumb-ver1">--}}
{{--                            <li class="active"><a data-toggle="pill" href="#popular">popular</a></li>--}}
{{--                            <li><a data-toggle="pill" href="#top">top rated</a></li>--}}
{{--                            <li><a data-toggle="pill" href="#new">newest</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="tab-content">--}}
{{--                        <div id="popular" class="tab-pane fade in active">--}}
{{--                            <div class="pp-list">--}}
{{--                                <div class="row top-row">--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/camera.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Sony Alpha a5000 Mirrorless Digital Camera with 16-50mm...</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price old">$299.6</span>--}}
{{--                                                    <span class="price">$109.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/lens.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Sony SEL1670Z Vario-Tessar T E 16-70mm F4 ZA OSS</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price black">$199.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/ear.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Beats EP Wired On-Ear Headphone - Rose</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price black">$199.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/watch.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">PowerLead Pwah PL-N20 Bluetooth 4.0 Smart Watch...</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price old">$299.6</span>--}}
{{--                                                    <span class="price">$109.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/canonpixma.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Canon PIXMA Pro-100 Wireless Color Professional Inkjet...</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price old">$299.6</span>--}}
{{--                                                    <span class="price">$109.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/sound4.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Sony SBH52BLACK Sony Stereo Bluetooth Headset</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price black">$199.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div id="top" class="tab-pane fade">--}}
{{--                            <div class="pp-list">--}}
{{--                                <div class="row top-row">--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/camera.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Sony Alpha a5000 Mirrorless Digital Camera with 16-50mm...</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price old">$299.6</span>--}}
{{--                                                    <span class="price">$109.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/lens.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Sony SEL1670Z Vario-Tessar T E 16-70mm F4 ZA OSS</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price black">$199.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/ear.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Beats EP Wired On-Ear Headphone - Rose</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price black">$199.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/watch.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">PowerLead Pwah PL-N20 Bluetooth 4.0 Smart Watch...</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price old">$299.6</span>--}}
{{--                                                    <span class="price">$109.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/canonpixma.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Canon PIXMA Pro-100 Wireless Color Professional Inkjet...</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price old">$299.6</span>--}}
{{--                                                    <span class="price">$109.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/sound4.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Sony SBH52BLACK Sony Stereo Bluetooth Headset</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price black">$199.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div id="new" class="tab-pane fade">--}}
{{--                            <div class="pp-list">--}}
{{--                                <div class="row top-row">--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/camera.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Sony Alpha a5000 Mirrorless Digital Camera with 16-50mm...</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price old">$299.6</span>--}}
{{--                                                    <span class="price">$109.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/lens.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Sony SEL1670Z Vario-Tessar T E 16-70mm F4 ZA OSS</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price black">$199.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/ear.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Beats EP Wired On-Ear Headphone - Rose</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price black">$199.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/watch.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">PowerLead Pwah PL-N20 Bluetooth 4.0 Smart Watch...</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price old">$299.6</span>--}}
{{--                                                    <span class="price">$109.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/canonpixma.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Canon PIXMA Pro-100 Wireless Color Professional Inkjet...</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price old">$299.6</span>--}}
{{--                                                    <span class="price">$109.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-padding-right">--}}
{{--                                        <div class="product-item ver2">--}}
{{--                                            <div class="prod-item-img bd-style-2">--}}
{{--                                                <a href="#"><img src="img/products/sound4.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                                <div class="button">--}}
{{--                                                    <a href="#" class="addcart addcart-v2">ADD TO CART</a>--}}
{{--                                                    <a href="#" class="view"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="prod-info">--}}
{{--                                                <h3><a href="#">Sony SBH52BLACK Sony Stereo Bluetooth Headset</a></h3>--}}
{{--                                                <div class="ratingstar sm">--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <a href="#"><i class="fa fa-star-o fa-1" aria-hidden="true"></i></a>--}}
{{--                                                    <span class="number">(12)</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="p-price">--}}
{{--                                                    <span class="price black">$199.69</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-5 col-sm-5 col-xs-12">--}}
{{--                    <aside class="widget brand-v1">--}}
{{--                        <div class="heading-v1">--}}
{{--                            <h3>BRAND CORNER</h3>--}}
{{--                        </div>--}}
{{--                        <div class="brand-list-v1">--}}
{{--                            <div class="product-item ver1 bd-style">--}}
{{--                                <div class="prod-item-img">--}}
{{--                                    <a href="#"><img src="img/products/canon_pixma.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                </div>--}}
{{--                                <div class="prod-info">--}}
{{--                                    <h3><a href="#">Canon MX492 Wireless All-IN-One Small...</a></h3>--}}
{{--                                    <div class="p-price">--}}
{{--                                        <span class="price black">$199.69</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-item ver1 bd-style">--}}
{{--                                <div class="prod-item-img">--}}
{{--                                    <a href="#"><img src="img/products/canon.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                </div>--}}
{{--                                <div class="prod-info">--}}
{{--                                    <h3><a href="#">Canon EOS 6D Digital SLR Camera + EF...</a></h3>--}}
{{--                                    <div class="p-price">--}}
{{--                                        <span class="price old">$299.6</span>--}}
{{--                                        <span class="price">$109.69</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-item ver1">--}}
{{--                                <div class="prod-item-img">--}}
{{--                                    <a href="#"><img src="img/products/canon2.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                </div>--}}
{{--                                <div class="prod-info">--}}
{{--                                    <h3><a href="#">Canon 0111C001 PowerShot SX610 HS, Wi-Fi...</a></h3>--}}
{{--                                    <div class="p-price">--}}
{{--                                        <span class="price black">$199.69</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="brand-list-v1">--}}
{{--                            <div class="product-item ver1 bd-style">--}}
{{--                                <div class="prod-item-img">--}}
{{--                                    <a href="#"><img src="img/products/imac.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                </div>--}}
{{--                                <div class="prod-info">--}}
{{--                                    <h3><a href="#">Apple iMac MK462LL/A 27-Inch Retina 5K...</a></h3>--}}
{{--                                    <div class="p-price">--}}
{{--                                        <span class="price old">$299.6</span>--}}
{{--                                        <span class="price">$109.69</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-item ver1 bd-style">--}}
{{--                                <div class="prod-item-img">--}}
{{--                                    <a href="#"><img src="img/products/iwatch.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                </div>--}}
{{--                                <div class="prod-info">--}}
{{--                                    <h3><a href="#">Apple Watch Series 1 38mm Smartwatch...</a></h3>--}}
{{--                                    <div class="p-price">--}}
{{--                                        <span class="price black">$199.69</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-item ver1">--}}
{{--                                <div class="prod-item-img">--}}
{{--                                    <a href="#"><img src="img/products/macmini2.jpg" alt="images" class="img-responsive"></a>--}}
{{--                                </div>--}}
{{--                                <div class="prod-info">--}}
{{--                                    <h3><a href="#">Apple Mac Mini MC936LL/A with Lion Server</a></h3>--}}
{{--                                    <div class="p-price">--}}
{{--                                        <span class="price old">$299.6</span>--}}
{{--                                        <span class="price">$109.69</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </aside>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <div class="banner_2 sub-banner">
        <div class="container">
            <a href="#"><img src="img/banner-2.jpg" alt="images" class="img-responsive"></a>
        </div>
    </div>
{{--    <div class="cate">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4 col-sm-4 col-xs-12">--}}
{{--                    <div class="heading-v3 dif">--}}
{{--                        <img src="img/smicon.png" alt="images" class="img-responsive">--}}
{{--                        <span>Smartphone</span>--}}
{{--                    </div>--}}
{{--                    <div class="product-item ver3">--}}
{{--                        <div class="photo">--}}
{{--                            <a href="#"><img src="img/iphone6.png" alt="images" class="img-responsive"></a>--}}
{{--                        </div>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">phones</a></li>--}}
{{--                            <li><a href="#">android</a></li>--}}
{{--                            <li><a href="#">google phones</a></li>--}}
{{--                            <li><a href="#">apple phones</a></li>--}}
{{--                            <li><a href="#">batteries</a></li>--}}
{{--                            <li><a href="#">charges</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-sm-4 col-xs-12">--}}
{{--                    <div class="heading-v3">--}}
{{--                        <img src="img/laptopicon.png" alt="images" class="img-responsive">--}}
{{--                        <span>LAPTOP</span>--}}
{{--                    </div>--}}
{{--                    <div class="product-item ver3">--}}
{{--                        <div class="photo">--}}
{{--                            <a href="#"><img src="img/laptop.png" alt="images" class="img-responsive"></a>--}}
{{--                        </div>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">phones</a></li>--}}
{{--                            <li><a href="#">android</a></li>--}}
{{--                            <li><a href="#">google phones</a></li>--}}
{{--                            <li><a href="#">apple phones</a></li>--}}
{{--                            <li><a href="#">batteries</a></li>--}}
{{--                            <li><a href="#">charges</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-sm-4 col-xs-12">--}}
{{--                    <div class="heading-v3">--}}
{{--                        <img src="img/camicon.png" alt="images" class="img-responsive">--}}
{{--                        <span>CAMERA</span>--}}
{{--                    </div>--}}
{{--                    <div class="product-item ver3">--}}
{{--                        <div class="photo">--}}
{{--                            <a href="#"><img src="img/cam.png" alt="images" class="img-responsive"></a>--}}
{{--                        </div>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">phones</a></li>--}}
{{--                            <li><a href="#">android</a></li>--}}
{{--                            <li><a href="#">google phones</a></li>--}}
{{--                            <li><a href="#">apple phones</a></li>--}}
{{--                            <li><a href="#">batteries</a></li>--}}
{{--                            <li><a href="#">charges</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    @include('elements.pre-footer')
    @include('elements.footer')
@endsection
