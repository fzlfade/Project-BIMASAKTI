
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <title>Profile Toko</title>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    <x-navbar-profile>
    </x-navbar-profile>
    <h1>
        PROFIL TOKO
    </h1>
<div class="text-center profile-card" style="margin:15px;background-color:#ffffff;">
        <div class="profile-card-img" style="background-image:url(&quot;iceland.jpg&quot;);height:150px;background-size:cover;"></div>
        <div><img class="rounded-circle" style="margin-top:-70px;" src="assets/img/avatar-dhg.png" height="150px">
            <h3>Toko apayah</h3>
        </div>
    </div>
    <section class="photo-gallery py-4 py-xl-5">
        <div class="container">
            <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="">
                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><p style="margin-right: -1px;padding-right: 175px;" >Produk 1</p></a><button>Delete Produk</button></div>
                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a><p style="margin-right: -1px;padding-right: 175px;">Produk 2</p></div>
                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a><p style="margin-right: -1px;padding-right: 175px;">Produk 3</p></div>
                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a><p style="margin-right: -1px;padding-right: 175px;">Produk 4</p></div>
                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a><p style="margin-right: -1px;padding-right: 175px;">Produk 5</p></div>
                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a><p style="margin-right: -1px;padding-right: 175px;">Produk 6</p></div>
            </div>
        </div>
</body>

</html>