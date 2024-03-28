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
                    <img class="rounded-circle mt-5" style="width: 150px; height: 150px; object-fit: cover;" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">Nama toko</span>
                    <span class="text-black-50">Email Toko</span>
                    <span class="text-black-50">Alamat Toko</span>
                    <span> </span>
                </div>
            </div>
            
            <form action="{{route('tokoedit.save')}}" method="POST" class="seller">
                
                <div class="col-md-5 border-right" style="background-color: #00ffd1;">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Edit Toko Settings</h4>

                            <div class="row mt-4">
                            <div class="col-md-12"><label class="labels">user id Toko</label><input type="text" class="form-control" placeholder="Enter Address " id="alamat_toko" required></div>
                        </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Nama Toko</label><input type="text" class="form-control" placeholder="Enter Restaurant Name" id="nama_toko" required></div>
                        
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12"><label class="labels">Alamat Toko</label><input type="text" class="form-control" placeholder="Enter Address " id="alamat_toko" required></div>
                          
                        </div>
                        <div class="col-md-15">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar">
                            <small class="text-muted">Ukuran gambar: maks. 1 MB. Format gambar: JPEG, PNG</small>
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