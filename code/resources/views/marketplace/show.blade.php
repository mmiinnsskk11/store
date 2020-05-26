@extends('layouts.app')

@section('content')

    @include('elements.header')

    <section class="shop-list-v2-page">
        <div class="container">
            <div class="heading-sub">
                <h3 class="pull-left">shop list</h3>
                <ul class="other-link-sub pull-right">
                    <li><a href="/">Главная</a></li>
                    <li><a class="active" href="#shop">Каталог</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="widget-banner">
                <a href="#" class="images"><img src="/img/products/banner-v2.png" alt="" class="img-responsive"></a>
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

                            <div class="filter-block-shop filter-cate">
                                <div class="block-title">
                                    <h3>Категории</h3>
                                </div>
                                <div class="block-content">
                                    <ul>
                                        @foreach ($subcategory as $item)
                                            <li class="{{(!empty($name) && $name == $item->category_id) ? 'active' : ''}}">
                                                <a href="{{route('marketplace.show', $item->id)}}">{{$item->name}}</a>
                                                <span class="number">()</span>
                                            </li>
                                        @endforeach
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
{{--                        <div class="product-list grid_full grid_sidebar grid-uniform">--}}
{{--                            @foreach($subcategory as $item)--}}
{{--                                <div class="product-list-item">--}}
{{--                                    <div class="product-item-img">--}}
{{--                                        <a href="#"><img src="{{asset("storage/" . $item->images[0]->image)}}" alt=" " class="img-responsive"></a>--}}
{{--                                        <div class="label label-2 red label-top-20">Hot</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-item-info">--}}
{{--                                        <h3><a href="#" title="">{{$item->name}}</a></h3>--}}
{{--                                        <div class="prod-price">--}}
{{--                                            <span class="price black">{{$item->cost}} BYN</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="button-ver2">--}}
{{--                                            <a href="#" class="addcart-ver2" title="Add to cart"><span class="icon"></span>В карзину</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
                        <div class="product-pagination">
                            <ul class="pagination">

                                {{$subcategory->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('elements.pre-footer')
    @include('elements.footer')
