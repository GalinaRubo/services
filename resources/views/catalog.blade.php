@extends('layout')
@section('title') Главная страница @endsection
@section('content')
<form action="count" method="post">
@csrf
<div class="container">
    <div class="row mr-2" id="result">
        @foreach ($products as $prd)
        <div class="col-sm-3 col-md-3 col-lg-3 m-3 container card">
            <div class="row mt-2 bg-second fs-6">
                <a class="pull-left mx-3 card-title" target="_blank" style="height: 2.5em">{{$prd->name}}</a>
            </div>
            <div class="row mt-2">
                <div style="height: 200px">
                    <img  style=" height: 80%" src="{{$prd->image}}" />
                </div>
                <span class="pull-right mx-3" style="color:red">&nbsp;{{$prd->price}} ₽</span>
            </div>
            <div class="row mt-2 bg-second">
                <p class="text-left col-sm-12 overflow-auto fs-6" style="height: 100px">{{$prd->description}}</p>
            </div>
            <button name="item"  type="submit" value = "{{$prd->id}}"  class="btn btn-primary">Добавить</button>
        </div>
        @endforeach
    </div>
</div>
</form>
@endsection