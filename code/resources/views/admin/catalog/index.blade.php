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
                        <div class="row row-cols-1 row-cols-md-10">
                            <a class="btn btn-outline-dark float-right" href="{{route('catalog.create')}}">Создать</a>
                        </div>
                    @if(isset($catalog) && $catalog->count() > 0)
                        @foreach($catalog as $item)
                        <div class="py-2 row row-cols-1 row-cols-md-12">
                            <div class="col mb-4">
                                <div class="card h-100">
                                    <img src="" class="card-img-top" alt=" ">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$item->name}}</h5>
                                        <p class="card-text">{{$item->description}}</p>
                                        @foreach ($item->images as $image)
                                            <img src="{{asset('storage/' . $image->image)}}" alt=" " width="60" height="60">
                                        @endforeach
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

                        {{ $catalog->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

