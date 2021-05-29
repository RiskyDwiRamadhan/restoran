@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>USER DATA </h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btnsuccess" href="{{ route('userdata.create') }}"> Input UserData</a>
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
