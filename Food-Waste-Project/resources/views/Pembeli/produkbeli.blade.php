@extends('layout.indexpembeli')
@section('menu')


    @foreach($data as $d) 
    <div class="nft">
        <div class="col-auto">
            <div class='main'>
                <img class='tokenImage' src="{{ url('foto').'/'.$d->foto_produk }}" alt="NFT" />
                <h2>{{$d->nama_produk}}</h2>
                <p class='description'>{{$d->detail_produk}}</p>
                <div class='tokenInfo'>
                    <div class="price">
                    <p>Rp. {{$d->harga_produk}}</p>  
                    </div>
                    <a href={{ url('/viewproduk/'.$d->id) }}>
                        <button type="button" class="btn btn-primary" >Pesan Sekarang
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
       
    @endforeach
@endsection
