@extends('layouts.app')

@include('layouts.admin')

@section('content')
    <div class="container">
        <div class="">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center"><h5>Панель администратора</h5></div>
                </div>
                <div class="py-2">
                    @include('elements.message')
                </div>
                <div class="card-group py-5">
                    <div class="col-md-3">
                        @include('layouts.panel')
                    </div>

                    <div class="col-md-9">
                        @if(isset($catalog) && $catalog->count() > 0)
                        @foreach($catalog as $item)
                        <div class="row row-cols-1 row-cols-md-3">
                            <div class="col mb-4">
                                <div class="card h-100">
                                    <img src="" class="card-img-top" alt=" ">
                                    <div class="card-body">
                                        <h5 class="card-title">Название карточки</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                            <div class="alert alert-primary" role="alert">
                                У Вас пока нет коталога товаров <a class="" href="{{route('catalog.create')}}">Создать</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

