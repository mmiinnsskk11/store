@extends('layouts.app')

@section('content')

    @include('layouts.admin')
    <script src="https://cdn.tiny.cloud/1/u9p0136kxmsv4tbrymw1l2cg0j89h5kicsnq1ztkwrzx0m24/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <div class="container">
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
                    <form method="post" action="{{route('catalog.store')}}"
                          multipart="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Категирия</label>
                            <select name="category" class="form-control" id="">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Подкатегория</label>
                            <select name="subcategory" class="form-control" id="">
                                @foreach($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Стоимость</label>
                            <input type="text" name="cost" class="form-control">
                        </div>
                        <div class="form-group bg-light">
                            <label>Выберитие картинки</label>
                            <input type="file" name="img[]" multiple class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Описание товара</label>
                            <textarea id="description" name="description">Hello, World!</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: 'textarea#description',
            width: 825,
            height: 300,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullpage | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: 'css/content.css'
        });
    </script>
@endsection

