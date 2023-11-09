@extends('layout')
@section('title') Главная страница @endsection
@section('content')

<img src="mane.jpg" alt="show">
<nav><a class="nav-link top-right review fs-4" href="show_reviews"><h3>Отзывы о нас</h3><a></nav>
<legend>Для администраторов</legend>
<nav class="nav flex-column top-left">
<legend><h6>Для администраторов</h6></legend>
    <a class="nav-link auth mt-2" href="login">Войти</a>
    <a class="nav-link auth mt-2" href="logout">Выйти</a>
</nav>



@endsection
<style>
    img {
        object-fit: contain;
        width: 100%;
        height: auto;
    }

    legend {

     color: yellow;   
    }
    .top-left {
        position: absolute;
        top: 12%;
        left: 4%;
    }
    h3{
        color: orange;
        text-decoration: underline;   
    }

    .top-right {
        position: absolute;
        top: 15%;
        right: 7%;        
    }

    .auth {
        border-style: inset;
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px
    }

    .review {
        font-family: Times New Roman, Times, serif;
        font-style: italic;
        text-decoration: underline;
    }
</style>