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
                        <form method="post" action="{{route('catalog.store')}}" multipart="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Категирия</label>
                                <select name="category"  class="form-control" id="">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Подкатегория</label>
                                <select name="subcategory"  class="form-control" id="">
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Стоимость</label>
                                <input type="text" name="cost" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Выберитие картинки</label>
                                <input type="file" name="img[]" multiple class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Описание товара</label>
                                <textarea id="textarea" name="description" class="form-control">
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        tinymce.init({
            selector: '#textarea'
        });
    </script>
@endsection

