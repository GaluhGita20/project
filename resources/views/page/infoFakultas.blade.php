<?php
$page="Info Fakultas"
?>

@extends('layouts.template')
@section('content')

  <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 8.0}" data-image-src="img/SDU/banner.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center p-static order-2 text-center appear-animation" data-appear-animation="expandIn">
          <h1><strong>Info Fakultas</strong></h1>
        </div>
        <div class="col-md-12 align-self-center order-1 appear-animation" data-appear-animation="expandIn">
          <ul class="breadcrumb breadcrumb-light d-block text-center">
            <li><a href="/">Home</a></li>
            <li class="active">Info Fakultas</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="row text-center py-lg-0">
    <div class="col">
      <h2 class="font-weight-normal text-6 mt-4  appear-animation" data-appear-animation="fadeInUpShorter">
        <strong class="font-weight-extra-bold">Info 13 Fakultas</strong></h2>
        
    </div>
  </div>

  <div class="fakultas mt-lg-5" style="padding-top: 10%">
	<section class="page-header page-header-background page-header-background-md parallax overlay section-height-4 overlay overlay-show overlay-op-9 border-0 m-0" style="background-image: url(img/SDU/banner.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;" data-plugin-options="{'speed': 8.0}" data-appear-animation="fadeIn">
		<div class="container">
			<div class="row">
        @forelse ($data as $item)
					<div class=" col-lg-3 col-md-4 ">
						<div class="<?php if ($item['id'] > 4) echo 'mt-4' ?> feature-transform text-center shadow position-relative d-block overflow-hidden bg-white rounded appear-animation" data-appear-animation="expandIn">
							<img src="{{$item['logo']}}" class="img-fluid m-3 mt-4" alt="" style="max-height: 200px">

							<div class="content py-3">
								<h5 class="py-lg-0 py-md-1">{{$item['nama']}}</h5>
								<a class="readmore" data-content="Lihat Selengkapnya" style="text-decoration:none" href="{{$item['slug']}}" class="text-primary read-more">Lihat Selengkapnya <i class="mdi mdi-chevron-right"></i></a>
							</div>
						</div>
					</div>  
          @endforeach         
			  </div>
		  </div>
	  </section>  
  </div>
  
@endsection

<!-- Yang kurang itu halaman detail fakultas -->