@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Detail Order</h2>
            </div>
            
            <div class="float-right my-2">
                
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
            <th>Menu</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Harga Total</th>
            <th>Tanggal Order</th>
            <th>Status</th>
            
        </tr>
        @foreach ($order as $ORDER)
        <tr>
            <td>{{ $ORDER->order->id_meja }}</td>
            <td>{{ $ORDER->menu->nama_menu}}</td>
            <td>{{ $ORDER->qty }}</td>
            <td>{{ $ORDER->menu->harga_menu }}</td>
            <td>{{ $ORDER->order->harga_total }}</td>
            <td>{{ $ORDER->order->tgl_order}}</td>
            <td>{{ $ORDER->order->status }}</td>
            
        </tr>
        @endforeach
    </table>    

    <div class="d-flex">
        {{ $order->links() }}
    </div>

@endsection 