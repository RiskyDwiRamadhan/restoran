@extends('layouts.master')

@section('title')
    Halaman Meja
@endsection
@section('template')
  <link rel="stylesheet" href="\template\Meja.css" media="screen"> 
@endsection

@section('content')  
    <section class="u-black u-clearfix u-section-1" id="carousel_1d93">
        <div class="u-expanded-width u-palette-5-base u-shape u-shape-rectangle u-shape-1"></div>
        <img src="template/images/ImageinKitchencollectionbyIvanaonWeHeartIt.jpg" alt="" class="u-image u-image-default u-image-1" data-image-width="1080" data-image-height="1350">
        <div class="u-container-style u-group u-shape-rectangle u-white u-group-1">
        <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h1 class="u-custom-font u-text u-text-default u-text-palette-2-base u-text-1">Meja Makan</h1>
            <h5 class="u-align-center u-custom-font u-text u-text-2">Nikmati makanan dan minuman khas nusantara dengan meja makan yang akan Anda pilih</h5>
        </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="carousel_9351">
        <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">PILIHAN MEJA MAKAN</h3>
        <h1 class="u-custom-font u-font-playfair-display u-text u-text-2">Nomor Meja</h1>
        <div class="u-list u-repeater u-list-1">

        @foreach ($meja as $M)
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
                <img src="{{$M->image}}" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="1000" data-image-height="1000">
                <p class="u-text u-text-grey-40 u-text-3">Berkapasitas {{$M->kapasitas}} orang</p>
            </div>
            </div>
        @endforeach
        </div>
        </div>
    </section>
  
@endsection