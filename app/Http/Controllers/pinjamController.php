<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\jenis;
use App\donatur;
use App\lokasi;
use App\pengguna;
use Validator,Redirect,Response,File;
class pinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $data = DB::table('barang')
        ->join('jenis', 'jenis.id', '=', 'barang.jenisid')
        ->join('donatur', 'donatur.id', '=', 'barang.donaturid')
        ->join('lokasi', 'lokasi.id', '=', 'barang.lokasiid')
        ->join('pengguna', 'pengguna.id', '=', 'barang.penggunaid')
        ->select('barang.*', 'jenis.nama AS kategori','pengguna.nama AS namaPengguna','donatur.asaldonatur AS namaDonatur','lokasi.nama_lokasi AS namaLokasi')

        ->get();
        
        
        return view('pinjam.index',compact('data')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
