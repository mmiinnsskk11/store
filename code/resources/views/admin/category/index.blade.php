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

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название категории</th>
                                <th scope="col">Действие
                                    <button type="button" class="btn-sm btn-dark float-right" data-toggle="modal"
                                            data-target="#exampleModal">
                                        Создать
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <a class="btn-sm btn-info" href="{{route('categories.edit', $item->id)}}">Редактировать</a>
                                        {{--                                    <a class="btn-sm btn-danger" href="{{route('categories.destroy', $item->id)}}">Удалить</a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Создание категории</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{route('categories.store')}}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Название категории</label>
                                                <input type="text" name="name" value="{{old('name')}}"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Описание</label>
                                                <input type="text" name="description" value="{{old('description')}}"
                                                       class="form-control @error('description') is-invalid @enderror"
                                                       id="exampleInputPassword1">
                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                            <div class="form-group form-check">
                                                <input name="check" value="1" type="checkbox"
                                                       class="form-check-input @error('check') is-invalid @enderror"
                                                       id="exampleCheck1" required>
                                                <label class="form-check-label" for="exampleCheck1">Подтверждаю</label>
                                                @error('check')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Назад
                                            </button>
                                            <button type="submit" class="btn btn-primary">Создать</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

