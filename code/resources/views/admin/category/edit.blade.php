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
                        <form action="{{route('categories.update', $category->id)}}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название категории</label>
                                <input type="text" name="name" value="{{old('name') ? old('name') : $category->name}}"
                                       class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Описание категории</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          name="description" cols="30" rows="5">{{old('description') ? old('description') : $category->description}}
                                </textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

