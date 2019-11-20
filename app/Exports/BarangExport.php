<?php

namespace App\Exports;

use App\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class BarangExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $ar_barang = DB::table('barang')
        ->join('jenis', 'jenis.id', '=', 'barang.jenisid')
        ->join('lokasi', 'lokasi.id', '=', 'barang.lokasiid')
        ->select('barang.*', 'jenis.nama AS kategori','lokasi.nama AS namaLokasi')

        ->get();
        //return barang::all();
        return $ar_barang;

    }
}
