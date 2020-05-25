@extends('layouts.app')

@section('content')

@include('elements.header')

<section class="contact-us">
    <div class="container">
        <div class="heading-sub">
            <h3 class="pull-left">contact</h3>
            <ul class="other-link-sub pull-right">
                <li><a href="/">Главная</a></li>
                <li><a class="active" href="{{route('contact')}}">Контакты</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="contact-info-heading">
            <div class="row">
                <div class="col-md-4 contact-column-inner">
                    <div class="contact-box">
                        <div class="contact-box-icon"><i class="ion-ios-location icon-contact"></i></div>
                        <div class="contact-box-information">
                            One World Trade Center Suite 8500 New York, NY 1006, United State of America
                        </div>
                    </div>
                </div>
                <div class="col-md-4 contact-column-inner">
                    <div class="contact-box">
                        <div class="contact-box-icon"><i class="ion-ios-telephone icon-contact"></i></div>
                        <div class="contact-box-information">
                            (800) 8001-8588 | (800) 8001-9669
                        </div>
                    </div>
                </div>
                <div class="col-md-4 contact-column-inner">
                    <div class="contact-box">
                        <div class="contact-box-icon"><i class="ion-email icon-contact"></i></div>
                        <div class="contact-box-information">
                            shoppee@support.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-info-content">
            <div class="row">
                <div class="col-md-6">
                    <form action="#" class="contact-form">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <strong>First Name</strong>
                                    <input type="text" name="first_name" class="form-control" value="">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Email *</strong>
                                    <input type="text" name="last_name" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <strong>Phone Number</strong>
                                    <input type="text" name="first_name" class="form-control" value="">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Subject</strong>
                                    <input type="text" name="last_name" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Your Messenge</strong>
                                    <textarea name="note" id="message" tabindex="2" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-send-message">SEND MESSENGE</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div id="googlemap1" style="height: 370px;"></div>
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
                        <img src="/img/gift.png" alt="images" class="img-reponsive">
                    </div>
                    <p class="inform-ver2">
                        <span class="strong">Deal of the day<br></span> check out today's deal
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 fea-column-inner">
                <div class="fea-box">
                    <div class="photo">
                        <img src="/img/fly.png" alt="images" class="img-reponsive">
                    </div>
                    <p class="inform-ver2">
                        <span class="strong">Free Shipping<br></span> on thousands of products
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 fea-column-inner">
                <div class="fea-box">
                    <div class="photo">
                        <img src="/img/return.png" alt="images" class="img-reponsive">
                    </div>
                    <p class="inform-ver2">
                        <span class="strong">Easy Returns<br></span> on all purchases made
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 fea-column-inner">
                <div class="fea-box">
                    <div class="photo">
                        <img src="/img/secu.png" alt="images" class="img-reponsive">
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
