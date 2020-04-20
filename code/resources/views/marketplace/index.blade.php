@extends('layouts.app')

@section('content')

    @include('elements.header')

        <section class="shop-list-v2-page">
        <div class="container">
            <div class="heading-sub">
                <h3 class="pull-left">shop list</h3>
                <ul class="other-link-sub pull-right">
                    <li><a href="#home">Home</a></li>
                    <li><a class="active" href="#shop">Shop</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="widget-banner">
                <a href="#" class="images"><img src="img/products/banner-v2.png" alt="images" class="img-responsive"></a>
                <div class="banner-text">
                    <h2>Just Press</h2>
                    <p>Mini camera by Instax</p>
                </div>
                <div class="banner-button">
                    <a href="#" title="button" class="btn-getit">Get It</a>
                </div>
            </div>
            <div class="widget-product-list">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="filter-block">
                            <div class="filter-block-shop filter-price">
                                <div class="block-title">
                                    <h3>FILTER BY PRICE</h3>
                                </div>
                                <div class="block-content">
                                    <div class="price-range-holder">
                                        <input type="text" class="price-slider" value="">
                                        <span class="min-max">
                                                Price: $990 - $3450
                                            </span>
                                        <span class="filter-button">
                                                <a href="#">Filter</a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-block-shop filter-cate">
                                <div class="block-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="block-content">
                                    <ul>
                                        <li class="active">
                                            <a href="#">Laptop & Computer</a>
                                            <span class="number">(08)</span>
                                        </li>
                                        <li>
                                            <a href="#">Accessories</a>
                                            <span class="number">(16)</span>
                                        </li>
                                        <li>
                                            <a href="#">Gaming</a>
                                            <span class="number">(20)</span>
                                        </li>
                                        <li>
                                            <a href="#">Mac Computers</a>
                                            <span class="number">(09)</span>
                                        </li>
                                        <li>
                                            <a href="#">Ultrabooks</a>
                                            <span class="number">(51)</span>
                                        </li>
                                        <li>
                                            <a href="#">Printers & Ink</a>
                                            <span class="number">(07)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-block-shop">
                                <div class="block-title">
                                    <h3>BRAND</h3>
                                </div>
                                <div class="block-content">
                                    <form>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Accesi</label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Bikis</label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Elle</label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Godo</label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Jeana</label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Ladora</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="filter-block-shop filter-color">
                                <div class="block-title">
                                    <h3>Color</h3>
                                </div>
                                <div class="block-content">
                                    <ul>
                                        <li><a href="#"><i class="dot black-d"></i>Black </a></li>
                                        <li><a href="#"><i class="dot blue-sky"></i>Blue </a></li>
                                        <li><a href="#"><i class="dot brown"></i>Brown </a></li>
                                        <li><a href="#"><i class="dot"></i>White </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="filter-block bd">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="box box-view">
                                        <span>Showing 1–12 of 40 results</span>
                                        <div class="button-view">
                                            <span class="col"><i class="ion-ios-keypad fa-3a"></i></span>
                                            <span class="list"><i class="icon-grid-4"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 margin-top3">
                                    <div class="box show pull-left">
                                        <span>Show</span>
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown">12
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">12</a></li>
                                            <li><a href="#">24</a></li>
                                            <li><a href="#">36</a></li>
                                        </ul>
                                        <span>per page</span>
                                    </div>
                                    <div class="box sort pull-right">
                                        <span>Sort by:</span>
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" id="menu2">
                                            <span class="dropdown-label">Featured</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
                                            <li><a href="#" title="">Featured</a></li>
                                            <li><a href="#" title="">Best Selling</a></li>
                                            <li><a href="#" title="">Best Selling</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product-list grid_full grid_sidebar grid-uniform">
                            @foreach($products as $product)
                            <div class="product-list-item">
                                <div class="product-item-img">
                                    <a href="#"><img src="img/products/product1.png" alt="images" class="img-responsive"></a>
                                    <div class="label label-2 red label-top-20">Hot</div>
                                </div>
                                <div class="product-item-info">
                                    <h3><a href="#" title="">{{$product->name}}</a></h3>
                                    <div class="prod-price">
                                        <span class="price black">{{$product->cost}} BYN</span>
                                    </div>
                                    <div class="button-ver2">
                                        <a href="#" class="addcart-ver2" title="Add to cart"><span class="icon"></span>ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="product-pagination">
                            <ul class="pagination">

                                {{$products->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
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
