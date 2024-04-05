
@extends('layout.vieweditproduk')

@section('produk')
    <style>
        .thumb-post img {
            object-fit: none; /* Do not scale the image */
            object-position: center; /* Center the image within the element */
            width: 100%;
            max-height: 250px;
            margin-bottom: 1rem;
}
    </style>
    <div class="row">
        @foreach($data as $e)
    <div class="card mx-3 my-3" style="width: 18rem;">
        <div class="thumb-post">
        <img src="{{ url('foto').'/'.$e->foto_produk }}" class="card-img-top py-3 rounded mx-auto d-block" alt="...">
        </div>
            <div class="card-body">
                <h5 class="card-title">{{$e->nama_produk}}</h5>
                <h6 class="card-title">Rp.{{$e->harga_produk}}</h6>
                <p class="card-text">{{$e->detail_produk}}</p>
                <a href="{{url('/editproduk/'.$e->id)}}" class="btn btn-warning">Edit Produk</a>
                <a href="{{url('/deleteproduk/'.$e->id)}}" class="btn btn-danger">Delete</a>
            </div>
    </div>
        @endforeach
    </div>
@endsection