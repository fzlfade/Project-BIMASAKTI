<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <x-navbar-profile>
    </x-navbar-profile>
</head>
<body>
    <div class="container mt-5 mb-5 d-block mx-auto justify-content-center align-items-center">
        <h1>Riwayat Pesanan</h1>
            <table class="table">
                <tr>
                    <th>Status</th>
                    <th>Nama Buyer</th>
                    <th>Nama Produk</th>                    
                    <th>Harga Produk</th>
                    <th></th>
                </tr>

                @foreach($data as $item)
                    <tr>
                        <td>{{$item->status}}</td>
                        <th>{{$item->name}}</th>
                        <th>{{$item->nama_produk}}</th>
                        <th>Rp {{$item->harga_produk}}</th>
                        <td>     
                            @if(auth()->user()->hasRole('seller'))
                            <form action ="{{'/riwayatpesananseller/'.$item->orders_id}}"method="POST">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-success">Terima Pesanan</button>
                            </form>

                            <form action ="{{'/riwayatpesanansellertolak/'.$item->orders_id}}"method="POST">
                                @csrf
                                @method('PUT')
                            <button class="btn btn-danger mt-1" href="">Tolak Pesanan</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
    </div>
</body>
</html>