@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Detail Order</h2>
            </div>
            
            <div class="float-right my-2">
                <a class="btn btn-dark" href="{{ route('detailorder.save') }}">Order</a>                        
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
@endsection 