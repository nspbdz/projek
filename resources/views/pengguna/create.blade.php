@extends('layouts.index')
@section('content')
@php
$rs = App\jenis::all();
@endphp
<div class="p-3 mb-2 bg-primary text-white text-center">Silahkan Menambahkan Pengguna</div>
<br>
 	<form role="form" method="POST" action="{{ route('pengguna.store') }}"
	  enctype="multipart/form-data">
		@csrf	
	<div class="container">
		<div class="row">

        <div class="col-md-6">
            
               
                <div class="form-group">
                      
                        <br><br>
                        <input type="text"  placeholder="Nama Pengguna "
                        class="form-control @error('namas') is-invalid @enderror" 
                        name="namas" value="{{ old('nama') }}" />
                        @error('namas')
                            <div class="invalid-feedback">
                                {{ $message }}	
                            </div>
                        @enderror	   
                    </div>
                    <div class="form-group">
                     
                        <br><br>
                        <input type="text"  placeholder="Asal Pengguna "
                        class="form-control @error('asal') is-invalid @enderror" 
                        name="asal" value="{{ old('asal') }}" />
                        @error('asal')
                            <div class="invalid-feedback">
                                {{ $message }}	
                            </div>
                        @enderror	   
                    </div>
                    
                    {{-- <div class="form-group">
                        <div class="form-group">
                            <label>
                                    <ul class="nav nav-pills">
                                            <li class="nav-item">
                                              <a class="nav-link active" > Jenis Pengguna</a>
                                              <br>
                                            </li>
                            </label>
                            <br><br>
                            <input type="text"  placeholder=" "
                            class="form-control @error('penggunas') is-invalid @enderror" 
                            name="penggunas" value="{{ old('jenis_pengguna') }}" />
                            @error('penggunas')
                                <div class="invalid-feedback">
                                    {{ $message }}	
                                </div>
                            @enderror	   
                        </div>
                     </div> --}}
                     {{-- <div class="form-group">
                        <label>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                  <a class="nav-link active" >Pilih Donatur</a> <br><br>
                                </li>
                        </label>
                        <br>
                      </br>
                              <select name="donaturss" class="form-control">
                            <option value="">-- Pilih Jenis Pengguna -- </option>
              
                            <option value="Admin">External</option>
                            <option value="Internal">Internal</option>
                          </select>
                        </div> --}}
                     <div class="form-group">
                        <div class="form-group">
                          
                            <br><br>
                            <input type="text"  placeholder="Email Pengguna"
                            class="form-control @error('email') is-invalid @enderror" 
                            name="email" value="{{ old('email') }}" />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}	
                                </div>
                            @enderror	   
                        </div>
                     </div>
                    
                     {{-- pembatas --}}
                    </div>
                    <div class="col-md-6">


                     <div class="form-group">
                        <div class="form-group">
                           
                            <br><br>
                            <input type="text"  placeholder="No HP Pengguna"
                            class="form-control @error('hp') is-invalid @enderror" 
                            name="hp" value="{{ old('hp') }}" />
                            @error('hp')
                                <div class="invalid-feedback">
                                    {{ $message }}	
                                </div>
                            @enderror	   
                        </div>
                        <div class="form-group">
                           
                            <br>
                          </br>
                          <input type="file"  class="form-control" name="foto"
                                 value="" />
                        </div>
                    
                     <br>
                     
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

