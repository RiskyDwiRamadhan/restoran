@extends('layouts.admin')

@section('content')

<div class="content-page">

        <!-- Start content -->
    <div class="content">

        <div class="container">
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Booking</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Booking</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header"><h3>
                            <i class="fas fa-table"></i> Table Booking</h3>

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                        </div>

                        <div class="card-body">

                            <table class="table table-responsive-xl table-striped">
                                <thead>
                                    <tr>
                                        <th width="280px">id</th>
                                        <th width="280px">no meja</th>
                                        <th width="280px">kapasitas</th>
                                        <th width="280px">status</th>
                                        <th width="280px">gambar</th>
                                        <th style="min-width:110px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($meja as $Meja)
                                        <tr>
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
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                    <!-- end card-->

                                <div class="d-flex">
                                    {{ $meja->links() }}
                                </div> 
                </div>
                <!-- end col-->

            </div>
            <!-- end row-->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->
    
</div>
<!-- END content-page -->
@endsection