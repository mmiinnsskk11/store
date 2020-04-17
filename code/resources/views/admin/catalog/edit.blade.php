@extends('layouts.app')

@include('layouts.admin')

@section('content')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>

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
                        <form method="post" action="{{route('catalog.update', $catalog->id)}}" multipart="" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" name="name" class="form-control" value="{{$catalog->name}}">
                            </div>
                            <div class="form-group">
                                <label>Категирия</label>
                                <select name="category"  class="form-control">
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
                                <input type="text" name="cost" class="form-control" value="{{$catalog->cost}}">
                            </div>
                            <div class="form-group bg-light">
                                <label>Выберитие картинки</label>
                                <input type="file" name="img[]" multiple class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Описание товара</label>
                                <textarea name="description">
                                    {{$catalog->description}}
                                </textarea>
                            </div>
                            <a class="btn btn-outline-success" href="{{route('catalog.index')}}">Назад</a>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

