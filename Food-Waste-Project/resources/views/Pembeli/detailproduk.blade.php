@extends('layout.indexpembeli')
@section('menu')
    

<style>
  .container {
  display: flex;
  align-items: center;
  justify-content: center
}

img {
  max-width: 100%;
  max-height:100%;
}

.text {
  font-size: 20px;
  padding-left: 20px;
}
  </style>
  <body>
    <div class="container">
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
  </body>





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