@extends('bagikasih.theme.templating')
@section('header') 
	@parent
	@include('bagikasih.theme.header') 
	@include('bagikasih.theme.header-of-slider')
@stop
@section('navbar') @include('bagikasih.theme.navbar') @stop
@section('sidebar')
{{ HTML::style('css/eventDetail.css') }}
<!-- Modal Aksi - Selesai -->
  @include('bagikasih.modal.aksisocial')
<!-- Container  - mulai-->
<script type="text/javascript">
  
  var type_id   = '{{ $view['id'] }}';
  var type_name = 'events';

</script>
{{ HTML::script('js/report.js') }}

<div class="container">

  <!-- Headline  - mulai-->
  <div class="row">
    <div class="col-lg-12"  align="center">
      <div class="page-header">
        @if(Session::has('gagal'))
        <div class="alert alert-danger" id="gagal" role="alert" >
            {{ Session::get('gagal') }}
        </div>
        @endif

        @if(Session::has('sukses'))
        <div class="alert alert-success" id="sukses" role="alert" >
            {{ Session::get('sukses') }}
        </div>
        @endif
        <h2 id="navbar">{{ $view['name']}} </h2>
        <p><a href="{{ URL::route('temukan-event') }} ">Event</a></p>
      </div>
      
    </div>
  </div>
  <!-- Headline - selesai-->
  <div class="row">
    
	<!-- Photo Slider -->
	@include('bagikasih.photo-slider')
	<!-- Photo Slider - Selesai -->
    
    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tentang" data-toggle="tab">Tentang Event</a></li>
            <li><a href="#profile" data-toggle="tab">Kepengurusan</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="tentang">
              <p><h3>Date: 06 May 2015</h3><br>
              Location: {{ $view['location']}}<br>
              Website:  {{ $view['website_url']}}<br>
              Email:  {{ $view['email']}}</p>
              <p>{{ $view['description']}} </p>
            </div>
            <div class="tab-pane fade" id="profile">
              <p>{{ $view['stewardship']}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
      <div class="panel panel-default">
        <div class="panel-body">
          @if(!empty($view['website_url']))
            <p><a href="http://{{ $view['website_url']}}" class="btn btn-primary btn-lg" style="width:100%;"><i class="fa fa-globe fa-lg"></i> Kunjungi Web</a></p>
          @endif
          <a href="{{ Auth::check() ? URL::Route('get-event',$view['id']) : '#modal-signin' }}" data-toggle="modal" class="btn btn-success btn-lg" style="width:100%;"><i class="fa fa-group fa-lg"></i>  Buat Aksi Sosial</a>
          <br />
          <br />
          <a href="#reportModal" data-toggle="modal" class="btn btn-warning btn-lg" style="width:100%;"><i class="fa fa-book fa-lg"></i> Laporkan Event</a>
          <!-- <p><center>Share Event Ini: -->
          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <!-- <div class="addthis_sharing_toolbox"></div> -->
          </center></p>
        </div>
      </div>
    </div>
  </div>
  <h2 id="navbar">Daftar aksi sosial pada event {{ $view['name']}}</h2>
	@include('bagikasih.social-action.list')
</div>
</div>

</div>
  @include('bagikasih.modal.report')

@stop
@section('footer')
	@parent
	@include('bagikasih.theme.footer')
	@include('bagikasih.theme.footer-of-slider')
@stop