@extends('layouts.main')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Kontak Pembuat</li>
  </ol>
</nav>

<div class="p-3 mb-2 bg-primary text-white text-center"><h1>Tim Developer Yang Luar Biasa</h1></div><br><br>
{{----------CARD DATA---------}}
<div class="card-group" id="card-group">
  <div class="card">
    <img src="{{ url('img') }}/alm.jpg" height="25%" class="rounded-circle"  alt="Responsive image">
    <div class="card-body">
      <h5>Mohamad Alfian Ramadhan</h5>
      <p align="center">
        {{-- Linkedin:https://www.linkedin.com/in/mohamad-alfian-ramadhan-23b875175
        GitHub:https://github.com/nspbdz
        Twitter:https://twitter.com/ardelle_alfians
         Facebook: https://www.facebook.com/nspbdz
        Instagram:https://www.instagram.com/alfian_gates/ --}}
        <h1>Leader Team Web Developer </h1>
      </p>
      <ul class="ftco-footer-social list-unstyled mt-2">
        <li class="ftco-animate fadeInUp ftco-animated">
          <a class="rounded-pill" href="#">
            <span><img src="https://img.icons8.com/nolan/50/000000/github.png">https://github.com/nspbdz</span>
          </a> 
        </li>
        <li>
          <a class="rounded-pill" href="#">
            <span><img src="https://img.icons8.com/nolan/50/000000/facebook-new.png">https://www.facebook.com/nspbdz</span>
          </a> 
        </li>
        <li>
          <a class="rounded-pill" href="#">
            <span><img src="https://img.icons8.com/nolan/50/000000/linkedin.png"> https://www.linkedin.com/in/mohamad-alfian-ramadhan-23b875175</span>
          </a> 
        </li>
      </ul>

    </div>

    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
      <img src="img/.jpg" height="25%"  class="rounded-circle"  alt="Responsive image">
    <div class="card-body">
      <h5 class="card-title">Yuslam Fath Amrillah</h5>
        <h1>Web Developer </h1>
        <p class="card-text"></p>
        <ul class="ftco-footer-social list-unstyled mt-2">
            <li class="ftco-animate fadeInUp ftco-animated">
              <a class="rounded-pill" href="#">
                <span><img src="https://img.icons8.com/nolan/50/000000/github.png">https://github.com/nspbdz</span>
              </a> 
            </li>
            <li>
              <a class="rounded-pill" href="#">
                <span><img src="https://img.icons8.com/nolan/50/000000/facebook-new.png">https://www.facebook.com/nspbdz</span>
              </a> 
            </li>
            <li>
              <a class="rounded-pill" href="#">
                <span><img src="https://img.icons8.com/nolan/50/000000/linkedin.png"> https://www.linkedin.com/in/mohamad-alfian-ramadhan-23b875175</span>
              </a> 
            </li>
          </ul>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="img/iqbar.jpg" height="25%"  class="rounded-circle"  alt="Responsive image">
    <div class="card-body">
      <h5 class="card-title">Muhammad Iqbal</h5>
      <p class="card-text">        <h1>Web Developer </h1>
      </p>
      <ul class="ftco-footer-social list-unstyled mt-2">
          <li class="ftco-animate fadeInUp ftco-animated">
            <a class="rounded-pill" href="#">
              <span><img src="https://img.icons8.com/nolan/50/000000/github.png">https://github.com/nspbdz</span>
            </a> 
          </li>
          <li>
            <a class="rounded-pill" href="#">
              <span><img src="https://img.icons8.com/nolan/50/000000/facebook-new.png">https://www.facebook.com/nspbdz</span>
            </a> 
          </li>
          <li>
            <a class="rounded-pill" href="#">
              <span><img src="https://img.icons8.com/nolan/50/000000/linkedin.png"> https://www.linkedin.com/in/mohamad-alfian-ramadhan-23b875175</span>
            </a> 
          </li>
        </ul>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
      
    </div>
  </div>
</div>

@endsection