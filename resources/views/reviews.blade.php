@extends('layout')
@section('title') Отзывы о нас @endsection
@section('content')
<h2>Форма добавления отзыва</h2>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="/reviews_check">
    @csrf
    <div class="container mt-5">
        <div class="mb-3">
            <label for="email" class="form-label">Введите e-mail</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Введите тему отзыва</label>
            <input type="text" name="subject" class="form-control" id="subject" placeholder="Введите отзыв">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Сообщение</label>
            <textarea class="form-control" name="message" id="message" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </div>
</form>
@endsection