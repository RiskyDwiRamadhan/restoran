@extends('layouts.master')
@section('title')
    Halaman Transaksi
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Transaksi</h2>
            </div>
            
            <div class="float-right my-2">
                {{-- <a class="btn btn-dark" href="{{ route('transaksi.save') }}">Order</a>     --}}
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
            <th>No Meja</th>
            <th>Harga Total</th>
            <th>Tanggal Order</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($order as $ORDER)
        <tr>
            <td>{{ $ORDER->id_meja }}</td>
            <td>{{ $ORDER->harga_total }}</td>
            <td>{{ $ORDER->tgl_order}}</td>
            <td>{{ $ORDER->status }}</td>
            <td>
                <a class="btn btn-dark" href="{{ route('transaksi.bayar', $ORDER->id_order) }}">Order</a>     
            </td>
        </tr>
        @endforeach
    </table>    

    <div class="d-flex">
        {{ $order->links() }}
    </div>

@endsection 