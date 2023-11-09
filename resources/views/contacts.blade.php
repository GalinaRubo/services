@extends('layout')
@section('title') Наша продукция @endsection
@section('content')
<div class="container">
    @foreach ($contacts as $cnt)
    <div class="col mt-3">
        <div class="badge bg-danger fs-5 " style="width: auto;">
            {{$cnt->date}}
        </div>
        <div class="badge bg-secondary fs-5 " style="width: auto;">
            {{$cnt->email}}
        </div>
        <div class="badge bg-success fs-5 " style="width: auto;">
            {{$cnt->subject}}
        </div>
        <div class="badge bg-info fs-5 " style="width: auto;">
            {{$cnt->message}}
        </div>
    </div>
    @endforeach
</div>
@endsection