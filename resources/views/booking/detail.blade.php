@extends('layouts.admin')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail meja Restoran
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><img width="100" height="100" src="{{ asset('storage/' . $meja->image) }}"></li>
                        <li class="list-group-item"><b>id: </b>{{ $meja->id_meja }}</li>
                        <li class="list-group-item"><b>no meja: </b>{{ $meja->no_meja }}</li>
                        <li class="list-group-item"><b>kapasitas: </b>{{ $meja->kapasitas }}</li>
                        <li class="list-group-item"><b>status: </b>{{ $meja->status_meja }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('booking.index') }}">Kembali</a>

            </div>
        </div>
    </div>
@endsection