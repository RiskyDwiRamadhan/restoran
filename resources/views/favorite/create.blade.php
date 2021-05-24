@extends('layouts.master')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Favorite
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('favorite.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="ID">ID Favorite</label>
                            <input type="text" name="ID" class="form-control" id="ID" aria-describedby="ID" value="F{{rand(01,99)}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Menu">Nama Menu</label> 
                            <select type="Menu" name="Menu" class="form-control" id="Menu">
                                <option>--Pilih Menu Favorite--</option>
                                @foreach($menu as $m)
                                    <option value="{{$m->id_menu}}">{{$m->nama_menu}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Tanggal">Tanggal</label>
                            <input type="Tanggal" name="Tanggal" class="form-control" id="Tanggal" aria-describedby="Tanggal" value="{{now()}}" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection