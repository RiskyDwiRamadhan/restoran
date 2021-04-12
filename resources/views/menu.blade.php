@extends('layouts.master')

@section('title')
    Halaman Menu
@endsection
@section('template')
  <link rel="stylesheet" href="\template\Menu.css" media="screen"> 
@endsection

@section('content')  
    <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_1b8d" data-image-width="2730" data-image-height="4096">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
          <h2 class="u-custom-font u-text u-text-body-alt-color u-text-1">NIKMATNYA MAKANAN DAN MINUMAN NUSANTARA</h2><span class="u-icon u-icon-circle u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 451.847 451.847" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7eb4"></use></svg><svg class="u-svg-content" viewBox="0 0 451.847 451.847" x="0px" y="0px" id="svg-7eb4" style="enable-background:new 0 0 451.847 451.847;"><g><path d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751   c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0   c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"></path>
  </g></svg></span>
        </div>
      </section>

      <section class="u-align-center u-clearfix u-palette-5-dark-3 u-section-2" id="sec-913c">
        <div class="u-clearfix u-sheet u-sheet-1">
          <h1 class="u-custom-font u-font-playfair-display u-text u-text-1">Menu<br>Makanan
          </h1>
          <h5 class="u-text u-text-2">Makanan khas Indonesia dengan bahan-bahan pilihan asli Indonesia</h5>
          <div class="u-list u-repeater u-list-1">
            
          {{-- @foreach ($data as $F) --}}
            <div class="u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xs u-container-style u-list-item u-repeater-item u-video-cover u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img src="template/images/sate lilit.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="640" data-image-height="528">
                {{-- <div class="u-align-center u-container-style u-group u-opacity u-opacity-85 u-palette-3-base u-group-1">
                  <div class="u-container-layout u-container-layout-2">
                    <h2 class="u-align-center u-custom-font u-text u-text-3">{{$F->id_favorite}}</h2>
                  </div>
                </div> --}}
                <p class="u-align-center-lg u-text u-text-4">Ayam, udang, rempah-rempah, dan sereh ditambah dengan sambal matah yang segar.</p>
                <h3 class="u-align-center-lg u-custom-font u-text u-text-5">Rp 15000</h3>
                <a href="https://nicepage.com/c/pricing-html-templates" class="u-btn u-button-style u-palette-5-dark-2 u-btn-1">Tambah</a>
              </div>
            </div>
          {{-- @endforeach --}}
            {{-- <div class="u-align-center-lg u-align-center-md u-align-center-xl u-align-center-xs u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img src="template/images/sate tempe.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="412" data-image-height="644">
                <div class="u-align-center u-container-style u-group u-opacity u-opacity-85 u-palette-2-base u-group-2">
                  <div class="u-container-layout u-container-layout-4">
                    <h2 class="u-align-center u-custom-font u-text u-text-6">Sate Tempe</h2>
                  </div>
                </div>
                <p class="u-align-center-sm u-text u-text-7">Tempe, kecap, bawang merah, dan bawang goreng</p>
                <h3 class="u-align-center-sm u-custom-font u-text u-text-8">Rp 15000</h3>
                <a href="https://nicepage.com/k/membership-website-templates" class="u-btn u-button-style u-palette-5-dark-2 u-btn-2">Tambah</a>
              </div>
            </div> --}}
          </div>
        </div>
      </section>

      <section class="u-align-center u-clearfix u-grey-10 u-section-3" id="carousel_c1c7">
        <div class="u-clearfix u-sheet u-sheet-1">
          <h1 class="u-custom-font u-font-oswald u-text u-text-palette-3-base u-text-1">Menu Makanan</h1>
          <p class="u-text u-text-2">Menu makanan yang tersedia adalah makanan-makanan khas nusantara dengan bahan makanan pilihan asli nusantara</p>
         
          <div class="u-expanded-width-xs u-list u-repeater u-list-1">

          @foreach ($makanan as $M)
                <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                    <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                        <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-1" src="{{$M->image}}" data-image-width="1000" data-image-height="1500">
                        <div class="u-align-left-xs u-container-style u-expanded-width-xs u-group u-video-cover u-group-1">
                        <div class="u-container-layout u-container-layout-2">
                            <h3 class="u-custom-font u-font-oswald u-text u-text-3">{{$M->nama_menu}}</h3>
                            <p class="u-text u-text-4">{{$M->deskripsi}}</p>
                            <h6 class="u-text u-text-palette-3-base u-text-5">Rp {{$M->harga_menu}}</h6>
                            <a href="https://nicepage.com/k/quiz-html-templates" class="u-btn u-btn-rectangle u-button-style u-grey-10 u-btn-1">Tambah</a>
                        </div>
                        </div>
                    </div>
                    </div>
            @endforeach
        </div>
      </section>
      
      <section class="u-align-center u-clearfix u-palette-5-dark-3 u-section-4" id="carousel_9def">
        <div class="u-clearfix u-sheet u-sheet-1">
          <h1 class="u-custom-font u-font-playfair-display u-text u-text-1">Menu<br>Minuman
          </h1>
          <h5 class="u-text u-text-2">Minuman khas Indonesia dengan bahan-bahan pilihan asli Indonesia</h5>
          <div class="u-list u-repeater u-list-1">
            <div class="u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xs u-container-style u-list-item u-repeater-item u-video-cover u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img src="template/images/es degan.png" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="280" data-image-height="229">
                <div class="u-align-center u-container-style u-group u-opacity u-opacity-85 u-palette-3-base u-group-1">
                  <div class="u-container-layout u-container-layout-2">
                    <h2 class="u-align-center u-custom-font u-text u-text-3">Es Kelapa Muda</h2>
                  </div>
                </div>
                <p class="u-align-center-lg u-text u-text-4">A slice of Coffee Ice Cream on an Oreo Cookie crust, and topped with Fudge and Whipped Cream.</p>
                <h3 class="u-align-center-lg u-custom-font u-text u-text-5">Rp 15000</h3>
                <a href="https://nicepage.com/c/pricing-html-templates" class="u-btn u-button-style u-palette-5-dark-2 u-btn-1">Tambah</a>
              </div>
            </div>
            <div class="u-align-center-lg u-align-center-md u-align-center-xl u-align-center-xs u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img src="template/images/cendol.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="600" data-image-height="900">
                <div class="u-align-center u-container-style u-group u-opacity u-opacity-85 u-palette-2-base u-group-2">
                  <div class="u-container-layout u-container-layout-4">
                    <h2 class="u-align-center u-custom-font u-text u-text-6">Es Cendol</h2>
                  </div>
                </div>
                <p class="u-align-center-sm u-text u-text-7">Chocolate, vanilla &amp; strawberry ice cream, marshmallow, fudge &amp; chocolate toppings, whipped cream &amp; nuts</p>
                <h3 class="u-align-center-lg u-custom-font u-text u-text-5">Rp 15000</h3>
                <a href="https://nicepage.com/k/membership-website-templates" class="u-btn u-button-style u-palette-5-dark-2 u-btn-2">Tambah</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="u-align-center u-clearfix u-grey-10 u-section-5" id="sec-dbe5">
        <div class="u-clearfix u-sheet u-sheet-1">
          <h1 class="u-custom-font u-font-oswald u-text u-text-palette-3-base u-text-1">Menu Minuman</h1>
          <p class="u-text u-text-2">Menu makanan yang tersedia adalah makanan-makanan khas nusantara dengan bahan makanan pilihan asli nusantara</p>
          <div class="u-expanded-width-xs u-list u-repeater u-list-1">

            @foreach ($minuman as $M)
                <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                    <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-1" src="{{$M->image}}" data-image-width="680" data-image-height="1019">
                    <div class="u-align-left-xs u-container-style u-expanded-width-xs u-group u-video-cover u-group-1">
                    <div class="u-container-layout u-container-layout-2">
                        <h3 class="u-custom-font u-font-oswald u-text u-text-3">{{$M->nama_menu}}</h3>
                        <p class="u-text u-text-4">{{$M->deskripsi}}</p>
                        <h6 class="u-text u-text-palette-3-base u-text-5">Rp {{$M->harga_menu}}</h6>
                        <a href="https://nicepage.com/k/quiz-html-templates" class="u-btn u-btn-rectangle u-button-style u-grey-10 u-btn-1">Tambah</a>
                    </div>
                    </div>
                </div>
                </div>  
            @endforeach

          </div>
        </div>
      </section>


@endsection