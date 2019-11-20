
@extends('layouts.main')

@section('content')

       <!-- Page Heading -->
       {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
         <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
       </div> --}}

       <!-- Content Row -->
       <div class="row">
        

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
           
           <div class="card border-left-primary shadow h-100 py-2">
             <div class="card-body">
               <div class="row no-gutters align-items-center">
                 <div class="col mr-2">
                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Semua Barang</div>
                 <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\barang::All()->count() }}</div>

                 </div>
                 <div class="col-auto">
                   <i class="fas fa-calendar fa-2x text-gray-300"></i>
                 </div>
               </div>
             </div>
           </div>


         </div>
         <div class="col-xl-3 col-md-6 mb-4">
           
           <div class="card border-left-dark shadow h-100 py-2">
             <div class="card-body">
               <div class="row no-gutters align-items-center">
                 <div class="col mr-2">
                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Jenis</div>
                 <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\jenis::All()->count() }}</div>

                 </div>
                 <div class="col-auto">
                   <i class="fas fa-calendar fa-2x text-gray-300"></i>
                 </div>
               </div>
             </div>
           </div>


         </div>
         <div class="col-xl-3 col-md-6 mb-4">
           
           <div class="card border-left-danger shadow h-100 py-2">
             <div class="card-body">
               <div class="row no-gutters align-items-center">
                 <div class="col mr-2">
                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Lokasi</div>
                 <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\lokasi::All()->count() }}</div>

                 </div>
                 <div class="col-auto">
                   <i class="fas fa-calendar fa-2x text-gray-300"></i>
                 </div>
               </div>
             </div>
           </div>


         </div>
         <div class="col-xl-3 col-md-6 mb-4">
           
           <div class="card border-left-warning shadow h-100 py-2">
             <div class="card-body">
               <div class="row no-gutters align-items-center">
                 <div class="col mr-2">
                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Pengguna</div>
                 <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\pengguna::All()->count() }}</div>

                 </div>
                 <div class="col-auto">
                   <i class="fas fa-calendar fa-2x text-gray-300"></i>
                 </div>
               </div>
             </div>
           </div>


         </div>


         <div class="col-12">
             <div class="card">
                 <div class="card-header">
                     Grafik Kategori Barang
                 </div>
                 <div class="card-body">
                     <div id="grafik"></div>
                 </div>
             </div>
         </div>
       </div>

    @endsection
    @php

$e=\App\jenis::All();
$bu = [];
$total=[];
foreach ($e as $s) {
$total[]= \App\barang::where('jenisid',$s->id)->count();
// $total=$ss->count();
$bu[] = $s->nama;
}
    @endphp
    @section('js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>

Highcharts.chart('grafik', {
 chart: {
     type: 'line'
 },
 title: {
     text: 'Total barang per Kategori'
 },
 subtitle: {
     text: 'Aplikasi Inventaris'
 },
 xAxis: {
     categories: {!! json_encode($bu) !!},
     crosshair: true
 },
 yAxis: {
     min: 0,
     title: {
         text: 'Total Barang'
     }
 },
 tooltip: {
     headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
     pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
         '<td style="padding:0"><b>{point.y:.f} </b></td></tr>',
     footerFormat: '</table>',
     shared: true,
     useHTML: true
 },
 plotOptions: {
     column: {
         pointPadding: 0.2,
         borderWidth: 0
     }
 },
 series: [{
     name: 'Total Barang ',
     data:  {!! json_encode($total) !!}

 }]
});

    </script>

    @endsection
