@extends('layouts.app')

@section('content')

    @foreach ($users as $user)
        <div class="container">
            <ul class="list-group mt-3">
                <li class="list-group-item active">Nama : {{ $user->name }}</li>
                <li class="list-group-item"><img src="{{ $user->avatar }}" alt="" width="200px"></li>
                <li class="list-group-item">Sebagai : {{ $user->role->role }}</li>
                <li class="list-group-item">Alamat : {{ $user->alamat }}</li>
                <li class="list-group-item">No Hp : {{ $user->no_hp }}</li>
            </ul>
        </div>
    @endforeach

@endsection
