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

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Email</th>
                                <th scope="col">Статус</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subscribers as $subscriber)
                                <tr>
                                    <th scope="row">{{$subscriber->id}}</th>
                                    <td>{{$subscriber->email}}</td>
                                    <td>{{$subscriber->active ? 'Подписан' : 'Отписался'}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

