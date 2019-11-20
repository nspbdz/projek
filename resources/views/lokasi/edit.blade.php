@extends('layouts.index')
@section('content')
@php

@endphp

@foreach ($data as $d)

<div class="p-3 mb-2 bg-primary text-white text-center">Silahkan Menambahkan Barang</div>
<br>
<form role="form" method="POST" action="{{ route('lokasi.update',$d->id) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')



  <div class="container">
    <div class="row">
      <div class="col">




        <div class="form-group">
          <label>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link active">Donatur Baru</a>
              </li> 
              <br></br>
          </label>
          <input type="text" class="form-control" name="namax"
            value="{{$d ->nama}}" />
        
        </div>






        <button type="submit" class="btn btn-primary" name="proses" value="simpan">Simpan</button>

        <button type="reset" class="btn btn-info" name="unproses" value="batal">Batal</button>







      </div>
      <div class="col">



</form>
@endforeach
</div>
</div>
</div>
@endsection