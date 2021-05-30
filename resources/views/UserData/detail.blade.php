@extends('layouts.master')

@section('content')
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Detail UserData
 </div> <div class="card-body">
 <ul class="list-group list-group-flush">
 <li class="list-group-item"><b>id_user: </b>{{$userdata->id_user}}</li>
 <li class="list-group-item"><b>email: </b>{{$userdata->email}}</li>
 <li class="list-group-item"><b>username: </b>{{$username->username}}</li>
 <li class="list-group-item"><b>password: </b>{{$password->password}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt3" href="{{ route('userdata.index') }}">Kembali</a>
 </div>
 </div>
</div>
@endsection