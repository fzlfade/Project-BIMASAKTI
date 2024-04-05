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
                    <th>Nama Seller</th>
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
                            <form action ="{{url('dashboard')}}"method="get">
                            <button class="btn btn-success" href="">Terima</button>
                            <button class="btn btn-danger" href="">Tolak</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
    </div>
</body>
</html>