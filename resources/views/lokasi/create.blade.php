@extends('layouts.index')
@section('content')
@php
$rs = App\jenis::all();
@endphp
<div class="p-3 mb-2 bg-primary text-white text-center">Silahkan Menambahkan Lokasi Barang</div>
<br>
<form role="form" method="POST" action="{{ route('lokasi.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="container">
    <div class="row">
      <div class="col">


        <div class="form-group">
          
          <br><br>
          <input type="text" placeholder="Lokasi Barang" class="form-control  @error('namal') is-invalid @enderror" name="namal"
            value="{{ old('nama') }}" />
          @error('namal')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary" name="proses" value="simpan">Simpan</button>

        <button type="reset" class="btn btn-danger" name="unproses" value="batal">Batal</button>


        {{-- pembatas --}}
      </div>
      <div class="col">
        {{-- pembatas --}}







      </div>
    </div>
  </div>

</form>
@endsection