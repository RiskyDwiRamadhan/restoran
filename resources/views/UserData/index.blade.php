{{-- @extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>USER DATA </h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('userdata.create') }}"> Input UserData</a>
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
            <th>email</th>
            <th>username</th>
            <th>password</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($userdata as $user)
        <tr>
            <td>{{ $user->email}}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->password}}</td>
            <td>
            <form action="{{ route('userdata.destroy',$user->id) }}" method="POST">     
                  <a class="btn btnprimary" href="{{ route('userdata.edit',$user->id) }}">Edit</a>
                  @csrf @method('DELETE')

                     <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
                 </td>
             </tr>
             @endforeach
    </table>
@endsection
 --}}

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
                                                <th width="280px">Nama</th>
                                                <th width="280px">Email</th>
                                                <th width="280px">Role</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        @php $no = 1; @endphp
                                    @foreach ($userdata as $user)
                                        <tbody>

                                            <tr>
                                                <td>{{ $no++ }}</td>

                                                    <td>{{ $user->name}}</td>
                                                    <td>{{ $user->email}}</td>
                                                    <td>{{ $user->role}}</td>   
                                                    <td>
                                                        <form action="{{ route('userdata.destroy',$user->id) }}" method="POST">    
                                                            <a class="btn btn-primary" href="{{ route('userdata.edit',$user->id) }}">Edit</a>
                                                            @csrf 
                                                            @method('DELETE')
                                            
                                                            <button type="submit" class="btn btn-danger">Delete</button>
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