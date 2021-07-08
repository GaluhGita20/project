<?php
$page="Gallery"
?>

@extends('layouts.template')
@section('content')
  <div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="img/SDU/banner.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-12 align-self-center p-static order-2 text-center appear-animation" data-appear-animation="expandIn">
            <h1><strong>Gallery</strong></h1>
          </div>
          <div class="col-md-12 align-self-center order-1 appear-animation" data-appear-animation="expandIn">
            <ul class="breadcrumb breadcrumb-light d-block text-center">
              <li><a href="/">Home</a></li>
              <li class="active">Gallery</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="container py-4">
      <div class="row">
        <div class="col" style="min-height: 250px;">
          <div class="row portfolio-list lightbox" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
            @foreach ($data as $item)
              <div class="col-12 col-sm-6 col-lg-3 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="200">
                <div class="portfolio-item">
                  <span class="thumb-info thumb-info-lighten thumb-info-centered-icons border-radius-0">
                    <span class="thumb-info-wrapper border-radius-0">
                      <img src="admin/gambar/gallery/umum/{{$item['nama']}}" class="img-fluid border-radius-0" alt="">
                      <span class="thumb-info-action">
                        <a href="#" class="lightbox-portfolio">
                          <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                        </a>
                      </span>
                    </span>
                  </span>
                </div>
              </div>
              @endforeach
            </div>
        </div>
      </div>
   </div>
  </div>

@endsection
