@extends('layouts.admin')
@section('title')
Admin-Menu
@endsection
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Menu</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Menu</li>
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
                            <span class="pull-right"><a href="{{ route('menu.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add menu</a></span>
                            <h3><i class="far fa-file-alt"></i> Menu</h3>
                        </div>
                        
                        {{-- <div class="card-header" style="width:310px">
                        <form action="/menu/cari/" method="GET">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Cari Menu....">
                                <button type="submit" class="btn btn-primary">
                                    Cari
                                </button>
                            </div>
                        </form>
                        </div> --}}
                        <!-- end card-header -->

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 300px">Details menu</th>
                                                <th style="width:110px">Category</th>
                                                <th style="min-width:110px">Actions</th>
                                            </tr>
                                        </thead>
                                    @foreach ($menu as $item)
                                        <tbody>

                                            <tr>
                                                <td>
                                                    {{-- {{ asset('storage/' . $item->image) }} --}}
                                                    <div class="blog_list"><img class="img-fluid d-none d-lg-block" alt="image" src="{{ $item->image }}" /></div>
                                                    <h4> {{ $item->nama_menu }}</h4>
                                                    <p>{{ $item->harga_menu }}</p>
                                                    <p>{{ $item->deskripsi }}</p>
                                                </td>

                                                <td>{{ $item->jenis_menu }}</td>

                                                <td>
                                                    <form action="{{ route('menu.destroy', $item->id_menu) }}" method="POST">
                                    
                                                        <a class="btn btn-info btn-sm btn-block" href="{{ route('menu.show',$item->id_menu) }}">Show</a>
                                                        <a class="btn btn-primary btn-sm btn-block" href="{{ route('menu.edit', $item->id_menu) }}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm btn-block mt-2">Delete</button>
                                                                
                                                    </form>
                                                    {{-- <a href="#" class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i> Edit</a>                                                        
                                                    <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash"></i> Delete</a>                                                         --}}
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach   
                                    </table>
                                </div>
                            </div> 
                            <!-- end card-body -->

                            <div class="d-flex">
                                {{ $menu->links() }}
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