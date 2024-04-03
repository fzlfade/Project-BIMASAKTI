
@extends('layout.vieweditproduk')

@section('produk')
    <style>
            .nft{
            user-select:none;
            max-width: 300px;
            margin: 5rem auto;
            border: 1px solid #ffffff22;
            background-color: #282c34;
            background: linear-gradient(0deg, rgba(40,44,52,1) 0%, rgba(17,0,32,.5) 100%);
            box-shadow: 0 7px 20px 5px #00000088;
            border-radius: .7rem;
            backdrop-filter: blur(7px);
            -webkit-backdrop-filter: blur(7px);
            overflow: hidden;
            transition: .5s all;
            hr{
                width: 100%;
                border: none;
                border-bottom: 1px solid #88888855;
                margin-top: 0;
            }
            ins{
                text-decoration: none;
            }
            .main{
                display: flex;
                flex-direction: column;
                width: 90%;
                padding: 1rem;
                .tokenImage{
                border-radius: .5rem;
                max-width: 100%;
                height: 250px;
                object-fit: cover;
                }
                .description{
                margin: .5rem 0;
                color: #a89ec9;
                }
                .tokenInfo{
                display: flex;
                justify-content: space-between;
                align-items: center;
                .price{
                    display: flex;
                    align-items: center;
                    color: #ee83e5;
                    font-weight: 700;
                    ins{
                    margin-left: -.3rem;
                    margin-right: .5rem;
                    }
                }
                .duration{
                    display: flex;
                    align-items: center;
                    color: #a89ec9;
                    margin-right: .2rem;
                    ins{
                    margin: .5rem;
                    margin-bottom: .4rem;
                    }
                }
                }
                .creator{
                display: flex;
                align-items: center;
                margin-top: .2rem;
                margin-bottom: -.3rem;
                ins{
                    color: #a89ec9;
                    text-decoration: none;
                }
                .wrapper{
                    display: flex;
                    align-items: center;
                    border: 1px solid #ffffff22;
                    padding: .3rem;
                    margin: 0;
                    margin-right: .5rem;
                    border-radius: 100%;
                    box-shadow: inset 0 0 0 4px #000000aa;
                    img{
                    border-radius: 100%;
                    border: 1px solid #ffffff22;
                    width: 2rem;
                    height: 2rem;
                    object-fit: cover;
                    margin: 0;
                    }
                }
                }
            }
            ::before{
                position: fixed;
                content: "";
                box-shadow: 0 0 100px 40px #ffffff08;
                top: -10%;
                left: -100%;
                transform: rotate(-45deg);
                height: 60rem;
                transition: .7s all;
            }
            &:hover{
                border: 1px solid #ffffff44;
                box-shadow: 0 7px 50px 10px #000000aa;
                transform: scale(1.015);
                filter: brightness(1.3);
                ::before{
                filter: brightness(.5);
                top: -100%;
                left: 200%;
                }
            }
            }

            .bg{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            h1{
                font-size: 20rem;
                filter: opacity(0.5);
            }
            }
        </style>
        @foreach($data as $e)
        <!-- <div class="row">
            <td>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <img src="{{ url('foto').'/'.$e->foto_produk }}" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">{{$e->nama_produk}}</a></h5>
                            <p class="small text-muted mb-0">{{$e->harga_produk}}</p>
                            <p class="small text-muted mb-0">{{$e->detail_produk}}</p>
                            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <div class="btn-group">
                                    <a href='{{url('/editproduk/'.$e->id)}}'>
                                        <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </div> -->
        <div class="nft">
        <div class="col-auto">
            <div class='main'>
                <img class='tokenImage' src="{{ url('foto').'/'.$e->foto_produk }}" alt="NFT" />
                <h2>{{$e->nama_produk}}</h2>
                <p class='description'>{{$e->detail_produk}}</p>
                <div class='tokenInfo'>
                    <div class="price">
                    <p>Rp. {{$e->harga_produk}}</p>  
                    </div>
                    <a href={{ url('/viewproduk/'.$e->id) }}>
                        <button type="button" class="btn btn-primary" >Pesan Sekarang
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
        @endforeach

@endsection