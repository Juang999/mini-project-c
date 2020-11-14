@extends('layouts.app')

@section('content')

    <div class="container">

        <ul class="list-group mt-3">
            <li class="list-group-item active">{{ $toko->nama_toko }}</li>
        </ul>
    </div>

@endsection
