@extends('layouts.index')
 @section('content')
 
 <div class="shadow-lg p-3 mb-5 bg-white rounded">Cara Penggunaan</div> <br> 
<div class="p-3 mb-2 bg-primary text-white text-center"> Cara menggunakan Aplikasi</div>
<br>
<br>

<div class="container-fluid">
    <div class="row">
<div class="col-md-2">

</div>

<div class="col-md-8">

    {{-- <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li> --}}
    <ul class="nav nav-tabs justify-content-center">
        <li class="active"><a data-toggle="tab" href="#home">Jenis </a></li>
        <li><a data-toggle="tab" href="#menu1"> Lokasi </a></li>
        <li><a data-toggle="tab" href="#menu3"> Pengguna </a></li>
        <li><a data-toggle="tab" href="#menu2"> Barang </a></li>
      </ul>
      
      
     

      <div class="tab-content justify-content-center">
        <div id="home" class="tab-pane fadeIn active">
            <div class="card mb-3" style="max-width: 540;">
                <div class="row no-gutters">
                  <div class="col-md-8">
                    <img src="img/jenis.png" class="card-img" alt="...">
                  </div>
                  <div class="col-md-4">
                    <div class="card-body">
                      <h5 class="card-title">Input Jenis</h5>
                      <p class="card-text">Masukanlah Jenis Barang Yang Sesuai Di Pondok Pesantren Tahfidz Preneur</p>
                    <p class="card-text"><small class="text-muted"><a href="{{url('jenis/create') }}">Masukan Jenis Barang</a></small></p>
                    </div>
                  </div>
                </div>
              </div>

                  
          {{-- <h3>HOME</h3>
          <p>Some content.</p>
           --}}
           
        </div>







        <div id="menu1" class="tab-pane fade">
          <div class="card mb-3" style="max-width: 540;">
              <div class="row no-gutters">
                <div class="col-md-8">
                  <img src="img/lokasui.png" class="card-img" alt="...">
                </div>
                <div class="col-md-4">
                  <div class="card-body">
                    <h5 class="card-title">Input Lokasi</h5>
                    <p class="card-text">Masukanlah Lokasi Barang Yang Sesuai Di Pondok Pesantren Tahfidz Preneur</p>
                  <p class="card-text"><small class="text-muted"><a href="{{url('lokasi/create') }}">Masukan Lokasi Barang</a></small></p>
                  </div>
                </div>
              </div>
            </div>
                </div> 
                <div id="menu3" class="tab-pane fade">
                  <div class="card mb-3" style="max-width: 540;">
                      <div class="row no-gutters">
                        <div class="col-md-8">
                          <img src="img/pengguna.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-4">
                          <div class="card-body">
                            <h5 class="card-title">Pengguna</h5>
                            <p class="card-text">Masukanlah Pengguna/Admin Yang Sesuai Di Pondok Pesantren Tahfidz Preneur</p>
                          <p class="card-text"><small class="text-muted"><a href="{{url('pengguna/create') }}">Masukan Pengguna</a></small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                        </div>

        {{-- <div id="menu3" class="tab-pane fade">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-8">
                    <img src="img/pengguna.png" class="card-img" alt="...">
                  </div>
                  <div class="col-md-4">
                    <div class="card-body">
                      <h5 class="card-title">Pengguna</h5>
                      <p class="card-text">Masukanlah Pengguna/Admin Yang Sesuai Di Pondok Pesantren Tahfidz Preneur</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
        
        </div> --}}

        
        <div id="menu2" class="tab-pane fade">
            <div class="card mb-3" style="max-width: 540;">
                <div class="row no-gutters">
                  <div class="col-md-8">
                    <img src="img/barangai.png" class="card-img" alt="...">
                  </div>
                  <div class="col-md-4">
                    <div class="card-body">
                      <h5 class="card-title">Input Lokasi</h5>
                      <p class="card-text">Masukanlah  Barang Yang Sesuai Di Pondok Pesantren Tahfidz Preneur</p>
                    <p class="card-text"><small class="text-muted"><a href="{{url('barang/create') }}">Masukan  Barang</a></small></p>
                    </div>
                  </div>
                </div>
              </div>
        
        </div>
      
      </div>
    </div>
  </div>




  </div>
</div>
</div>
  
 @endsection
