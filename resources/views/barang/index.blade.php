 @extends('layouts.index')
 @section('content')
 @php
 $ar_judul = ['No','Pengguna','Nama','Jenis','Tgl
 masuk','Action'];
 $no = 1;
 @endphp

 <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Data Seluruh Barang</li>
     </ol>
 </nav>
 <div class="p-3 mb-2 bg-primary text-white text-center">Data Seluruh Barang</div>
 <br />
 <div class="container-fluid">
     <div class="row">

         <div class="col-md-2">
{{-- 
             <a href="{{ route('barang.create') }}">

                    <i class="fa fa-plus-square alt fa-4x" aria-hidden="true"></i>
                
             </a> 
             <br>
             <br>
             <a href="{{ url('excelinbarang') }}">
                 <i class="fa fa-file-excel alt fa-4x" aria-hidden="true"></i>

             </a>
             <br>
             <br>

             <a class="btn btn-link btn-sm" 
             href="{{ url('pdfinbarang')}}">
                 <i class="fa fa-file-pdf alt fa-5x" aria-hidden="true"></i> --}}
                 {{-- <i class="fa fa-edit alt fa-2x" aria-hidden="true" ></i>
          </a> --}}




{{-- 
             <a href="{{ url('pdfinbarang') }}">
                 <button type="button" class="btn btn-primary">PDF</button>
                 <i class="fa fa-file-pdf-o" aria-hidden="true">pdf</i>
             </a> --}}

         </div>

         <div class="col-md-10">
             <div class="container-fluid">
@if (Auth::user()->role !='santri')
                    
                <a href="{{ route('barang.create') }}">

                            <i class="fa fa-plus-square alt fa-4x" aria-hidden="true"></i>
                        
                     </a>
@endif

                     &nbsp;
                     <a href="{{ url('excelinbarang') }}">
                         <i class="fa fa-file-excel alt fa-4x" aria-hidden="true"></i>
        
                     </a>
                     &nbsp;
        
                     <a 
                     href="{{ url('pdfinbarang')}}">
                         <i class="fa fa-file-pdf alt fa-4x" aria-hidden="true"></i>
                         {{-- <i class="fa fa-edit alt fa-2x" aria-hidden="true" ></i> --}}
                  </a>
                  <br> <br>
                 <!-- Page Heading -->
                 {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                 <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For
                     more
                     information about DataTables, please visit the <a target="_blank"
                         href="https://datatables.net">official
                         DataTables documentation</a>.</p> --}}

                 <!-- DataTales Example -->
                 <div class="card shadow mb-4">
                     <div class="card-header py-3">
                         <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                     </div>
                     <div class="card-body">
                         <div class="table-responsive">
                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 <thead class="table-dark">
                                     <tr>
                                     <tr>
                                         @foreach ($ar_judul as $jdl)
                                         <th>{{ $jdl }}</th>
                                         @endforeach

                                     </tr>
                                 </thead>
                                 {{-- <tfoot>
                                     <tr>
                                     <tr>
                                         @foreach ($ar_judul as $jdl)
                                         <th>{{ $jdl }}</th>
                                         @endforeach
                                     </tr>
                                 </tfoot> --}}
                                 <tbody>
                                     @foreach ($data as $barang)
                                     <tr>
                                         {{-- ganti tabel yang diinginkan --}}
                                         <td>{{ $no++ }}</td>
                                         {{-- <td>{{ $barang->id }}</td> --}}
                                         <td>{{ $barang->namaPengguna }}</td>
                                         <td>{{ $barang->nama_barang }}</td>
                                         {{-- <td>{{ $barang->donatur }}</td> --}}
                                         <td>{{ $barang->kategori }}</td>
                                         {{-- <td>{{ $barang->namaLokasi }}</td> --}}
                                         {{-- <td>{{ $barang->stok }}</td> --}}
                                         {{-- <td>{{ $barang->kondisi }}</td> --}}
                                         {{-- <td>{{ $barang->status }}</td> --}}
                                         <td>{{ $barang->tglmasuk }}</td>
                                         {{-- <td width="10%"><img src="img/{{ $barang->foto }}" width="100%" /></td> --}}
                                         <td>
                                                <form action="{{ route('barang.destroy',$barang->id) }}" 
                                                        method="POST">
                                            <a class="btn btn-link btn-sm" 
                                               href="{{ route('barang.show',$barang->id)}}">
                                                <i class="fa fa-eye fa-2x" aria-hidden="true" ></i>
                                            </a>
                                            
                                            <a class="btn btn-link btn-sm" 
                                               href="{{ route('barang.edit',$barang->id)}}">
                                            {{-- <i class="fa-pencil-square-o" aria-hidden="true" ></i> --}}
                                            <i class="fa fa-edit alt fa-2x" aria-hidden="true" ></i>
                                            </a>
                                            
                                            @csrf
                                              @method('DELETE')	
                                            <button type="submit" class="btn btn-link btn-sm" 
                                            onclick="return confirm('Yakin diHapus?')">
                                            <i class="fa fa-trash fa-2x" aria-hidden="true" ></i>
                                            </button>
                                            </form>	
                                             @endforeach
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>

             </div>
             <!-- /.container-fluid -->

         </div>
         <!-- End of Main Content -->

     </div>
     <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="login.html">Logout</a>
             </div>
         </div>
     </div>
 </div>
 </div>
 </div>
 </div>
 @endsection
