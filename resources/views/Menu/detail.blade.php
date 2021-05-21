@extends('layouts.admin')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Menu
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><img width="100" height="100" src="{{ asset('storage/' . $menu->image) }}"></li>
                        <li class="list-group-item"><b>ID: </b>{{ $menu->id_menu }}</li>
                        <li class="list-group-item"><b>Nama Menu: </b>{{ $menu->nama_menu }}</li>
                        <li class="list-group-item"><b>Harga Menu: </b>{{ $menu->harga_menu }}</li>
                        <li class="list-group-item"><b>Jenis Menu: </b>{{ $menu->jenis_menu }}</li>
                        <li class="list-group-item"><b>Deskripsi: </b>{{ $menu->deskripsi }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('menu.index') }}">Kembali</a>

            </div>
        </div>
    </div>
@endsection