@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            @php $avatar = Storage::url('images/'.$user->avatar); @endphp
            <a href="{{ url($avatar) }}"> <img src="{{ url($avatar) }}" alt="{{ url($avatar) }}" width="200px"> </a>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="" placeholder=""
                    value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="" placeholder=""
                    value="{{ $user->alamat }}">
            </div>
            <div class="form-group">
                <label for="">No Hp</label>
                <input type="text" class="form-control" name="no_hp" id="no_hp" aria-describedby="" placeholder=""
                    value="{{ $user->no_hp }}">
            </div>
            <button type="submit" class="btn btn-secondary float-right">Edit</button>
        </form>
    </div>

@endsection
