@extends('layouts.template')


@section('title')
สูตรบาคาร่า5ดาว
@stop

@section('stylesheet')

<style>
    .col-4-new {
    padding-right: 2px !important;
    padding-left: 2px !important;
    min-height: 90px;
    margin-bottom: 15px;
}
.text-racking-room-p4 {
    font-size: 18px;
    color: #fff;
    top: 10%;
    left: 50%;
    transform: translate(-50%, 0);
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
}
@media (max-width: 768px)
{
    .text-racking-room-p4 {
    font-size: 26px;
    color: #fff;
    top: 14%;
    left: 48%;
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
    }
}
@media (max-width: 420px)
{
    .text-racking-room-p4 {
    font-size: 20px;
    color: #fff;
    top: 12%;
    left: 48%;
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
}
}
.set-room-po1{
    position: relative;
}
</style>

@stop('stylesheet')

@section('content')


<div class="container-fluid bg-casino">


    <div id="content">
    <div class="row">
    <div class="col-6">
    <img style="height: 80px" src="{{ url('img/logo-2fd1fc0bbf766da18a075f6a6a866ae0ede623df9077e5e6fbdb2616ac07995c.png') }}" alt="Logo">
    </div>
    <div class="col-6"></div>
    </div>
    <div class="row p-0 m-0">
    <div class="col-6">
    <a href="{{ url('/') }}">
    <img style="height: 40px" src="{{ url('img/ic_back_to_casino-e77bb4bc46f17174a7f7f10e01880028fd6acc6fd8e28d8546a4347fe7642ca2.png') }}" alt="Ic back to casino">
    </a>
    </div>
    <div class="col-6">
    </div>
    </div>
    <div class="container h100">
    <div class="row">
        <div class="col-0 col-sm-0 col-md-3 col-lg-4 p-0"></div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 p-0">
            <img class="img-fluid w-100 animate__animated animate__zoomIn" src="{{ url('images/game/game/'.$game->game_image) }}" alt="{{$game->game_name}}">
        </div>
        <div class="col-0 col-sm-0 col-md-3 col-lg-4 p-0"></div>
    </div>
    <div class="row mt-3">
        @php
        $s = 0.1;
        @endphp
    @if(isset($objs))
        @foreach($objs as $u)
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 p-0 animate__animated animate__slideInLeft" style="animation-delay: {{$s}}s;">
                <div id="room-percent-E01" class="room-percent-right">{{ $u->percent }}%</div>
                <div class="image-container m-3 set-room-po1">
                    <a href="{{ url('game-room-'.$u->casino.'-'.$u->room) }}">
                        <img class="w-100" src="{{ url('images/game/room/'.$u->room_image) }}" alt="{{ $u->room }}">
                        <p class="text-racking-room-p4">{{ $u->room }} </p>
                    </a> 
                </div>
            </div>
            @php
        $s+=0.1;
        @endphp
        @endforeach
    @endif
    
    </div>
    </div>
    </div>
    </div>


@endsection

@section('scripts')

@stop('scripts')