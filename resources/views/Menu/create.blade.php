@extends('layouts.master')

@section('content')
    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
                        @csrf
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
                                        <h2 class="u-custom-font u-font-playfair-display u-text u-text-1">TAMBAH MENU</h2>
                                        <div class="card">
                                            <div class="card-body">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                        <div class="u-form u-form-1">
                                          <form action="{{route ('menu.store')}}" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form" id="myform">
                                            <div class="u-form-group u-form-name">
                                              <label for="nama_menu" class="u-form-control-hidden u-label">Nama Menu</label>
                                              <input type="text" placeholder="Masukkan Nama Menu" id="nama_menu" name="nama_menu" class="u-border-2 u-border-white u-custom-font u-font-georgia u-grey-40 u-input u-input-rectangle u-text-white" required="nama_menu">
                                            </div>
                                            <div class="u-form-group u-form-group">
                                              <label for="harga_menu" class="u-form-control-hidden u-label">Harga Menu</label>
                                              <input type="text" placeholder="Masukkan Harga Menu" id="harga_menu" name="harga_menu" class="u-border-2 u-border-white u-custom-font u-font-georgia u-grey-40 u-input u-input-rectangle u-text-white" required="harga_menu">
                                            </div>
                                            <div class="u-form-group u-form-group">
                                                <label for="jenis_menu" class="u-form-control-hidden u-label">Jenis Menu</label>
                                                <select id="jenis_menu" name="jenis_menu" class="u-border-2 u-border-white u-custom-font u-font-georgia u-grey-40 u-input u-input-rectangle u-text-white" required="jenis_menu">
                                                    <option value="Makanan">Makanan</option>
                                                    <option value="Minuman">Minuman</option>
                                                    <option value="Jajanan">Jajanan</option>
                                                </select>
                                              </div>
                                            <div class="u-form-group u-form-group">
                                              <label for="deskripsi" class="u-form-control-hidden u-label">Deskripsi</label>
                                              <textarea placeholder="Tulisakan Deskripsi Bahan Menu" rows="4" cols="50" id="deskripsi" name="message" class="u-border-2 u-border-white u-custom-font u-font-georgia u-grey-40 u-input u-input-rectangle u-text-white" required="deskripsi"></textarea>
                                            </div>
                                            <div class="u-form-group u-form-group">
                                                <label for="image" class="u-form-control-hidden u-label">Foto</label>
                                                <input type="file" placeholder="Pilihlah Foto Menu" id="image" name="image" class="u-border-2 u-border-white u-custom-font u-font-georgia u-grey-40 u-input u-input-rectangle u-text-white" required="image">
                                              </div>
                                            <div class="u-align-left u-form-group u-form-submit">
                                              <button href="menu.index" class="u-btn u-btn-submit u-button-style u-grey-90 u-btn-1">Submit</button>
                                              <input type="submit" value="submit" class="u-form-control-hidden">
                                            </div>
                                            <div class="u-form-send-message u-form-send-success">Menu Berhasil Ditambahkan </div>
                                            <div class="u-form-send-error u-form-send-message"> Tidak dapat menambahkan menu, mohon dicoba kembali. </div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection