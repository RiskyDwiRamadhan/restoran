@extends('layouts.admin')
@section('content')

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">Tabel Menu</h2>
      <div class="float-left my-4">
        <form action="/menu/cari/" method="GET">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control" placeholder="Cari Menu....">
                <button type="submit" class="btn btn-primary">
                    Cari
                </button>
            </div>
        </form>
    </div>
    <div class="float-right my-2">
        <a class="btn btn-success" href="{{ route('menu.create') }}"> Input Menu</a>
    </div>
    </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              
              <th scope="col">ID</th>
              <th scope="col">Nama</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Jenis</th>
              <th scope="col">Harga</th>
              <th scope="col">Foto</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($menu as $item)
            <tr scope="row"> 
                <td>{{ $item->id_menu }}</td>
                <td>{{ $item->nama_menu }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->jenis_menu }}</td>
                <td>{{ $item->harga_menu}}</td>
                <td>{{ $item->image}}</td>
                <td>
                    <form action="{{ route('menu.destroy', $item->id_menu) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('menu.show', $item->id_menu) }}">Lihat</a>

                        <a class="btn btn-primary" href="{{ route('menu.edit', $item->id_menu) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>


    </div>

  </div>
  @endsection