@extends('layouts.master')
@section('title')
    Halaman Keranjang
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Detail Order</h2>
            </div>
            
            {{-- <div class="float-right my-2">
                <a class="btn btn-dark" href="{{ route('detailorder.save') }}">Order</a>                        
                <a class="btn btn-success" href="{{ route('home.menu') }}"> Input Detail Order</a>
            </div> --}}
        </div>
    </div>

    <form method="post" action="{{ route('detailorder.save') }}" id="myForm" enctype="multipart/form-data">
        @csrf
        @method('GET')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <div class="float-right my-2">
            <button type="submit" class="btn btn-primary">Submit</button>                   
            <a class="btn btn-success" href="{{ route('home.menu') }}"> Input Detail Order</a>
        </div>
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
                    {{-- @method('DELETE') --}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                            
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <th></th>
            <th></th>
            <th width="110px">Total Harga</th>
            <th>{{$detailorder->sum('harga')}}</th>
            <th></th>
        </tr>
    </table>    

    <div class="d-flex">
        {{ $detailorder->links() }}
    </div>

    <div class="container mt-1 " style="width: 24rem;"> 
        <div class="form-group">
            <label for="no_meja">NO Meja</label>
            <select name="no_meja" id="no_meja" class="form-control">
                <option value="">--Pilih Meja--</option>
                @foreach ($meja as $MEJA)
                    <option value="{{$MEJA->id_meja}}">{{$MEJA->no_meja}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Transaksi</label>
            <input type="tanggal" name="tanggal" class="form-control" id="tanggal" aria-describedby="Tanggal Transaksi" value="{{NOW()}}">
        </div>
    </div>
</form>
@endsection 