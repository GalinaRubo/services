@extends('layout')
@section('title') Главная страница @endsection
@section('content')

<div class="container">
   <h3> Номер заказа: {{$number_order}}</h3>
   <h3> Дата доставки заказа: {{$date}}</h3>
   <h3> Сумма заказа: {{$total_price}}</h3>
   <a href="./catalog">Вернуться в каталог</a>
</div>

@endsection