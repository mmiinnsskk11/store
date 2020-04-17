@extends('layouts.app')

@include('layouts.admin')

@section('content')
    <div class="container-fluid">
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
                        <div class="col-md-12">
                            <a class="btn btn-outline-success float-right" href="{{route('catalog.create')}}">Создать</a>
                        </div>
                        <div class="p-1 row cols-1 col-md-12">
                    @if(isset($catalog) && $catalog->count() > 0)
                        @foreach($catalog as $item)
                                    <form action="{{route('catalog.destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                            <div class="p-1 col-mb-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$item->name}}</h5>
                                        @foreach ($item->images as $image)
                                            <img src="{{asset('storage/' . $image->image)}}" alt=" " width="60" height="60">
                                        @endforeach
                                    </div>
                                    <div class="card-footer">
{{--                                        <a class="btn-sm btn-outline-dark" href="{{route('catalog.show', $item->id)}}">Просмотр</a>--}}
                                        <a class="btn-sm btn-outline-info" href="{{route('catalog.edit', $item->id)}}">Редактировать</a>
                                        <button type="submit" class="btn-sm btn-outline-danger">Удалить</button>
                                    </div>

                                </div>

                            </div>
                                    </form>
                                @endforeach
                        </div>

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

