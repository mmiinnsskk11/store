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
                        <form action="{{route('subcategories.update', $subcategory->id)}}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Выберите категорию</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Название подкатегории</label>
                                <input type="text" name="name" value="{{old('name') ? old('name') : $subcategory->name}}"
                                       class="form-control @error('name') is-invalid @enderror"
                                       id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Описание категории</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          name="description" cols="30" rows="5">{{old('description') ? old('description') : $subcategory->description}}
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

