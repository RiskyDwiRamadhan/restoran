@extends('layouts.admin')
@section('title')
    Admin-Favorite Menu
@endsection
@section('content')
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Menu Favorite</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Menu Favorite</li>
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
                                <span class="pull-right"><a href="{{ route('favorite.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add favorite</a></span>
                                <h3><i class="far fa-file-alt"></i> Menu Favorite</h3>
                            </div>
                            <!-- end card-header -->

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 300px">Details favorite</th>
                                                    <th style="min-width:110px">Actions</th>
                                                </tr>
                                            </thead>
                                        @foreach ($favorite as $f)
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class="blog_list"><img class="img-fluid d-none d-lg-block" alt="image" src="{{ $f->menu->image }}" /></div>
                                                        <h4> {{ $f->menu->nama_menu }}</h4>
                                                        <p>{{ $f->menu->harga_menu }}</p>
                                                        <p>{{ $f->menu->deskripsi }}</p>
                                                    </td>

                                                    <td>
                                                        <form action="{{ route('favorite.destroy', $f->id_favorite) }}" method="POST">
                                        
                                                            <a class="btn btn-info btn-sm btn-block" href="{{ route('favorite.show',$f->id_favorite) }}">Show</a>
                                                            <a class="btn btn-primary btn-sm btn-block" href="{{ route('favorite.edit', $f->id_favorite) }}">Edit</a>
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
                                    {{ $favorite->links() }}
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