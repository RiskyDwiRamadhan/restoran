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
                    <form method="post" action="{{ route('favorite.update', $favorite->id_favorite) }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="ID">ID Favorite</label>
                            <input type="text" name="ID" class="form-control" id="ID" aria-describedby="ID" value="F{{$favorite->id_favorite}}">
                        </div>
                        <div class="form-group">
                            <label for="Menu">Nama Menu</label> 
                            <select type="Menu" name="Menu" class="form-control" id="Menu">
                                <option>--Pilih Menu Favorite--</option>
                                @foreach($menu as $m)
                                    <option value="{{$m->id_menu}}" {{$favorite->id_menu == $m->id_menu ? 'selected' : ''}}>{{$m->nama_menu}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Tanggal">Tanggal</label>
                            <input type="Tanggal" name="Tanggal" class="form-control" id="Tanggal" aria-describedby="Tanggal" value="{{$favorite->tangal_favorite}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection