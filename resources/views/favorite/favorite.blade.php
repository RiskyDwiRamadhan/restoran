@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Menu Favorite</h2>
            </div>
            
            <div class="float-right my-2">                  
                <a class="btn btn-success" href="{{ route('favorite.create') }}"> Input Favorite</a>
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

                    <a class="btn btn-info" href="{{ route('favorite.show',$f->id_favorite) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('favorite.edit', $f->id_favorite) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                            
                </form>
            </td>
        </tr>
        @endforeach     
    </table>   
    <div class="d-flex">
        {{ $favorite->links() }}
    </div> 
@endsection 