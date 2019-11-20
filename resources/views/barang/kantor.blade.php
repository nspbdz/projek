@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No',' Pengguna','Nama Barang','Jenis','Tanggal Masuk','Action'];
$no = 1;
@endphp

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Data Barang di Kantor</li>
	</ol>
</nav>
<div class="p-3 mb-2 bg-primary text-white text-center">Data Barang di Kantor</div>
<br />
<div class="container-fluid">
	<div class="row">

		<div class="col-md-2">

			{{-- <a href="{{ route('barang.create') }}">

				<button type="button" class="btn btn-primary"><i class="fa fa-excel" aria-hidden="true"></i>
					Menambahkan Barang</button>
			</a>
			<br>
			<br>
			<a href="{{ url('excelinbarang') }}">
				<button type="button" class="btn btn-primary">Excel</button>
			</a>
			<br>
			<br>
			<a href="{{ url('pdfinbarang') }}">
				<button type="button" class="btn btn-primary">PDF</button>
			</a> --}}

		</div>

		<div class="col-md-10">
			<div class="container-fluid">

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
										{{-- <td width="10%"><img src="img/{{ $barang->foto }}" width="100%" /></td> --}}
										<td>{{ $barang->namaPengguna }}</td>

										<td>{{ $barang->nama_barang }}</td>

										<td>{{ $barang->kategori }}</td>
										{{-- <td>{{ $barang->namaLokasi }}</td> --}}
										{{-- <td>{{ $barang->stok }}</td> --}}
										{{-- <td>{{ $barang->kondisi }}</td> --}}
										{{-- <td>{{ $barang->status }}</td> --}}
										<td>{{ $barang->tglmasuk }}</td>
										<td>
												{{-- <button type="button" class="btn btn-primary" href="{{ route('barang.show',$barang->id)}}">Primary</button> --}}
										{{-- <a class="btn btn-info badge-pill" style="width:70px; href="{{ route('barang.show',$barang->id)}}" role="button">detail</a>	    --}}
										   <a class="btn btn-link btn-sm" href="{{ route('barang.show',$barang->id)}}">  <i class="fa fa-eye fa-2x" aria-hidden="true" ></i>
										   </a>
										   
										 
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
