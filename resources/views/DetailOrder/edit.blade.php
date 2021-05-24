@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Order
            </div>
        <div class="card-body">
                    <form action="{{ route('detailorder.update', $sorder->id_sorder) }}" method="POST" class="tm-contact-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                            <div
                                class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                                <img src="{{ $sorder->menu->image }}" height="300px">
                                <div
                                    class="u-align-left-xs u-container-style u-expanded-width-xs u-group u-video-cover u-group-1">
                                    <div class="u-container-layout u-container-layout-2">
                                        <h3 class="u-custom-font u-font-oswald u-text u-text-3">{{ $sorder->menu->nama_menu }}</h3>
                                        <p class="u-text u-text-4">{{ $sorder->menu->deskripsi }}</p>
                                        <h6 class="u-text u-text-palette-3-base u-text-5">Rp {{ $sorder->menu->harga_menu }}</h6>
                                        <div class="form-group">
                                          <input type="text" name="qty" id="qty" class="form-control u-text-5" value="{{$sorder->qty}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        <a class="btn btn-success mt3" href="{{ route('detailorder.index') }}">Kembali</a>
        </div>
    </div>
</form>
@endsection 