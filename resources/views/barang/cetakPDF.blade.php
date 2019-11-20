@php	
$ar_judul = ['no','pengguna','Nama barang','donatur','jenis','lokasi'];

$no = 1;
@endphp

<h3>Data Barang</h3>
<table align="center" border="1" cellpadding="10" cellspacing="0" width="80%">
	<thead>
		<tr bgcolor="blue">
		@foreach($ar_judul as $jdl)
			<th>{{ $jdl }}</th>
		@endforeach
		</tr>
	</thead>
	<tbody>
@foreach($ar_barang as $s)
	@php
			$warna = ($no % 2 == 0)? "yellow":"white";
	@endphp
		<tr bgcolor="{{ $warna }}">
			<td>{{ $no++}}</td>
			<td>{{ $s->namaPengguna}}</td>
			<td>{{ $s->nama_barang}}</td>
			<td>{{ $s->donatur}}</td>
			<td>{{ $s->kategori}}</td>
			<td>{{ $s->namaLokasi}}</td>
			{{-- <td width="10%"><img src="img/{{ $s->foto }}" width="100%" /></td> --}}
			{{-- <td>{{ $s->foto}}</td> --}}


			
		</tr>
@endforeach
	</tbody>
</table>