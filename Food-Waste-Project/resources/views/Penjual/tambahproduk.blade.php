<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>

<body>

    <style>
        .form-content .form-items {
            border: 5px solid black;
            padding: 5px;
            display: inline-block;
            width: 100%;
            min-width: 500px;
            border-radius: 10px;
            text-align: left;
            background-color: #ffefde;
        }
    </style>


    <x-navbar-profile>
    </x-navbar-profile>
    <div class="container mt-5 mb-5 d-block mx-auto justify-content-center align-items-center">
        <div class="">

            <form action="{{route('tambahproduk')}}" method="POST" class="seller" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="form-holder">
                            <div class="form-content">
                                <div class="form-items">
                                    <h3>Add Product</h3>
                                    <p>Fill in the data below.</p>
                                    <form class="requires-validation" novalidate>

                                        <div class="col-md-12">
                                            <label class="form-label">Product Name</label>
                                            <input class="form-control" type="text" name="nama_produk" placeholder="Product Name" required>
                                            <div class="valid-feedback">Product Name field is valid!</div>
                                            <div class="invalid-feedback">Product Name field cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Description</label>
                                            <input class="form-control" type="text" name="detail_produk" placeholder="Decription Product" required>
                                            <div class="valid-feedback">Description field is valid!</div>
                                            <div class="invalid-feedback">Description field cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Price</label>
                                            <input class="form-control" type="number" name="harga_produk" placeholder="Price" required>
                                            <div class="valid-feedback">Price field is valid!</div>
                                            <div class="invalid-feedback">Price field cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Product Image</label>
                                            <input type="file" class="form-control" name="foto_produk">
                                            <small class="text-muted">Ukuran gambar : maks. 1 MB. Format gambar: JPEG, PNG</small>
                                            <div class="valid-feedback">Product Image field is valid!</div>
                                            <div class="invalid-feedback">Product Image field cannot be blank!</div>
                                        </div>

                                        <div class="form-button mt-3">
                                            <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</html>