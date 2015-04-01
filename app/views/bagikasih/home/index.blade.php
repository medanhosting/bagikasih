@extends('bagikasih.theme.templating')
@section('header') @include('bagikasih.theme.header') @stop
@section('navbar') @include('bagikasih.theme.navbar') @stop
@section('sidebar')
<div class="splash">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <br><br><br><br>
        <br><br><br><br>
        <h1>Cara Baru Berdonasi</h1>
        <h2>Cari Lembaga Sosial & Berikan Donasi Anda</h2>
        <p><a href="#" class="btn btn-primary ">Cara Kerja</a> <a href="#" class="btn btn-primary ">Berikan Donasi</a></p>
        <br><br><br><br>
      </div>
    </div>
  </div>
</div>
<!-- Modal Log In - Mulai -->
  @include('bagikasih.modal')
<!-- Modal Sign Up - Selesai -->
<div class="container">
  <div class="row">
    <div class="col-lg-12" align="center">
      <h2>Mari Wujudkan Aksi Sosial </h2>
      <h3>Menjadi lebih berarti dengan aksi sosial untuk berbagai kategori sosial di bawah ini.</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-body"><a href="#">
        <h2>PANTI ASUHAN</h2></a>
        <p><img src="/assets/assets/img/category/orphanage.jpg" class="img-polaroid img-rounded" style="max-width:100%;height:auto;"></p>
        <p align="right"><a href="#">Lihat semuanya  <i class="fa fa-eye"></i></a> </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-body"><a href="#">
      <h2>YAYASAN DIFABEL</h2></a>
      <p><img src="/assets/assets/img/category/disable.jpg" class="img-polaroid img-rounded" style="max-width:100%;height:auto;"></p>
      <p align="right"><a href="#">Lihat semuanya  <i class="fa fa-eye"></i></a> </p>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="panel panel-default">
    <div class="panel-body"><a href="#">
    <h2>BIAYA PENGOBATAN</h2></a>
    <p><img src="/assets/assets/img/category/health.jpg" class="img-polaroid img-rounded" style="max-width:100%;height:auto;"></p>
    <p align="right"><a href="#">Lihat semuanya  <i class="fa fa-eye"></i></a> </p>
  </div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="panel panel-default">
  <div class="panel-body"><a href="#">
  <h2>PANTI JOMPO</h2></a>
  <p><img src="/assets/assets/img/category/nursing.jpg" class="img-polaroid img-rounded" style="max-width:100%;height:auto;"></p>
  <p align="right"><a href="#">Lihat semuanya  <i class="fa fa-eye"></i></a> </p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="panel panel-default">
<div class="panel-body"><a href="#">
<h2>SELEBRITI SOSIAL</h2></a>
<p><img src="/assets/assets/img/category/celebrity.jpg" class="img-polaroid img-rounded" style="max-width:100%;height:auto;"></p>
<p align="right"><a href="#">Lihat semuanya  <i class="fa fa-eye"></i></a> </p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="panel panel-default">
<div class="panel-body"><a href="#">
<h2>EVENT SOSIAL</h2></a>
<p><img src="/assets/assets/img/category/event.jpg" class="img-polaroid img-rounded" style="max-width:100%;height:auto;"></p>
<p align="right"><a href="#">Lihat semuanya  <i class="fa fa-eye"></i></a> </p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="panel panel-default">
<div class="panel-body"><a href="#">
<h2>TANTANGAN SOSIAL</h2></a>
<p><img src="/assets/assets/img/category/challenge.jpg" class="img-polaroid img-rounded" style="max-width:100%;height:auto;"></p>
<p align="right"><a href="#">Lihat semuanya  <i class="fa fa-eye"></i></a> </p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="panel panel-default">
<div class="panel-body"><a href="#">
<h2>LEMBAGA SOSIAL</h2></a>
<p><img src="/assets/assets/img/category/lembaga.jpg" class="img-polaroid img-rounded" style="max-width:100%;height:auto;"></p>
<p align="right"><a href="#">Lihat semuanya <i class="fa fa-eye"></i></a> </p>
</div>
</div>
</div>
<div class="col-lg-12">
<p align="center"><a href="#" class="btn btn-primary btn-md">Lihat Semua Aksi Sosial</a></p>
</div>
</div>
</div>
{{ HTML::script('js/credential.js'); }}
@stop
@section('footer')
@include('bagikasih.theme.footer')
@stop