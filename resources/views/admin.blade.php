@extends('layout')
@section('title') Администрирование @endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 right">
            <!-- section A: for form Categories -->
            <form action="./category_insert" method="post">
                @csrf
                <div>
                    <label class="form-label" for="category">Category: </label>
                    <input class="form-control" type="text" name="category">
                </div>
                <button name="addCatbtn" type="submit" class="btn btn-primary my-3">Сохранить</button>
            </form>
            <form action="./product_insert" method="post">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="catid">Выбрать категорию продукта: </label>
                    <select name="categories" class="form-select" id="catid">
                        <option value="">Выбрать</option>
                        @foreach ($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="container mt-5">
                    <div class="mb-3">
                        <label for="name" class="form-label">Наименование продукта</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Файл с изображением</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Цена продукта</label>
                        <input type="number" name="price" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Описание продукта</label>
                        <textarea class="form-control" name="desc" id="desc" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection