@extends('layouts.index')
@section('content')
@foreach($data as $d) 

<div class="p-3 mb-2 bg-primary text-white text-center">Detail Barang</div><br>

<div class="row">
		<div class="col-md-2">
		</div>
	<div class="col-md-3">
		
		<div class="jumbotron">
			<center>
			@if(!empty($d->foto))
			<figure class="figure">
					<img src="{{asset('img')}}/{{ $d->foto }}" class="figure-img img-fluid rounded" alt="...">
					</figure>
			{{-- <img src="{{asset('img')}}/{{ $d->foto }}" 
				 width="400px" class="img-thumbnail" /> --}}
		@else
			<i class="fa fa-user-o fa-5x" aria-hidden="true"></i>
			<br/>Foto Belum Diupload
		@endif
	</div>

</div>
<div class="col-md-6">
<table border="1" >
    <tr>      <td>  Id pengguna :</td> <td>    {{ $d->id }}</td></tr>
     <tr><td>Nama pengguna : </td> <td> {{ $d->nama }}</td></tr> 
     <tr><td>Jenis pengguna : </td>  <td>    {{ $d->jenis_pengguna }}  </td></tr> 
     <tr><td>Asal pengguna : </td>   <td>    {{ $d->asal }}  </td></tr> 
     <tr><td>HP pengguna : </td>     <td>    
            {{ $d->hp }}   </td></tr> 
     <tr><td>Email pengguna : </td>  <td>     
            {{ $d->email }}  </td></tr> 
      {{-- <td>   Jenis pengguna    </td>
     
     

      
      <td>  
            Asal pengguna   </td>
      <td>  
      HP pengguna
    </td>
    <td>    Email pengguna  </td> --}}
</table>
{{-- <ul class="list-group">
        Id pengguna 
        
        {{ $d->id }}
      Nama pengguna 
      
      {{ $d->nama }}
      Jenis pengguna 
      
      {{ $d->jenis_pengguna }}
      Asal pengguna 
      
      {{ $d->asal }}
      Email pengguna 
      
      {{ $d->email }} --}}
{{--         
<ul class="list-group">
        <li class="list-group-item">  Id pengguna : {{ $d->id }}</li>
        <li class="list-group-item">Nama pengguna : {{ $d->nama }}</li>
        <li class="list-group-item">Jenis pengguna : {{ $d->jenis_pengguna }}</li>
        <li class="list-group-item">Asal pengguna : {{ $d->asal }}</li>
        <li class="list-group-item">Email pengguna : {{ $d->email }}</li> --}}
	
		@endforeach
</div>

	{{-- <div class="col-md-3">
		</div> --}}

	</div>
		</div>

</div>
@endsection
