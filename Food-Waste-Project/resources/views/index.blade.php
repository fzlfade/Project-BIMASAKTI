@extends('components.layout')
@section('content')
        <!-- navbar-->
        <x-navbar>
        </x-navbar>
        <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Get food <span>cheaply</span> <br>and <span>tasty</span> with us</h1>
      </div>
    </div>
    <!-- akhir Jumbotron -->


    <!-- container -->
    <div class="container">

      <!-- info panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-sm">
              <img src="/img/landing/employee.png" alt="Employee" class="img-fluid float-left">
              <h4>24 Hours</h4>
              <p>Harga yang terjangkau dalam 1 hari</p>
            </div>
            <div class="col-lg">
              <img src="/img/landing/hires.png" alt="HiRes" class="img-fluid float-left">
              <h4>Safe-Food</h4>
              <p>Makanan yang berkualitas </p>
            </div>
            <div class="col-lg">
              <img src="/img/landing/security.png" alt="Security" class="img-fluid float-left">
              <h4>Security</h4>
              <p>Data pelanggan yang aman</p>
            </div>
          </div>
        </div>
      </div>

      <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p>"This noodle so frickin delicious."</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
            <img src="/img/landing/img1.png" alt="Testimonial 1">
            <img src="/img/landing/img2.png" alt="Testimonial 2" class="img-main">
            <img src="/img/landing/img3.png" alt="Testimonial 3">
          </div>
        </div>
        <div class="row justify-content-center info-text">
          <div class="col-lg text-center">
            <h5>Sunny Ye</h5>
            <p>Youtuber</p>
          </div>
        </div>
      </section>
@endsection