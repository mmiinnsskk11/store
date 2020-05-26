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
                <div class="text-description">
                    <p>I’m a freelance fashion designer who specialises in print designs and combining fabrics. My designs have been sold all over Europe and the USA and I have worked with some of the biggest designers in the industry. I’m also currently working with a big supermarket to develop a gorgeous, yet affordable, range of beautifully printed key pieces that no women’s wardrobe should be without!</p>
                    <p>To see a selection of my designs and sketches, which is how all my best designs start, take a look at my portfolio page. To see who I have worked with see my client list and stockists.</p>
                    <p>I’m a freelance fashion designer who specialises in print designs and combining fabrics. My designs have been sold all over Europe and the USA and I have worked with some of the biggest designers in the industry. I’m also currently working with a big supermarket to develop a gorgeous, yet affordable, range of beautifully printed key pieces that no women’s wardrobe should be without!</p>
                </div>
            </div>
        </div>
    </section>
    @include('elements.pre-footer')
    @include('elements.footer')
