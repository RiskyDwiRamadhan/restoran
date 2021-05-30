@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Menu
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
                    <form method="post" action="{{ route('menu.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id_menu">ID</label>
                            <input type="text" name="id_menu" class="form-control" id="id_menu" aria-describedby="id_menu">
                        </div>
                        <div class="form-group">
                            <label for="nama_menu">Nama Menu</label>
                            <input type="nama_menu" name="nama_menu" class="form-control" id="nama_menu" aria-describedby="Nama Menu">
                        </div>
                        <div class="form-group">
                            <label for="harga_menu">Harga Menu</label>
                            <input type="harga_menu" name="harga_menu" class="form-control" id="harga_menu" aria-describedby="Harga Menu">
                        </div>
                        <div class="form-group">
                            <label for="jenis_menu">Jenis Menu</label>
                            <select name="jenis_menu" id="jenis_menu" class="form-control">
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Jajanan">Jajanan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea type="deskripsi" name="deskripsi" class="form-control" id="deskripsi" aria-describedby="Deskripsi"></textarea>
                        </div>
                        <div>
                            <label for="image">gambar: </label> <input type="file" class="form-control" required="required" name="image"></br>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection