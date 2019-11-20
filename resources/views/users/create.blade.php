@extends('layouts.index')
@section('content')
@php

@endphp
<div class="p-3 mb-2 bg-primary text-white text-center">Silahkan Menambahkan Barang</div>
<br>
 	<form role="form" method="POST" action="{{ route('users.store') }}" 
	  enctype="multipart/form-data">
	 {{-- crud foto --}}
	  {{-- <form role="form" method="POST" action="{{ route('barang.store') }}"
	  enctype="multipart/form-data"> --}}
		@csrf	
	<div class="container">
		<div class="row">
		  <div class="col">
        <div class="col-md-6">

			
				
				
				<br><br>
				
				
					<div class="form-group">
							
						<input type="text" 
						class="form-control"  placeholder="Nama Users"
					name="name" value="" />
						
						
                    </div>
					<div class="form-group">

						<br>
						</br>
						<select name="role" class="form-control">
							<option value="">-- Pilih Role -- </option>
	
							<option value="administrator">administrator</option>
							<option value="ustadz">ustadz</option>
							<option value="santri">santri</option>
						</select>
					</div>
					<div class="form-group">
	
						<br>
						</br>
	
					</div>
					<div class="form-group">
							
						<input type="password" 
						class="form-control"  placeholder="password Users"
					name="password" value="" />
						
						
                    </div>
                   
		
		  {{-- pembatas --}}
		</div>
		  <div class="col">
          {{-- pembatas --}}
        <div class="col-md-6">
          			
				<br><br>


				<div class="form-group">
							
					<input type="text" 
					class="form-control"  placeholder="Email Users"
				name="email" value="" />
					
					
				</div>
				

				<div class="form-group">

						<input type="file" class="form-control" name="fotos" />
					</div>
					<br>
			
			
	
				
	
	
	
{{-- 
                <div class="form-group">
			
                        <br>
                    </br>
                    <input type="file" class="form-control" name="foto"
                           value="" /> 
                </div> --}}
	<br>
	<br>

	<button type="submit" class="btn btn-primary" 
	 name="proses" value="simpan">Simpan</button>
	
	<button type="reset" class="btn btn-danger" 
	 name="unproses" value="batal">Batal</button>
	</div>
	
	 
	</div>
        </div>
		</div>
	</div>
</div>
	</div>

	</form>
@endsection

