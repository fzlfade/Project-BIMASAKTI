<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-navbar-profile>
    </x-navbar-profile>
    <div class="container mt-5 mb-5 d-block mx-auto justify-content-center align-items-center" style="background-color: #ffefde;">
        <div class="">
            
            <form action="{{'/editproduk/'.$data->id}}" method="POST" class="produk"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-5 border-right" style="background-color: #00ffd1;">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Edit Produk Toko</h4>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk"  value="nama_produk" >
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label class="labels">Deskripsi Produk</label>
                                <input type="text" class="form-control" name="detail_produk"  value="nama_produk">
                            </div>
                        </div>
                        <div class="col-md-15">
                            <label class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" name="foto_produk" >
                            <small class="text-muted">Ukuran gambar : maks. 1 MB. Format gambar: JPEG, PNG</small>
                        </div>
                        <div class="mt-md-1 text-center"><button class="btn btn-primary profile-button" type="submit" >Save Profile</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</html>