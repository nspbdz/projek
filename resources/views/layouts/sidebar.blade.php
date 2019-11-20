  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
      <img src="{{asset('img/ybm.png')}}" width="120%" class=" rounded-" >
        </div>
        <div class="sidebar-brand-text mx-3"> INVENTARISKU <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      

      <!-- Divider -->
      
  
        <!-- Nav Item - Pages Collapse Menu -->
        <ul class="nav">
            <li class="nav-item">
                           
                            <a class="nav-link active" href="{{ url('home') }}"><i class="fa fa-home" aria-hidden="true"> &nbsp;</i>Home </a>            
                            {{-- <a class="nav-link active" href="{{ url('cara') }}"><i class="fa fa-step-forward" aria-hidden="true"> &nbsp;</i>Cara Penggunaan</a>               --}}
                            {{-- <a class="nav-link active" href="{{ url('barang') }}"><i class="fa fa-table" aria-hidden="true"></i>Data Semua Barang </a>               --}}
            </li>
          </ul>
      <hr class="sidebar-divider my-0">
        

      <!-- Heading -->
@if (Auth::user()->role !='santri')
   
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#q" aria-expanded="true" aria-controls="collapseTwo">
      
          <i class="fa fa-asterisk" aria-hidden="true"></i>
         Master Data
        </a>
     @endif

        <div id="q" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('jenis') }}">Jenis </a>
            <a class="collapse-item" href="{{url('lokasi') }}">Lokasi</a>
            @if(Auth::user()->role == 'administrator')
           

            <a class="collapse-item" href="{{url('pengguna') }}">Pengguna</a>
            {{-- <a class="collapse-item" href="{{url('barang') }}"> Barang</a> --}}
@endif
            
            
          </div>
        </div>
      </li>
@if (Auth::user()->role !='santri')

      <ul class="nav">
        <li class="nav-item">
                       
                        <a class="nav-link active" href="{{ url('barang') }}"><i class="fa fa-table" aria-hidden="true"> &nbsp; </i>Data Semua Barang </a>              
        </li>
      </ul>
      @endif
      <div class="sidebar-heading">
        
      </div>
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ww" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fa fa-building" aria-hidden="true">&nbsp;</i>
          Lokasi Data Barang
        </a>
     

        <div id="ww" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('asrama') }}">Asrama </a>
            <a class="collapse-item" href="{{url('kelas') }}">Kelas</a>
            <a class="collapse-item" href="{{url('kantor') }}"> Kantor</a>
            <a class="collapse-item" href="{{url('masjid') }}"> Masjid</a>
            <a class="collapse-item" href="{{url('toilet') }}"> Toilet  </a>
            <a class="collapse-item" href="{{url('gudang') }}"> Gudang  </a>
            
          </div>
        </div>
      </li>
      
      <div class="sidebar-heading">
        
      </div>
      <hr class="sidebar-divider my-0">
      <!-- Example split danger button -->

    {{-- <hr class="sidebar-divider my-0"> --}}

      <!-- Nav Item - Pages Collapse Menu -->
      <ul class="nav">
            <li class="nav-item">
                            <a class="nav-link active" href="{{url('pembuat') }}"> &nbsp;<i class="fa fa-info" aria-hidden="true"> &nbsp;</i>Tentang Aplikasi </a>    
                            {{-- <a class="nav-link active" href="{{url('kontak') }}"><i class="fa fa-phone" aria-hidden="true"></i>Kontak Kami </a> --}}
</li>
</ul>

        {{------------------------------------------------ COMENT---------------               
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#w" aria-expanded="true" aria-controls="collapseTwo">
           <i class="fa fa-building" aria-hidden="true"></i>
            <span>Tentang Kami</span>
          </a>
       
  
          <div id="w" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{url('pembuat') }}">Pembuat </a> 
              <a class="collapse-item" href="{{url('kelas') }}">ij</a>
              
            </div>
          </div>
        </li>
      


        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#k" aria-expanded="true" aria-controls="collapseTwo">
             <i class="fa fa-phone" aria-hidden="true"></i>
              <span>Contact Us</span>
            </a>
         
    
            <div id="k" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('kontak') }}">kontak pembuat </a>
                <a class="collapse-item" href="{{url('kontakt') }}">Kontak Tahfidz Preneur</a>
                
              </div>
            </div>
          </li>
          ------------------TUTUP COMENT-----------------------}}

 <div class="sidebar-heading">
        
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
     

      <!-- Nav Item - Utilities Collapse Menu -->
      

      <!-- Divider -->

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
     

      <!-- Nav Item - Charts -->
     
      <!-- Nav Item - Tables -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>