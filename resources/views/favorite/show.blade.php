@extends('layouts.admin')

@section('content')
    <div class="container mt-5" enctype="multipart/form-data">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><img width="200px" height="200px" src="{{$favorite->menu->image}}"></li>
                    <li class="list-group-item"><b>Nama Menu: </b>{{$favorite->menu->nama_menu}}</li>
                    <li class="list-group-item"><b>Harga Menu: </b>{{$favorite->menu->harga_menu}}</li>
                    {{-- <li class="list-group-item"><b>Harga Menu: </b>{{$favorite->id_favorite}}</li> --}}
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('favorite.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection