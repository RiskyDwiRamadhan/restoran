@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Meja
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
                    <form method="post" action="{{ route('booking.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id_meja">ID</label>
                            <input type="text" name="id_meja" class="form-control" id="id_meja" aria-describedby="id_meja">
                        </div>
                        <div class="form-group">
                            <label for="no_meja">No Meja</label>
                            <input type="no_meja" name="no_meja" class="form-control" id="no_meja" aria-describedby="no_meja">
                        </div>
                        <div class="form-group">
                            <label for="kapasitas">Kapasitas</label>
                            <input type="kapasitas" name="kapasitas" class="form-control" id="kapasitas" aria-describedby="kapasitas">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status_meja">Status</label>
                            <input type="status_meja" name="status_meja" class="form-control" id="status_meja" aria-describedby="status_meja">
                        </div>
                        <div>
                            <label for="image">gambar: </label> <input type="file" class="form-control" required="required" name="image"></br>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection