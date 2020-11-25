@extends('layouts.master')

@section('title', 'Dashboard Admin')
@section('content')
        <div class="row">
          @foreach($Product as $buku)
          <div class="col-md-6">
            <div class="card mb-3" style="width: 20rem;">
               <div class="card-body">
                 <center>
                   <img src="{{ asset('/buku/photo_2020-11-17_09-19-45.jpg') }}" style="width: 250px; ">
                 </center>
                  <h5>{{ $buku->nama }}</h5>
                  <p>Rp. {{ $buku->harga }}</p>
                  <a href="#" class="mt-3 btn btn-dark float-right">Detail</a>        
                  </div>
              </div>
          </div>
          <br>
          @endforeach
        </div>
@endsection
