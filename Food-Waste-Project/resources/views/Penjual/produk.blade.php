
@extends('layout.vieweditproduk')

@section('produk')
    
        @foreach($data as $e)
        <tr>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="bg-white rounded shadow-sm"><img src="{{ url('foto').'/'.$e->foto_produk }}" alt="" class="img-fluid card-img-top">
                <div class="p-4">
                    <h5> <a href="#" class="text-dark">{{$e->nama_produk}}</a></h5>
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
        </tr>
        @endforeach
    

@endsection