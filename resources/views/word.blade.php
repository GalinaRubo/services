@extends('layout')
@section('title') Главная страница @endsection
@section('content')

<div class="col-sm-6 col-md-6 col-lg-6 center mt-5"> 
	<a href="./catalog">Вернуться в каталог</a>
</div>
<form action="./word" id="form" class="row g-3 mt-5">
@csrf
  <div class="col-auto">
    <label for="staticword" class="visually-hidden ms-5 fs-3">Control_word</label>
    <input type="text" readonly class="form-control-plaintext ms-5 fs-5" id="statiсword" value="Контрольное слово">
  </div>
  <div class="col-auto">
    <label for="inputWord" class="visually-hidden">Word</label>
    <input type="text" class="form-control" name="inputWord" id="inputWord" placeholder="слово">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Отправить</button>
  </div>
</form>
@endsection