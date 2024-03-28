<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVFQWjT+T0qfrbM+BzxQvThuokKF/+DSuIcOPu/dTPy7yGtT++WLv" crossorigin="anonymous"></script>
        @vite(['resources/css/app.scss', 'resources/js/app.js'])  
    </head>
    <body style="background-color:#f884;">
        <x-navbar-profile> 
            
        </x-navbar-profile>
        
            <!-- Start: Articles Cards -->
            <div class="container py-4 py-xl-5">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2><img class="fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></h2>
                        <h2>Nama Toko</h2>
                        <p class="w-lg-50">Deskripsi Menu</p>
                    </div>
                </div>
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <div class="card-body p-4">
                                <p class="text-primary card-text mb-0">Article</p>
                                <p class="card-text"></p>
                                <h4 class="card-title">Lorem libero donec</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <div class="card-body p-4">
                                <p class="text-primary card-text mb-0">Article</p>
                                <h4 class="card-title">Lorem libero donec</h4>
                                <p class="card-text"></p>
                                <div class="d-flex">
                                    <div>
                                        <p class="fw-bold mb-0"></p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <div class="card-body p-4">
                                <p class="text-primary card-text mb-0">Article</p>
                                <h4 class="card-title">Lorem libero donec</h4>
                                <p class="card-text"></p>
                                <div class="d-flex">
                                    <div>
                                        <p class="fw-bold mb-0"></p>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End: Articles Cards -->
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

        
        

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>