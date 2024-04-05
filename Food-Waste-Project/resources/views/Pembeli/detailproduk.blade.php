@extends('layout.indexpembeli')
@section('menu')
    
<title>{{$dataproduk->nama_produk}}</title>
<body>

    {{-- <div class="container">
    <div class="image">
        <img src="{{ url('foto').'/'.$dataproduk->foto_produk }}">
    </div>
    <div class="text">
        <h1>{{$dataproduk->nama_produk}}</h1>
        <h2 {{$dataproduk->detail_produk}}</h2>
                <div>
                    <div class="price">
                    <p>Rp. {{$dataproduk->harga_produk}}</p>  
                    </div>
                    <div class="price">
                        <p>Nama Toko:{{$dataseller->nama_toko}}</p>  
                    </div>
    </div>
    </div>
    </div> --}}
    
    <div class="container mt-5">
        <h1 class="text-center mb-4">{{$dataproduk->nama_produk}}</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ url('foto').'/'.$dataproduk->foto_produk }}" class="img-fluid mb-3" alt="Product Image" height="500">
                <p>Price: Rp. {{$dataproduk->harga_produk}}</p>
                <p>Nama Toko:{{$dataseller->nama_toko}}</p>
                <p>Alamat Toko:{{$dataseller->alamat_toko}}</p>
            </div>
            <div class="col-md-8">
                <h3>Product Description</h3>
                <p>{{$dataproduk->detail_produk}}</p>
                <h3>Delivery Information</h3>
                <p></p>
                <h3>Additional Information</h3>
                <p></p>
                <form  class="d-inline" action="{{ url('/buyerstatus/'.$dataproduk->id) }}" method="post">
                    @csrf  
                    <button type="submit" class="btn btn-success">PESAN SEKARANG</button>
                </form>
            </div>
        </div>
    </div>
    <





{{-- 
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class='main'>
                <img class='tokenImage' src="{{ url('foto').'/'.$dataproduk->foto_produk }}" alt="NFT" />
                <h2>{{$dataproduk->nama_produk}}</h2>
                <p class='description'>{{$dataproduk->detail_produk}}</p>
                <div class='tokenInfo'>
                    <div class="price">
                    <p>Rp. {{$dataproduk->harga_produk}}</p>  
                    </div>
                    <div class="price">
                        <p>Rp. {{$dataseller->nama_toko}}</p>  
                    </div>
                    <a href={{ url('/viewproduk/'.$dataproduk->id) }}>
                        <button type="button" class="btn btn-primary" >Pesan Sekarang
                        </button>
                    </a>
                </div>
            </div>
        </div>
    --}}
@endsection