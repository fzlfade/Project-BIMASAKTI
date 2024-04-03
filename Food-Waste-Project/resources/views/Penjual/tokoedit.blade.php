<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])    
    <title>Profil Edit Toko</title>
</head>

<body style="background-color: #ffffff ;">
    <!-- navbar   -->
    <x-navbar-profile>
    </x-navbar-profile>
    <div class="container">
        <h1>Edit Profile Toko   </h1>
        <div class="card">
        <form action="{{route('editprofile')}}" method="post" enctype="multipart/form-data " class="row g-3">
            @csrf
            @method('PUT')
            <div class="px-3 py-2">
            <img src="{{ url('foto').'/'.$data->foto_profil_toko }}" class="rounded float-start" alt="...">
                <div class="row-auto">
                    <label for="" class="visually-hidden">Nama</label>
                    <h2><input type="text" readonly class="form-control-plaintext" name="nama_toko" value="{{$data->nama_toko}}"></h2>
                </div>
                <div class="row-auto">
                    <label for="" class="">Alamat</label>
                    <input type="text" class="form-control" name="alamat_toko" value="{{$data->alamat_toko}}" placeholder="Alamat">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto Toko / Logo</label>
                    <input class="form-control" type="file" name="foto_profil_toko">
                    <small class="text-muted">Ukuran gambar : maks. 1 MB. Format gambar: JPEG, PNG</small>
                </div>
                <div class="row-auto">
                    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                </div>

            </div>
        </div>
        </form>
            
    
</body>
<!-- footer -->
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>