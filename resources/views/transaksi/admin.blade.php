
@extends('layouts.admin')
@section('title')
Admin-Transaksi
@endsection
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Transaksi</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Transaksi</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">

                        <div class="card-header">
                            {{-- <span class="pull-right"><a href="{{ route('menu.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add menu</a></span> --}}
                            <h3><i class="far fa-file-alt"></i> Transaksi</h3>
                        </div>

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width:5px">#</th>
                                                <th style="width:110px">No Meja</th>
                                                <th style="width:110px">Harga Total</th>
                                                <th style="width:110px">Tanggal Order</th>
                                                <th style="width:110px">Status</th>
                                            </tr>
                                        </thead>
                                        @php $no = 1; @endphp
                                    @foreach ($order as $item)
                                        <tbody>

                                            <tr>
                                                <td>{{ $no++ }}</td>

                                                <td>{{ $item->meja->no_meja }}</td>
                                                <td>{{ $item->harga_total }}</td>
                                                <td>{{ $item->tgl_order}}</td>
                                                <td>{{ $item->status }}</td>

                                               
                                            </tr>
                                        </tbody>
                                    @endforeach   
                                    </table>
                                </div>
                            </div> 
                            <!-- end card-body -->

                            <div class="d-flex">
                                {{-- {{ $order->links() }} --}}
                            </div> 
                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection 