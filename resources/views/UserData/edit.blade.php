@extends('layouts.app')

@section('content')
 
<div class="container mt-5">
 
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit UserData
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your i
nput.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="POST" action="{{ route('userdata.update', $userdata->id) }}" id="myForm">
 @csrf
 @method('PUT')
 <div class="form-group">
 <label for="email">email</label> 
 <input type="text" name="email" class="form-control" id="email" aria-describedby="email" > 
 </div>
 <div class="form-group">
 <label for="username">username</label> 
  <input type="text" name="username" class="form-control" id="username" aria-describedby="username" > 
 </div>
 <div class="form-group">
 <label for="password">password</label> 
 <input type="password" name="password" class="form-control" id="password" aria-describedby="password" > 
 </div>
 <button type="edit" class="btn btn-primary">Edit</button>
 </form>
 </div>
 </div>
 </div>
</div>
@endsection