@extends('layouts.master')

@section('title')
    Halaman Home
@endsection
@section('template')
  <link rel="stylesheet" href="\template\Home.css" media="screen"> 
@endsection

@section('content')  
    
<section class="skrollable u-align-center u-clearfix u-image u-parallax u-shading u-section-1" id="carousel_b17f" data-image-width="1280" data-image-height="853">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-custom-font u-font-playfair-display u-text u-text-1">KEDAI HOMY</h1>
      <p class="u-text u-text-2">Memberikan rasa khas nusantara dengan bahan-bahan pilihan<br>untuk menghasilkan rasa, aroma, dan nuansa nusantara
      </p><span class="u-icon u-icon-circle u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 490.677 490.677" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-536a"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" id="svg-536a" style="enable-background:new 0 0 490.677 490.677;"><g><g><path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333    L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path>
</g>
</g></svg></span>
    </div>
  </section>
  
  <section class="u-clearfix u-section-2" id="sec-2b2d">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1" data-image-width="640" data-image-height="528">
                  <div class="u-container-layout u-container-layout-1"></div>
                </div>
                <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                  <div class="u-container-layout u-container-layout-2">
                    <h6 class="u-align-center u-text u-text-1">FAVORITE<br>DRINK
                    </h6>
                    <h3 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-2">{{$data[2]->menu->nama_menu}}</h3>
                    <p class="u-align-center u-text u-text-3">{{$data[2]->menu->deskripsi}}</p>
                  </div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-2" data-image-width="412" data-image-height="644">
                  <div class="u-container-layout u-container-layout-3"></div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-4">
                  <div class="u-container-layout u-container-layout-4">
                    <h6 class="u-align-center u-text u-text-4">Favorite<br>Food
                    </h6>
                    <h3 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-5">{{$data[0]->menu->nama_menu}}</h3>
                    <p class="u-align-center u-text u-text-6">{{$data[0]->menu->deskripsi}}</p>
                  </div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-size-20 u-image-3" data-image-width="280" data-image-height="229">
                  <div class="u-container-layout u-container-layout-5"></div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-6">
                  <div class="u-container-layout u-container-layout-6">
                    <h6 class="u-align-center u-text u-text-7">Favorite food</h6>
                    <h3 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-8">{{$data[1]->menu->nama_menu}}</h3>
                    <p class="u-align-center u-text u-text-9">{{$data[1]->menu->deskripsi}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="u-clearfix u-grey-5 u-section-3" id="carousel_2896">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-spacing-top u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-top-xs u-container-layout-1">
                <h2 class="u-custom-font u-font-playfair-display u-text u-text-1">About Us</h2>
                <p class="u-text u-text-2">Sejak awal berdirinya Restoran Nusantara pada tahun 1987. Perkembangan Restoran Nusantara telah diramaikan dengan energi untuk memasak dan menyajikan makanan khas nusantara.<br>
                  <br>Berbeda dengan restoran lainnya, Nusantara dibuat dengan ekspektasi agar semakin melestarikan makanan khas Indonesia. Kami menyadari banyak orang menyukai makanan Indonesia, tetapi sebagian besar dari mereka tidak sadar akan bahan-bahan yang sering disayangkan dalam pembuatan makanan. Menu kami menggunakan bahan-bahan pilihan sehingga menonjolkan rasa khas nusantaranya.
                </p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" data-image-width="564" data-image-height="846">
              <div class="u-container-layout" src=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-white u-section-4" id="carousel_ac32">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" data-image-width="910" data-image-height="1365">
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <h2 class="u-custom-font u-font-playfair-display u-text u-text-1">Contact Us</h2>
                <div class="u-form u-form-1">
                  <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
                    <div class="u-form-group u-form-name">
                      <label for="name-891d" class="u-form-control-hidden u-label">Name</label>
                      <input type="text" placeholder="Enter your Name" id="name-891d" name="name" class="u-border-2 u-border-white u-custom-font u-font-georgia u-grey-40 u-input u-input-rectangle u-text-white" required="">
                    </div>
                    <div class="u-form-email u-form-group">
                      <label for="email-891d" class="u-form-control-hidden u-label">Email</label>
                      <input type="email" placeholder="Enter a valid email address" id="email-891d" name="email" class="u-border-2 u-border-white u-custom-font u-font-georgia u-grey-40 u-input u-input-rectangle u-text-white" required="">
                    </div>
                    <div class="u-form-group u-form-message">
                      <label for="message-891d" class="u-form-control-hidden u-label">Message</label>
                      <textarea placeholder="Enter your message" rows="4" cols="50" id="message-891d" name="message" class="u-border-2 u-border-white u-custom-font u-font-georgia u-grey-40 u-input u-input-rectangle u-text-white" required=""></textarea>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                      <a href="#" class="u-btn u-btn-submit u-button-style u-grey-90 u-btn-1">Submit</a>
                      <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection