@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>RESTORAN NUSANTARA</h2>
            </div>

            <div class="float-left my-4">
                <form action="/mahasiswa/cari/" method="GET">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="Search users...">
                        <button type="submit" class="btn btn-primary">
                            Search
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('home.meja') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>no meja</th>
                <th>kapasitas</th>
                <th>status</th>
                <th>gambar</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($meja as $meja)
                <tr>
                    <td>{{ $meja->id_meja }}</td>
                    <td>{{ $meja->no_meja }}</td>
                    <td>{{ $meja->kapasitas }}</td>
                    <td>{{ $meja->status_meja }}</td>
                    <td>{{ $meja->image }}</td>
                    <td>
                        <form action="{{ route('meja.destroy', $meja->Nim) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('meja.show', $Mahasiswa->Nim) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('meja.edit', $Mahasiswa->Nim) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {{ $paginate->links() }}
    </div>
@endsection