@extends('layouts.template')


@section('title')
Kingbar สูตรบาร์ที่ดีที่สุดและแม่นยำที่สุดในไทย อันดับ 1
@stop

@section('stylesheet')

<style>
    .progress {
    border-radius: 0.25rem;
    overflow: visible;
    background-color: rgb(255 255 255);
}
.text-racking-room-p4 {
    font-size: 16px;
    color: #fff;
    top: 15%;
    left: 53%;
    transform: translate(-50%, 0);
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
}
.room-small{
  font-size: 23px;
    color: #fff;
    top: 5%;
    left: 50%;
    transform: translate(-50%, 0);
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
}
@media (max-width: 580px)
{
  .room-small{
  font-size: 18px;
    color: #fff;
    top: 5%;
    left: 50%;
    transform: translate(-50%, 0);
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
}
}
@media (max-width: 420px)
{
  .room-small{
  font-size: 14px;
    color: #fff;
    top: 5%;
    left: 50%;
    transform: translate(-50%, 0);
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
}
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
    left: 50%;
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

@php

                                            $now = time(); // or your date as well
                                            $your_date = strtotime(Auth::user()->birthday);
                                            $datediff = $your_date - $now;
                                            $sumday = round($datediff / (60 * 60 * 24));
                                            if($sumday < 0){
                                              $sumday = 0;
                                            }
                     @endphp

<div class="container-fluid bg-casino" style="margin: 0px">
  <div id="content" style="height: 100vh">
  <div class="d-none d-lg-block white">
  <div class="row">
  <div class="col-4">
  <img style="height: 80px" src="{{ url('img/logo-2fd1fc0bbf766da18a075f6a6a866ae0ede623df9077e5e6fbdb2616ac07995c.png') }}" alt="Logo">
  </div>
  <div class="col-4 d-flex justify-content-center align-items-center">
  <h2>ยูสเซอร์: {{Auth::user()->username}}</h2>
  </div>
  <div class="col-4 text-right">
  <img style="height: 50px" src="{{ url('img/ic_switch_mode-21ab1d389dba0622ed777cf411c16b1c89305f905a4b3238e71d726850914d75.png') }}" alt="Ic switch mode">
  </div>
  </div>
  <div class="h100">
  <div class="bg-game-container h100">
  <div class="row">
  <div class="col-6">
  <a href="{{ url('/rooms?casino='.$objs->casino) }}">
  <img style="height: 50px" src="{{ url('img/ic_back_to_room-90eff4639adb490ed57b7daf1f2b3e8b2aabde507c27821639bd27e250df6d05.png') }}" alt="Ic back to room">
  </a>
  </div>
  <div class="col-6 text-right mt-2">
  <h2>เหลือระยะเวลา: {{ $sumday }} วัน</h2>
  </div>
  </div>
  <div class="row mt-3">
  <div class="col-1"></div>
  <div class="col-3 text-center p-0 m-0">
  <div class="row">
  <div class="col-2"></div>
  <div class="col-8 text-center">
  <b><h2 id="online-user" class="box-blue" style="background: url({{ url('img/box_blue.png') }}) no-repeat center center; background-size: 100% 100%;">
    จำนวนผู้ใช้งาน </h2></b>
  </div>
  <div class="col-2"></div>
  </div>
  <div class="row mt-2">
  <div class="col-4 my-auto box-pink" style="background: url({{ url('img/box_pink.png') }}) no-repeat center center; background-size: 100% 100%;">
  {{$game->game_name_short}} {{$objs->room}}
  </div>
  <div class="col-4 my-auto box-purple" id="round-count" style="background: url({{ url('img/box_purple.png') }}) no-repeat center center; background-size: 100% 100%;">
  ครั้งที่ 1
  </div>
  <div class="col-4 my-auto box-pink" id="round" style="background: url({{ url('img/box_pink.png') }}) no-repeat center center; background-size: 100% 100%;">
  รอบที่ 1
  </div>
  </div>
  <div class="row mt-5">
  <div class="col-12 p-0 m-0">
  <img id="ecoin" style="width: 100%" src="{{ url('img/e_coin_d-d63d8cc408997aafca540806e7eda73e0917b4749d9ebde6f161ef19f9f0bedf.png') }}" alt="E coin d">
  </div>
  </div>
  <div class="row" style="margin-top: -165px; margin-bottom: -75px">
  <div class="col-1"></div>
  <div class="col-10 p-0 m-0">
  <img id="coin" class="coin mx-auto flip" src="{{ url('img/ic_p-6ec7d7ab9e1db4235997b06ea124fc56cf65fc0c4a1ffde57c65f96fe7a2e2a9.png') }}" alt="Ic p">
  </div>
  <div class="col-1"></div>
  </div>
  <div class="row p-0 m-0">
  <div class="col-9"></div>
  <div class="col-3 my-auto text-cetner ring p-0 m-0" id="progress-value">77%</div>
  </div>
  
  
  <div class="progresss" style="">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 77%;" aria-valuenow="77">
  <span class="progress-icon fa fa-check" style="border-color: yellow; color: yellow;"></span>
  </div>
  </div>
  
  <div class="row mx-4">
  <img onclick="win()" class="img-fluid w-100 h-100" src="{{ url('img/success-f06ccdb163e64d98457396787235897ec185763189b92a6c5d771f65716edafb.png') }}" alt="Success">
  </div>
  <div class="row mt-2">
  <div class="col-6 p-0 pr-1">
  <img onclick="equal()" class="img-fluid w-100 h-100" src="{{ url('img/equal-91759dbeccc6f16dcba2696b1102d86fa0c606e09ec9ac771d02f883363f9505.png') }}" alt="Equal">
  </div>
  <div class="col-6 p-0 pl-1">
  <img onclick="nextCoin()" class="img-fluid w-100" src="{{ url('img/next-3d53716964aac3a62548c7032f281b97b9ed02c596a536e57f4083a27cdefcc5.png') }}" alt="Next">
  </div>
  </div>
  </div>
  <div class="col-1"></div>
  <div class="col-4">
  <div class="row justify-content-center">
  <div class="col">
  <img style="width: 100%" src="{{ url('img/box_stat-2aaa21aa7511c9d4264bc1bee2fe89849eae24dbee771665e12f6dfe154d95ac.png') }}" alt="Box stat">
  </div>
  </div>
  <div class="row">
  <table class="table" id="tableResults" style="border-color: transparent;">
  <tbody>
  </tbody>
  </table>
  </div>
  </div>
  <div class="col-3">

    @if($rooms)
    @foreach($rooms as $u)
    <div class="row mt-3 p-0 animate__animated animate__slideInRight" ,="" style="animation-delay: 0.0s">
      <div class="col">
      <div id="room-percent-{{ $u->id }}" class="room-percent-right">{{ $u->percent }}%</div>
      <div class="image-container m-3 set-room-po1">
        <a href="{{ url('game-room-'.$u->casino.'-'.$u->room) }}">
            <img class="w-100" src="{{ url('images/game/room/'.$game->room_image) }}" alt="{{ $u->room }}">
            <p class="text-racking-room-p4">{{ $u->room }} </p>
        </a> 
    </div>
      </div>
    </div>
    @endforeach
    @endif

  

  
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="d-block d-lg-none white">
  <div class="row">
  <div class="col-5 pl-1 pr-0">
  <img style="height: 40px" src="{{ url('img/logo-2fd1fc0bbf766da18a075f6a6a866ae0ede623df9077e5e6fbdb2616ac07995c.png') }}" alt="Logo">
  </div>
  <div class="col-5 p-0 d-flex justify-content-center align-items-center">
  <h4>ยูสเซอร์: {{Auth::user()->username}}</h4>
  </div>
  <div class="col-2 pl-0 pr-1 text-right">
  <img style="height: 30px" src="{{ url('img/ic_switch_mode-21ab1d389dba0622ed777cf411c16b1c89305f905a4b3238e71d726850914d75.png') }}" alt="Ic switch mode">
  </div>
  </div>
  <div class="h100" style="padding-bottom: 30px">
  <div class="bg-game-container h100 p-2">
  <div class="row">
  <div class="col-6">
    <a href="{{ url('/rooms?casino='.$objs->casino) }}">
  <img style="height: 50px" src="{{ url('img/ic_back_to_room-90eff4639adb490ed57b7daf1f2b3e8b2aabde507c27821639bd27e250df6d05.png') }}" alt="Ic back to room">
  </a>
  </div>
  <div class="col-6 align-items-center text-right mt-3">
  <h2>เวลาเหลือ {{ $sumday }} วัน</h2>
  </div>
  </div>
  <div class="row">
    <div class="col-1 p-0 m-0 my-auto">
      <img id="previous" src="{{ url('img/ic_left-13d8be14dc98431592615b322fa4b0336e8d86246c0282ff8a3808152a7b3214.png') }}" alt="Ic left" aria-controls="my-slider" tabindex="-1" data-controls="prev" >
    </div>
  <div class="col-10 my-auto">
    <div class="tns-outer" id="my-slider-ow">
      <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">
        slide 
          <span class="current">
            1 to 4
          </span>  
          of 17
        </div>
        <div id="my-slider-mw" class="tns-ovh">
          <div class="tns-inner" id="my-slider-iw">
            <div id="my-slider" class="  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" >
  
              @if($rooms)
      @foreach($rooms as $u)
      <div class="room-container tns-item tns-slide-active set-room-po1" id="my-slider-item0">
        <div class="m-room-percent" id="m-room-percent-{{ $u->id }}">{{ $u->percent }}%</div>
        <a href="{{ url('game-room-'.$u->casino.'-'.$u->room) }}" class="">
        <img class="w-100" style="cursor: pointer" src="{{ url('images/game/room/'.$game->room_image2) }}" alt="R {{$u->casino}} {{ $u->room }} m">
        <p class="room-small">{{ $u->room }}</p>
        </a>
      </div>
      @endforeach
      @endif


  </div></div></div></div>
  </div>
  <div class="col-1 p-0 m-0 my-auto">
  <img id="next" src="{{ url('img/ic_left-13d8be14dc98431592615b322fa4b0336e8d86246c0282ff8a3808152a7b3214.png') }}" alt="Ic left" aria-controls="my-slider" tabindex="-1" data-controls="next">
  </div>
  </div>
  <div class="row mt-4">
  <div class="col-2"></div>
  <div class="col-8 text-center">
  <b><h2 id="m-online-user" class="box-blue" style="background: url({{ url('img/box_blue.png') }}) no-repeat center center; background-size: 100% 100%;">จำนวนผู้ใช้งาน </h2></b>
  </div>
  <div class="col-2"></div>
  </div>
  <div class="row mt-2">
  <div class="col-4 text-center my-auto box-pink" style="background: url({{ url('img/box_pink.png') }}) no-repeat center center; background-size: 100% 100%;">
    {{$game->game_name_short}} {{$objs->room}}
  </div>
  <div class="col-4 text-center my-auto box-purple" id="mround-count" style="background: url({{ url('img/box_purple.png') }}) no-repeat center center; background-size: 100% 100%;">
  ครั้งที่ 1
  </div>
  <div class="col-4 text-center my-auto box-pink" id="mround" style="background: url({{ url('img/box_pink.png') }}) no-repeat center center; background-size: 100% 100%;">
  รอบที่ 1
  </div>
  </div>
  <div class="row mt-5">
  <div class="col-12 p-0 m-0">
  <img id="mecoin" style="width: 100%" src="{{ url('img/e_coin_d-d63d8cc408997aafca540806e7eda73e0917b4749d9ebde6f161ef19f9f0bedf.png') }}" alt="E coin d">
  </div>
  </div>
  <div class="row" style="margin-top: -165px; margin-bottom: -70px;">
  <div class="col-1"></div>
  <div class="col-10 text-center p-0 m-0">
  <img id="mcoin" class="coin mx-auto flip" src="{{ url('img/ic_p-6ec7d7ab9e1db4235997b06ea124fc56cf65fc0c4a1ffde57c65f96fe7a2e2a9.png') }}" alt="Ic p">
  </div>
  <div class="col-1"></div>
  </div>
  <div class="row p-0 m-0">
  <div class="col-9"></div>
  <div class="col-3 my-auto text-center mring p-0 m-0" id="mprogress-value">77%</div>
  </div>
  <div class="progresss" style="">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 77%;" aria-valuenow="77">
  <span class="progress-icon fa fa-check" style="border-color: yellow; color: yellow;"></span>
  </div>
  </div>
  <div class="row mx-4">
  <img onclick="win()" class="img-fluid w-100 h-100" src="{{ url('img/success-f06ccdb163e64d98457396787235897ec185763189b92a6c5d771f65716edafb.png') }}" alt="Success">
  </div>
  <div class="row mt-2">
  <div class="col-6 p-0 pr-1">
  <img onclick="equal()" class="img-fluid w-100 h-100" src="{{ url('img/equal-91759dbeccc6f16dcba2696b1102d86fa0c606e09ec9ac771d02f883363f9505.png') }}" alt="Equal">
  </div>
  <div class="col-6 p-0 pl-1">
  <img onclick="nextCoin()" class="img-fluid w-100" src="{{ url('img/next-3d53716964aac3a62548c7032f281b97b9ed02c596a536e57f4083a27cdefcc5.png') }}" alt="Next">
  </div>
  </div>
  <div class="row justify-content-center">
  <div class="col">
  <img style="width: 100%" src="{{ url('img/box_stat-2aaa21aa7511c9d4264bc1bee2fe89849eae24dbee771665e12f6dfe154d95ac.png') }}" alt="Box stat">
  </div>
  </div>
  <div>
  <table class="table" id="mtableResults" style="border-color: transparent;">
  <tbody>
  </tbody>
  </table>
  </div>
  </div>
  </div>
 
  </div>
  </div>
  </div>

  <div class="modal fade" id="winModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content align-items-center" style="background-color: transparent; border: 0">
            <img class="modal-result-win" src="{{ url('img/win-9ce8ea56315187a530eb4add5a04748ba10fe656545124070cd1068ee68d5cb3.png') }}" alt="Win">
        </div>
      </div>
  </div>


  <div class="modal fade" id="loseModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content align-items-center" style="background-color: transparent;">
            <img class="modal-result-lose" onclick="forceReset()" src="{{ url('img/reset-c4d864fb1105e9afaf36dd5a7d8e4d7aa264c7b21e91a3d82d6a190fe7297488.png') }}" alt="Reset">
            <img class="modal-result-lose" onclick="restart()" src="{{ url('img/restart-6586febbec0d90aba184ff042f34eca245e6f3875fbcd292f374ede190483e16.png') }}" alt="Restart">
          </div>
        </div>
  </div>


  <div class="modal fade" id="loadingModal" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content" style="background-color: transparent; border: 0">
            <div class="modal-body" id="modalBody">
              <div class="row">
                <div class="col-12">
                  <div class="loader">Loading...</div>
                </div>
              </div>
            <div class="row">
              <div class="col-12">
                <div class="white text-center">
                  <h1 id="loadingMessage">กำลังวิเคราะห์ผลห้อง 1 ...</h1>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
  </div>


@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script>
  
  var slider = tns({
    container: '#my-slider',
    items: 4,
    gutter: 4,
    loop: false,
    // edgePadding: 40,
    // "speed": 500,
    "swipeAngle": false,
    // "autoplay": true,
    // rewind: true,
    // "startIndex": 1,
    // controls: false,
    nav: false,
    // slideBy: "page",
    // mouseDrag: true,
    prevButton: '#previous',
    nextButton: '#next',
    center: false,
  });
</script>

<script type="text/javascript">

  var casino = "";
  var room = 1;
  var round = 1;
  var coinRound = 1;
  var resultRound = undefined;
  var coin = '';
  var numberOfCoin = 5;
  var shouldIgnore = false;
  var previousCoin = '';
  var sameCoinCount = 0;

  $(document).ready(function() {
    randomRoomPercent();
    randomOnlinePercent();
    setInterval(function(){ 
      randomRoomPercent();
      randomOnlinePercent();
    }, 60 * 1000);

    $("#wait").hide();
    $('#winModal').on('hidden.bs.modal', function (e) {
      randomExtraCoin();
    })

    casino = "sa";
    $('#sidebar').toggleClass('active');
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('#bet').val("");
      randomCoin();
      randomPercent();
    });

  function changeRoom(room) {
    $("#loadingMessage").text("กำลังวิเคราะห์ผลห้อง " + room + " ...");
    $('#loadingModal').modal('show');
    setTimeout(function() {
      $('#loadingModal').modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
      window.location = '/game?casino=' + casino + '&room=' + room
    }, 5000);
  }

  function win() {
    addRow('WIN');
    nextRound();
    $('#winModal').modal('show');
    reset();
  }

  function lose() {
    if (coinRound == 4) {
      $('#loseModal').modal('show');
      reset();
      addRow('LOSE');
      nextRound();
      // randomExtraCoin();
    }
  }

  function equal() {
    randomCoin();
    randomPercent();
  }

  function restart() {
    $('#loseModal').modal('hide');
  }

  function nextRound() {
    // playMusic();
    if (!shouldIgnore) {
      round += 1;
      winCount = (round % 5 + 1)
      if (winCount == 1) {
        $('.modal-result-win').attr("src" , "{{ url('img/win1-bfb68d687690718349afc8080bb468c5e5115a6ca040b04f83490bab8c4c04a3.png') }}" );
      } else if (winCount == 2) {
        $('.modal-result-win').attr("src" , "{{ url('img/win2-cb3327f6be65e408cc0f5b738d8e445932a1c391c4994a4b297a6fc2b6ff9644.png') }}" );
      } else if (winCount == 3) {
        $('.modal-result-win').attr("src" , "{{ url('img/win3-23839659849bd4ef4f046b10a05e1bb54133c7e870059637de36b543d4af83dd.png') }}" );
      } else if (winCount == 4) {
        $('.modal-result-win').attr("src" , "{{ url('img/win4-cf6c85cbcd404a06a28139424e20465f63635b81569dc7cd7c30121f28fe2f80.png') }}" );
      } else if (winCount == 5) {
        $('.modal-result-win').attr("src" , "{{ url('img/win5-34a708d03cb96bf8e38eaa6427c0af262bd1d0ea2772face0688fe0ec6974434.png') }}" );
      }
    } else {
      shouldIgnore = false;
    }
  }

  function nextCoin() {
    if (coinRound < 4) {
      coinRound += 1;

      var obj = $('#round').text('รอบที่ ' + coinRound);
      var obj = $('#mround').text('รอบที่ ' + coinRound);
      // obj.html(obj.html().replace(/\n/g,'<br/>'));

      randomCoin();
      randomPercent();
    } else {
      coinRound = 1;
      reset();
      addRow('LOSE');
      nextRound();
      $('#loseModal').modal('show');
    }
  }

  function randomCoin() {
    var random = Math.floor(Math.random() * 10)

    coin = random % 2 == 0 ? 'B' : 'P';
    if (coin == 'B') {
      $('#coin').attr("src" , "{{ url('img/ic_b-304a43368f7b2f6aff6564e4e01154b3d695b9a738b09b40dacbfc9eb9da534b.png') }}" );
      $('#mcoin').attr("src" , "{{ url('img/ic_b-304a43368f7b2f6aff6564e4e01154b3d695b9a738b09b40dacbfc9eb9da534b.png') }}" );
    } else {
      $('#coin').attr("src" , "{{ url('img/ic_p-6ec7d7ab9e1db4235997b06ea124fc56cf65fc0c4a1ffde57c65f96fe7a2e2a9.png') }}" );
      $('#mcoin').attr("src" , "{{ url('img/ic_p-6ec7d7ab9e1db4235997b06ea124fc56cf65fc0c4a1ffde57c65f96fe7a2e2a9.png') }}" );
    }
  }

  function randomExtraCoin(isWin) {
    $("#ecoin").attr("src" , "{{ url('img/e_coin_r-3281a897b4e2791dc71b114b9ed7249a0eb8848c1f1f0ae52c3e1bd0858e80d2.gif') }}" );
    $("#mecoin").attr("src" , "{{ url('img/e_coin_r-3281a897b4e2791dc71b114b9ed7249a0eb8848c1f1f0ae52c3e1bd0858e80d2.gif') }}" );
    setTimeout(function() {
      var randomHasExtraCoin = getRandomInt(1, 100);
      if (randomHasExtraCoin % 2 == 0) {
        var randomExtraCoin = getRandomInt(1, 3);
        if (randomExtraCoin == 1) {
          $("#ecoin").attr("src" , "{{ url('img/e_coin_a_1-6690e5a39edf579b70f03a7a3cad582094fa873e1c7fa78cb3a4b5b0d994ed06.png') }}" );
          $("#mecoin").attr("src" , "{{ url('img/e_coin_a_1-6690e5a39edf579b70f03a7a3cad582094fa873e1c7fa78cb3a4b5b0d994ed06.png') }}" );
        } else if (randomExtraCoin == 2) {
          $("#ecoin").attr("src" , "{{ url('img/e_coin_a_2-61ff201698671236302b518049bc45a8aa660ba9c6778d87743c1201e5cf9556.png') }}" );
          $("#mecoin").attr("src" , "{{ url('img/e_coin_a_2-61ff201698671236302b518049bc45a8aa660ba9c6778d87743c1201e5cf9556.png') }}" );
        } else if (randomExtraCoin == 3) {
          $("#ecoin").attr("src" , "{{ url('img/e_coin_a_3-440f7144192ff79d375918e064097c986dbf94522b09690b22704dd9cacf40fb.png') }}" );
          $("#mecoin").attr("src" , "{{ url('img/e_coin_a_3-440f7144192ff79d375918e064097c986dbf94522b09690b22704dd9cacf40fb.png') }}" );
        }
      } else {
        $("#ecoin").attr("src" , "{{ url('img/e_coin_d-d63d8cc408997aafca540806e7eda73e0917b4749d9ebde6f161ef19f9f0bedf.png') }}" );
        $("#mecoin").attr("src" , "{{ url('img/e_coin_d-d63d8cc408997aafca540806e7eda73e0917b4749d9ebde6f161ef19f9f0bedf.png') }}" );
      }
    }, 5 * 1000);
  }

  function randomOnlinePercent() {
    $.ajax("{{ url('/api/game/online_user') }}", {
      contentType: 'application/json',
      dataType: 'json',
      success: function (data) {
        $("#online-user").html('จำนวนผู้ใช้งาน ' + data.count);
        $("#m-online-user").html('จำนวนผู้ใช้งาน ' + data.count);
      },
    });
  }
  //$objs->casino

  function randomRoomPercent() {
    $.ajax("{{ url('/rooms/room_percents?casino='.$objs->casino) }}", {
      contentType: 'application/json',
      dataType: 'json',
      success: function (data) {
        let roomIds = $("[id^='room-percent-']").map(function() {
          return this.id;
        }).get();
        for (var i = 0; i < roomIds.length; i++) {
          let percent = getRandomInt(75, 99);
          $('#' + roomIds[i]).html('' + percent + '%');
          $('#m-' + roomIds[i]).html('' + percent + '%');
        }
      },
    });
  }

  

  function randomPercent() {
    var random = getRandomInt(75, 99);
    $('.progress-bar').attr('aria-valuenow', random).css('width', random + '%');
    $('#progress-value').text(random + '%');
    $('#mprogress-value').text(random + '%');
  }

  function addRow(status) {

    var newRow = $('<tr id="row' + round + '">');
    var cols = "<td class='text-center white d-flex justify-content-center align-items-center' style='border: 0px; font-size: 22px'> ผลการลงทุนครั้งที่ " + round + "</td>";
    if (status == 'WIN') {
      cols += "<td class='text-center' style='border: 0px;'><img src='{{ url('img/result_win-b252a749265cdb906b715523a9736d27c78ad4e0ffa3e6aeb91c569a7c5cf8ec.png') }}' class='mr-0' style='height: 50px;'></td>"
    } else {
      cols += "<td class='text-center' style='border: 0px;'><img src='{{ url('img/result_lose-586a688278c79ad0242b6dc3fe9c1c73477907a940325764eea21988b92632e3.png') }}' class='mr-0' style='height: 50px;'></td>"
    }
    cols += "</tr>"
    newRow.append(cols);

    var newRowM = $('<tr id="row' + round + '">');
    var cols = "<td class='text-center white' style='border: 0px; font-size: 22px'> ผลการลงทุนครั้งที่ " + round + "</td>";
    if (status == 'WIN') {
      cols += "<td class='text-right p-0' style='border: 0px;'><img src='{{ url('img/result_win-b252a749265cdb906b715523a9736d27c78ad4e0ffa3e6aeb91c569a7c5cf8ec.png') }}' class='mr-0' style='height: 50px;'></td>"
    } else {
      cols += "<td class='text-right p-0' style='border: 0px;'><img src='{{ url('img/result_lose-586a688278c79ad0242b6dc3fe9c1c73477907a940325764eea21988b92632e3.png') }}' class='mr-0' style='height: 50px;'></td>"
    }
    cols += "</tr>"
    newRowM.append(cols);

    $('#tableResults > tbody').prepend(newRow);
    $('#mtableResults > tbody').prepend(newRowM);

    $('#round-count').text('ครั้งที่ ' + (round + 1));
    $('#mround-count').text('ครั้งที่ ' + (round + 1));
  }

  function reset() {
    $('#loseModal').modal('hide');
    coinRound = 1;
    var obj = $('#round').text('รอบที่ ' + coinRound);
    var obj = $('#mround').text('รอบที่ ' + coinRound);
    // obj.html(obj.html().replace(/\n/g,'<br/>'));

    randomCoin();
    randomPercent();
  }

  function forceReset() {
    $('#loseModal').modal('hide');
    coinRound = 1;
    var obj = $('#round').text('รอบที่ ' + coinRound);
    var obj = $('#mround').text('รอบที่ ' + coinRound);

    round = 1;
    $('#round-count').text('ครั้งที่ ' + round);
    $('#mround-count').text('ครั้งที่ ' + round);
    // obj.html(obj.html().replace(/\n/g,'<br/>'));

    $('#tableResults > tbody').html("");
    $('#mtableResults > tbody').html("");

    randomCoin();
    randomPercent();
  }

  function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }

</script>

@stop('scripts')