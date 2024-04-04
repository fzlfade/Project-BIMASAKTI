
@extends('layout.vieweditproduk')

@section('produk')
    <div class="row">
        @foreach($data as $e)
    <div class="card mx-3 my-3" style="width: 18rem;">
        <img src="{{ url('foto').'/'.$e->foto_produk }}" class="card-img-top py-3 rounded mx-auto d-block" style="max-height:120px ;" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$e->nama_produk}}</h5>
                <h6 class="card-title">Rp.{{$e->harga_produk}}</h6>
                <p class="card-text">{{$e->detail_produk}}</p>
                <a href="{{url('/editproduk/'.$e->id)}}" class="btn btn-warning">Edit Produk</a>
                <a href="" class="btn btn-danger">Delete</a>
            </div>
    </div>
        @endforeach
    </div>
@endsection