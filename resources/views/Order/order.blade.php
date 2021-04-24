@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Detail Order</h2>
            </div>
            
            <!-- Form Search -->
            <div class="float-left my-2">
                <form action="{{ route('detailorder.index') }}" method="GET">
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
                <a class="btn btn-dark" href="{{ route('detailorder.store') }}">Order</a>                        
                <a class="btn btn-success" href="{{ route('home.menu') }}"> Input Detail Order</a>
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
            <th>Nama Menu</th>
            <th>Harga Menu</th>
            <th>QTY</th>
            <th>Total Harga</th>
            <th width="280px">Action</th>
            </tr>
            @foreach ($detailorder as $D)
                <tr>
                    <td>{{ $D->menu->nama_menu }}</td>
                    <td>{{ $D->menu->harga_menu }}</td>
                    <td>{{ $D->qty}}</td>
                    <td>{{ $D->harga }}</td>
                    <td>
                        <form action="{{ route('detailorder.destroy', $D->id_sorder) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('detailorder.edit', $D->id_sorder) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>    
@endsection