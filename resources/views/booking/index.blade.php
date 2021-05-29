
@extends('layouts.admin')
@section('title')
Admin-Meja
@endsection
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Meja</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Meja</li>
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
                            <h3><i class="far fa-file-alt"></i> Meja</h3>
                        </div>

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="5px">#</th>
                                                <th width="110px">id</th>
                                                <th width="110px">no meja</th>
                                                <th width="110px">kapasitas</th>
                                                <th width="110px">status</th>
                                                <th width="110px">gambar</th>
                                                <th style="width:50px">Action</th>
                                            </tr>
                                        </thead>
                                        @php $no = 1; @endphp
                                    @foreach ($meja as $Meja)
                                        <tbody>

                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $Meja->id_meja }}</td>
                                                <td>{{ $Meja->no_meja }}</td>
                                                <td>{{ $Meja->kapasitas }}</td>
                                                <td>{{ $Meja->status_meja }}</td>
                                                <td><img src="{{ asset('storage/' . $Meja->image) }}" width="100px;" height="100px;" alt=""></td>
                                                <td>
                                                    <form action="{{ route('booking.destroy', $Meja->id_meja) }}" method="POST">
                            
                                                        <a class="btn btn-info btn-sm btn-block" href="{{ route('booking.show', $Meja->id_meja) }}">Show</a>
                            
                                                        <a class="btn btn-primary btn-sm btn-block" href="{{ route('booking.edit', $Meja->id_meja) }}">Edit</a>
                            
                                                        @csrf
                                                        @method('DELETE')
                            
                                                        <button type="submit" class="btn btn-danger btn-sm btn-block mt-2   ">Delete</button>
                                                    </form>
                                                </td>
                                               
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
