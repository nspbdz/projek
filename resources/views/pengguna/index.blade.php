@extends('layouts.index')
@section('content')
@php
$ar_judul = ['Nama','Asal','Foto','Action'];

$no = 1;
@endphp

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Data pengguna </li>
	</ol>
</nav>
<div class="p-3 mb-2 bg-primary text-white text-center">Data pengguna </div>
<br />
<div class="container-fluid">
	<div class="row">

		<div class="col-md-2">

		
		 &nbsp;

		</div>

		<div class="col-md-10">
			
				<a href="{{ route('pengguna.create') }}">

						<i class="fa fa-plus-square alt fa-4x" aria-hidden="true"></i>
					
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
						<h6 class="m-0 font-weight-bold text-primary">Data pengguna</h6>
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
									@foreach ($data as $pengguna)
									<tr>
										{{-- ganti tabel yang diinginkan --}}
									{{-- ganti tabel yang diinginkan --}}
			{{-- <td>{{ $pengguna->id }}</td> --}}
			<td>{{ $pengguna->nama }}</td>
			{{-- <td>{{ $pengguna->jenis_pengguna }}</td> --}}
			<td>{{ $pengguna->asal }}</td>
			{{-- <td>{{ $pengguna->hp }}</td> --}}
			{{-- <td>{{ $pengguna->email }}</td> --}}
			<td><img src="img/{{ $pengguna->foto }}" 
				width="10px"/></td>
		   
										<td>
											   <form action="{{ route('pengguna.destroy',$pengguna->id) }}" 
													   method="POST">
										   <a class="btn btn-link btn-sm" 
											  href="{{ route('pengguna.show',$pengguna->id)}}">
											   <i class="fa fa-eye fa-2x" aria-hidden="true" ></i>
										   </a>
										   
										   <a class="btn btn-link btn-sm" 
											  href="{{ route('pengguna.edit',$pengguna->id)}}">
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
{{-- 
@extends('layouts.index') 
@section('content')
@php
$ar_judul = ['Id','Nama','User','Asal','HP','Email','Action'];
@endphp

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
	  <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
	</ol>
  </nav>
	<div class="p-3 mb-2 bg-primary text-white text-center">Data Pengguna</div>
	<br/>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-3">
		
		

					<a href="{{ route('pengguna.create') }}">
				
				<button type="button" class="btn btn-primary">Menambahkan Pengguna</button>
			

			</div>
			
		<div class="col-md-9">

	
 
<table class="table table-primary" border="1">
	<thead class="table-dark">
		<tr>
		@foreach ($ar_judul as $jdl)		
			<th>{{ $jdl }}</th>
		@endforeach		
		</tr>	
	</thead>
	<tbody>
	@foreach ($data as $pengguna)	
		<tr> --}}
			{{-- ganti tabel yang diinginkan --}}
			{{-- <td>{{ $pengguna->id }}</td>
			<td>{{ $pengguna->nama }}</td>
			<td>{{ $pengguna->jenis_pengguna }}</td>
			<td>{{ $pengguna->asal }}</td>
			<td>{{ $pengguna->hp }}</td>
			<td>{{ $pengguna->email }}</td> --}}
			<!-- {{--<td class="table-primary">{{ $pengguna->foto }}</td>--}} -->
			{{-- <td> <img src="img/{{ $pengguna->foto }}" 
				 width="100%" padding="auto"/></td> --}}
			{{-- <td>
				 <form action="{{ route('pengguna.destroy',$pengguna->id) }}" 
						method="POST">
			<a class="btn btn-link btn-sm" 
			   href="{{ route('pengguna.show',$pengguna->id)}}">
					 <i class="fa fa-eye fa-2x" aria-hidden="true" ></i>
                     &nbsp;

			</a>
			
			
			<a class="btn btn-link btn-sm" 
			   href="{{ route('pengguna.edit',$pengguna->id)}}">
			<i class="fa fa-edit alt fa-2x" aria-hidden="true" ></i>
			</a>
			
			
			@csrf
			  @method('DELETE')	
			<button type="submit" class="btn btn-link btn-sm" 
			onclick="return confirm('Yakin diHapus?')">
			<i class="fa fa-trash fa-2x" aria-hidden="true" ></i>
			</button>
			</form>	
		</div>
	  </div>
			</td>
		</tr>
	@endforeach		
	</tbody>
</table>
</div>
</div>
</div>
@endsection --}}
