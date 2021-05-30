@extends('layouts.master')

@section('title')
    Halaman Transaksi
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-4">
                <h2>Transaksi</h2>
            </div>
            
            {{-- <div class="float-right my-2">
                <a class="btn btn-dark" href="{{ route('transaksi.proses', $order->id_order) }}">Transaksi</a>             
            </div>--}}
        </div> 
    </div>

    <form method="post" action="{{ route('transaksi.proses', $order->id_order) }}" id="myForm" enctype="multipart/form-data">
        @csrf
        @method('GET')
        
        <button type="submit" class="btn btn-primary">Submit</button>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

{{-- <script>
    var total = $('#total').val()

    $('#bayar').on('input', function(){
        var kembali = total - $(this).val()
        $('#kembali').val(kembali)
    })

</script> --}}

    <table class="table table-bordered">
        <tr>
            <th>Nama Menu</th>
            <th>Harga Menu</th>
            <th>QTY</th>
            <th>Total Harga</th>
        </tr>
        @foreach ($detailorder as $D)
        <tr>
            <td>{{ $D->menu->nama_menu }}</td>
            <td>{{ $D->menu->harga_menu }}</td>
            <td>{{ $D->qty}}</td>
            <td>{{ $D->harga }}</td>
        </tr>
        @endforeach
        <tr>
            <th style="border:none;"></th>
            <th style="border:none;"></th>
            <th width="110px">Total Harga</th>
            <th><input type="total" name="total" class="form-control" id="total" aria-describedby="total" value="{{$detailorder->sum('harga')}}" readonly></th>
        </tr>
        <tr>
            <th style="border:none;"></th>
            <th style="border:none;"></th>
            <th width="110px" >Uang Bayar</th>
            <th width="210px"><div class="transaksi"><input type="bayar" name="bayar" class="form-control" id="bayar" aria-describedby="bayar"></div></th>
        </tr>
        <tr>
            <td style="border:none;"></th>
            <td style="border:none;"></th>
            <th width="110px" >Kembalian</th>
            <th width="210px" ><input type="kembali" name="kembali" class="form-control" id="kembali" aria-describedby="kembali" readonly></th>
        </tr>
    </table>    

    <div class="d-flex">
        {{ $detailorder->links() }}
    </div>
</form>
<script>
    jQuery(function ($) { 
        $("#bayar").on('change', function() {
            let bayar = $(this).val();
            let total = $('#total').val();
            let kembalian = bayar - total;

            $("#kembali").val(kembalian);
        });
    });
</script>
@endsection 