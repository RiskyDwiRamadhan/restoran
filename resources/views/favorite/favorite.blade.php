@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Menu Favorite</h2>
            </div>
            
            <!-- Form Search -->
            <div class="float-left my-2">
                <form action="{{ route('favorite.index') }}" method="GET">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari</button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- End Form Search -->

            <div class="float-right my-2">                  
                <a class="btn btn-success" href="{{ route('home.menu') }}"> Input Favorite</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Gambar Menu</th>
            <th>Nama Menu</th>
            <th>Harga Menu</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($favorite as $f)
        <tr>
            <td><img src="{{ $f->menu->image }}" width="100px" height="100px"></td>
            <td>{{ $f->menu->nama_menu }}</td>
            <td>{{ $f->menu->harga_menu }}</td>
            <td>
                <form action="{{ route('favorite.destroy', $f->id_favorite) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('favorite.edit', $f->id_favorite) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                            
                </form>
            </td>
        </tr>
        @endforeach     
    </table>    
@endsection 