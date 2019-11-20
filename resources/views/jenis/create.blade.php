@extends('layouts.index')
@section('content')
@php
$rs = App\jenis::all();
@endphp
<div class="p-3 mb-2 bg-primary text-white text-center">Silahkan Menambahkan Jenis Barang</div>
<br>
 	<form role="form" method="POST" action="{{ route('jenis.store') }}"
	  enctype="multipart/form-data">
		@csrf	
	<div class="container">
		<div class="row">
		  <div class="col">
            
               
                <div class="form-group">
                       
                        <br><br>
                        <input type="text" placeholder="Jenis Barang" 
                        class="form-control @error('namas') is-invalid @enderror" 
                        name="namas" value="{{ old('namas') }}" />
                        @error('namas')
                            <div class="invalid-feedback">
                                {{ $message }}	
                            </div>
                        @enderror	   
                    </div>

                    <button type="submit" class="btn btn-primary" 
                    name="proses" value="simpan">Simpan</button>
                   
                   <button type="reset" class="btn btn-danger" 
                    name="unproses" value="batal">Batal</button>


		  {{-- pembatas --}}
		</div>
		  <div class="col">
		  {{-- pembatas --}}
			


            
	

	
		  </div>
	</div>
</div>

	</form>
@endsection

