@extends('layouts.app')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Menu
                </div>
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
                    <form method="post" action="{{ route('menu.update', $menu->id_menu) }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_menu">ID</label>
                            <input type="text" name="id_menu" class="form-control" id="id_menu" aria-describedby="id_menu" value="{{$menu->id_menu}}">
                        </div>
                        <div class="form-group">
                            <label for="nama_menu">Nama Menu</label>
                            <input type="nama_menu" name="nama_menu" class="form-control" id="nama_menu" aria-describedby="nama_menu" value="{{$menu->nama_menu}}">
                        </div>
                        <div class="form-group">
                            <label for="harga_menu">Harga Menu</label>
                            <input type="harga_menu" name="harga_menu" class="harga_menu" id="harga_menu" aria-describedby="harga_menu" value="{{$menu->harga_menu}}">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_menu">Jenis Menu</label>
                            <input type="jenis_menu" name="jenis_menu" class="form-control" id="jenis_menu" aria-describedby="jenis_menu" value="{{$menu->jenis_menu}}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="deskripsi" name="deskripsi" class="form-control" id="deskripsi" aria-describedby="jenis_menu" value="{{$menu->deskripsi}}">
                        </div>
                        <div>
                            <label for="image">Gambar: </label> <input type="file" class="form-control" required="required" name="image"></br>
                            <img width="100" height="100" src="{{ asset('storage/images' . $menu->image) }}">
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection