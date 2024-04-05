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
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                </tr>

                @foreach($dataorder as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$dataproduk->nama_produk}}</td>
                        <td>Rp, {{$dataproduk->harga_produk}}</td>
                        <td>
                            
                            {{-- @if(auth()->user()->hasRole('seller'))
                            <form action ="{{''.$data}}"method="POST">
                            <button class="btn btn-success" href="">Terima</button>
                            <button class="btn btn-danger" href="">Tolak</button>
                            </form>
                            @endif
                            @if(auth()->user()->hasRole('buyer'))
                            {{}}
                            @endif --}}
                            
                        </td>
                    </tr>
                @endforeach

            </table>
    </div>
</body>
</html>