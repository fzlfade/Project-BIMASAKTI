<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])    <title>Profil Edit Toko</title>

    <x-navbar-profile>
    </x-navbar-profile>
</head>


<body style="background-color: #ffffff ;">
    <!-- navbar   -->

    <div class="container rounded mt-5 mb-5" style="background-color: #ffefde;">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" style="width: 150px; height: 150px; object-fit: cover;" src="{{ url('foto').'/'.$data->foto_profil_toko }}">
                    <span class="font-weight-bold" >Pemilik Toko : {{ Auth::user()->name }}</span>
                    <span class="font-weight-bold">Nama toko : {{$data->nama_toko}}</span>
                    <span class="font-weight-bold" >Email Toko :{{ Auth::user()->email}}</span>
                    <span class="font-weight-bold">Alamat Toko :{{$data->alamat_toko}} </span>
                    <span> </span>
                </div>
            </div>
            
            <form action="{{route('editprofile')}}" method="POST" class="seller"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-5 border-right" style="background-color: #00ffd1;">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Upload Produk</h4>

                            <div class="row mt-4">
                            <!-- <div class="col-md-12"><label class="labels">user id Toko</label><input type="text" class="form-control" placeholder="Enter Address " id="alamat_toko" required></div> -->
                        </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_toko"  value="" disabled>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label class="labels">Detail Produk Toko</label>
                                <input type="text" class="form-control" name="alamat_toko"  value="">
                            </div>
                        </div>
                        <div class="col-md-15">
                            <label class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" name="">
                            <small class="text-muted">Ukuran gambar : maks. 1 MB. Format gambar: JPEG, PNG</small>
                        </div>
                        <div class="mt-md-1 text-center"><button class="btn btn-primary profile-button" type="submit" >Save Profile</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
</body>
<!-- footer -->
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>