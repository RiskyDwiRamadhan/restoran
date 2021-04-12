@extends('layouts.master')

@section('title')
    Halaman Home
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
                <a href="https://nicepage.com/k/blank-html-templates" class="u-align-center u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-1">Booking</a>
            </div>
            </div>
        @endforeach

            {{-- <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-2">
                <img src="template/images/DarioTrapasso-36DaysofType1.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="1000" data-image-height="1000">
                <p class="u-text u-text-grey-40 u-text-4">Berkapasitas 2 orang</p>
                <a href="https://nicepage.com/k/blank-html-templates" class="u-align-center u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-2">Booking<br>
                </a>
            </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-3">
                <img src="template/images/36DaysofType1.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="1000" data-image-height="1000">
                <p class="u-text u-text-grey-40 u-text-5">Berkapasitas 4 orang</p>
                <a href="https://nicepage.com/k/blank-html-templates" class="u-align-center u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-3">Booking<br>
                </a>
            </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-4">
                <img src="template/images/DarioTrapasso-36DaysofType.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-4" data-image-width="1000" data-image-height="1000">
                <p class="u-text u-text-grey-40 u-text-6">Berkapasitas 4 orang</p>
                <a href="https://nicepage.com/k/blank-html-templates" class="u-align-center u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-4">Booking<br>
                </a>
            </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-5">
                <img src="template/images/36DaysofType.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-5" data-image-width="1000" data-image-height="1000">
                <p class="u-text u-text-grey-40 u-text-7">Berkapasitas 2 orang</p>
                <a href="https://nicepage.com/k/blank-html-templates" class="u-align-center u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-5">Booking<br>
                </a>
            </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-6">
                <img src="template/images/DarioTrapasso-36DaysofType.png" alt="" class="u-expanded-width u-image u-image-default u-image-6" data-image-width="1000" data-image-height="1000">
                <p class="u-text u-text-grey-40 u-text-8">Berkapasitas 6 orang</p>
                <a href="https://nicepage.com/k/blank-html-templates" class="u-align-center u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-6">Booking </a>
            </div>
            </div>
             --}}
        </div>
        </div>
    </section>
  
@endsection