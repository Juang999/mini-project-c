@extends('layouts.master')

@section('title', 'Users Detail')

@section('content')
        <center>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </center>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">User Controller</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Actions</th>
                </tr>
                </thead>
                @foreach($user as $akun)
                <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                        <td>{{ $akun->name }}</td>
                            <td>
                                <form action="/user/{{ $akun->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"> | Delete</i></button>
                                    <a href="/user/{{ $akun->id }}" class="btn btn-outline-primary mt-1"><i class="fa fa-book"> | Detail</i></a>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
              </table>
            </div>
          </div>
@endsection
