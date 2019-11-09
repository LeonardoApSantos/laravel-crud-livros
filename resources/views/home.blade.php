@extends('layouts.app')
@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://lscautomoveis.pt/wp-content/uploads/2015/12/airbag-on-off-1000x300.jpg" alt="First slide">
    </div>
    
    <div class="carousel-item">
      <img class="d-block w-100" src="https://s3.amazonaws.com/afb-media/wp-content/uploads/2019/03/11121704/Laptop_hero-1000x300.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://s3.amazonaws.com/afb-media/wp-content/uploads/2019/08/05161514/RDD_0805-1000x300.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">

<section class="row mt-4">
    <div class="col-4" style="margin: 0 auto; text-align: center">
        <img src="https://image.flaticon.com/icons/svg/149/149319.svg" class="w-25 mb-2"alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quibusdam dolorum ad asperiores dolores tempora officiis, ut reprehenderit sed ipsa ipsam reiciendis labore est repudiandae consequuntur a aperiam! Quidem, dignissimos!</p>
    </div>
    <div class="col-4" style="margin: 0 auto; text-align: center">
        <img src="https://image.flaticon.com/icons/svg/149/149319.svg" class="w-25 mb-2" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quibusdam dolorum ad asperiores dolores tempora officiis, ut reprehenderit sed ipsa ipsam reiciendis labore est repudiandae consequuntur a aperiam! Quidem, dignissimos!</p>

    </div>
    <div class="col-4" style="margin: 0 auto; text-align: center">
        <img src="https://image.flaticon.com/icons/svg/149/149319.svg" class="w-25 mb-2" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quibusdam dolorum ad asperiores dolores tempora officiis, ut reprehenderit sed ipsa ipsam reiciendis labore est repudiandae consequuntur a aperiam! Quidem, dignissimos!</p>

    </div>
</section>
</div>
@endsection