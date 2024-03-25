<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVFQWjT+T0qfrbM+BzxQvThuokKF/+DSuIcOPu/dTPy7yGtT++WLv" crossorigin="anonymous"></script>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])  
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    link rel=https://cdn.lineicons.com/4.0/lineicons.css rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:#f884;">
    <x-navbar-profile> 
        
    </x-navbar-profile>
    <section id="product">
        <div class="content">
        <h1 class="title">Daftar Toko</h1>
        </div>
        <div class="row-2">
        <div class="col-2">
            <img src="assets/img/sepatu/fores.jpg">
            <div class="bungkus"><span> Solaria</span>
            <p>Jl.Ahmad Yani No.1</p>
            <p>Rating</p>
        </div>
        </div>
        <div class="col-2">
            <img src="assets/img/baju/baju2.jpeg">
            <div class="bungkus"><span> KFC</span>
            <p>Jl.Soekarno Hatta</p>
            <p>Rating</p>
        </div>
        </div>
        <div class="col-2">
            <img src="assets/img/jaket/jaket14.jpeg">
            <div class="bungkus"><span> Ramen Ichiraku</span>
            <p>Jl.Gunung Subroto</p>
            <p>Rating</p>
        </div>
        </div>
        <div class="col-2">
            <img src="assets/img/topi/ls.jpg">
            <div class="bungkus"><span> Cafe Kenangan</span>
            <p>Jl. Raya</p>
            <p>Rating</p>
        </div>
        </div>
        <div class="col-2">
            <img src="assets/img/celana/sv.jpg">
            <div class="bungkus"><span>Angkringan</span>
            <p>Rindam Kostrad 3</p>
            <p>Rating</p>
        </div>
        </div>
        <div class="col-2">
            <img src="assets/img/jaket/jaket11.jpg">
            <div class="bungkus"><span> Roket</span>
            <p>Jl. Tentara Pelajar</p>
            <p>Rating</p>
        </div>
        </div>
            <div class="col-2">
                <img src="assets/img/sepatu/clasic.jpeg">
                <div class="bungkus"><span> Sopel </span>
                <p>Jl. Soekarno Hatta no 1</p>
                <p>Rating</p>
            </div>
            </div>
                <div class="col-2">
                    <img src="assets/img/baju/baju10.jpg">
                    <div class="bungkus"><span> Cafe Senopati</span>
                    <p>Jl. Ahmad Yani no 2</p>
                    <p>Rating</p>
                </div>
            </div>
        </div>
    </section>


    </section>
    <style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;  
    scroll-behavior: smooth;
}
body{
    text-transform: capitalize;
    font-family: Arial, Helvetica, sans-serif;

}
header{
    width: 90%;
height: 400px;
margin: 0 auto;
background-size: cover;
}
.title{
text-align: center;
font-size: 2em;
position:relative;
padding-bottom: 8px;
margin-bottom: 20px;
}
.title::after{
content: "";
position: absolute;
width: 80px;
height: 4px;
background-color: #f7d900;
bottom: 0;
left: 50%;
transform: translate(-50%);
}
.row{
    display:flex ;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;

}

.col::before{
content: "";
position: absolute;
width: 100%;
height: 100%;
top: 100%;
left: 0;

}
.col:hover::before{
    top:0;
    overflow: hidden;

}
.coll{
    position: relative;
    flex-basis: 50%;
    gap: 10px;
    margin-top:10px;
    height: 200px;
    background-size: cover;
    min-width: 200px; 
    overflow: hidden; 
}
.coll::before{
content: "";
position: absolute;
width: 100%;
height: 100%;
left: 0;
top: -100%;
transition: 0.5s ease;


}
.coll:hover::before{
    top: 0;

}
/* content product */
.content{
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px; 
}

.row-2{
    display:flex ;
    align-items: center;
    flex-wrap: wrap;
    justify-content: center;
}
.col-2{
    flex-basis: 20%;
     /* position: relative; */
    gap: 10px;
    height: 310px;
    margin:6px;
    border-radius: 10px;
    min-width: 200px;  
    padding: 0;
    margin-bottom:20px;
    background: #f884;
    box-shadow:0 0 5px black;
    overflow: hidden;

}
.col-2 img{
    width: 100%;
    height: 200px;
    border-radius: 10px 10px 0 0 ;
    transition: 0.5s ease;
}
.col-2 img:hover{
    transform:scale(1.1) ;
}
.bungkus{
    width: 100%;
    padding:15px 10px;
    height: 120px;
    border-top: 5px solid #f7d900;
    background-color: #2f2f2f;
    border-radius: 0 0 10px 10px;
}
.col-2 span{

    font-size: 20px;
    font-weight: 800;
    color: white;
    text-shadow: 1px 2px 2px black;
}.col-2 p{

    font-size: 12px;
    color:red;
}


    </style>


</body>
</html>