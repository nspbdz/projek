<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\jenis;
use App\lokasi;
use App\barang;
use App\pengguna;
use Validator,Redirect,Response,File;
use App\Exports\BarangExport;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use Charts;
class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = DB::table('barang')
        ->join('jenis', 'jenis.id', '=', 'barang.jenisid')
        ->join('lokasi', 'lokasi.id', '=', 'barang.lokasiid')
        ->join('pengguna', 'pengguna.id', '=', 'barang.penggunaid')
        ->select('barang.*', 'jenis.nama AS kategori','pengguna.nama AS namaPengguna','lokasi.nama AS namaLokasi')

        ->get();
        
        
        return view('barang.index',compact('data')
        );
    }
    public function asrama()
    {
        $data = DB::table('barang')
        ->join('jenis', 'jenis.id', '=', 'barang.jenisid')
        ->join('lokasi', 'lokasi.id', '=', 'barang.lokasiid')
        ->join('pengguna', 'pengguna.id', '=', 'barang.penggunaid')
        ->select('barang.*', 'jenis.nama AS kategori','pengguna.nama AS namaPengguna','lokasi.nama AS namaLokasi')
        
       ->where('lokasi.id','=','1')->orderBy('namaLokasi')
        ->get();
        
        
        return view('barang.asrama',compact('data')
        );
    }
    public function pdf()
    {
        
        $ar_barang = DB::table('barang')
        ->join('jenis', 'jenis.id', '=', 'barang.jenisid')
      
        ->join('lokasi', 'lokasi.id', '=', 'barang.lokasiid')
        ->join('pengguna', 'pengguna.id', '=', 'barang.penggunaid')
        ->select('barang.nama_barang','barang.foto','barang.donatur','pengguna.nama AS namaPengguna','barang.lokasiid', 'jenis.nama AS kategori','lokasi.nama AS namaLokasi')
        ->get();
        
        //$ar_santri = Santri::all();

        $pdf = PDF::loadView('barang.cetakPDF',
               ['ar_barang'=>$ar_barang]);
  
        return $pdf->download('data_.pdf');
        
    }
    public function excel()
    {
        return Excel::download(new BarangExport, 'barang.xlsx');
    }
    public function kelas()
    {
        $data = DB::table('barang')
        ->join('jenis', 'jenis.id', '=', 'barang.jenisid')
      
        ->join('lokasi', 'lokasi.id', '=', 'barang.lokasiid')
        ->join('pengguna', 'pengguna.id', '=', 'barang.penggunaid')
        ->select('barang.*', 'jenis.nama AS kategori','pengguna.nama AS namaPengguna','lokasi.nama AS namaLokasi')

       ->where('lokasi.id','=','2')->orderBy('namaLokasi')
        ->get();
        
        
        return view('barang.kelas',compact('data')
        );
    }
    public function kantor()
    {
        $data = DB::table('barang')
        ->join('jenis', 'jenis.id', '=', 'barang.jenisid')
       
        ->join('lokasi', 'lokasi.id', '=', 'barang.lokasiid')
        ->join('pengguna', 'pengguna.id', '=', 'barang.penggunaid')
        ->select('barang.*', 'jenis.nama AS kategori','pengguna.nama AS namaPengguna','lokasi.nama AS namaLokasi')

       ->where('lokasi.id','=','3')->orderBy('namaLokasi')
        ->get();
        
        
        return view('barang.kantor',compact('data')
        );
    }
    public function masjid()
    {
        $data = DB::table('barang')
        ->join('jenis', 'jenis.id', '=', 'barang.jenisid')
        ->join('lokasi', 'lokasi.id', '=', 'barang.lokasiid')
        ->join('pengguna', 'pengguna.id', '=', 'barang.penggunaid')
        ->select('barang.*', 'jenis.nama AS kategori','pengguna.nama AS namaPengguna','lokasi.nama AS namaLokasi')
       ->where('lokasi.id','=','5')->orderBy('namaLokasi')
        ->get();
        
        
        return view('barang.masjid',compact('data')
        );
    }
   
    public function toilet()
    {
        $data = DB::table('barang')
        ->join('jenis', 'jenis.id', '=', 'barang.jenisid')
      
        ->join('lokasi', 'lokasi.id', '=', 'barang.lokasiid')
        ->join('pengguna', 'pengguna.id', '=', 'barang.penggunaid')
        ->select('barang.*', 'jenis.nama AS kategori','pengguna.nama AS namaPengguna','lokasi.nama AS namaLokasi')

       ->where('lokasi.id','=','6')->orderBy('namaLokasi')
        ->get();
        
        
        return view('barang.toilet',compact('data')
        );
    }
    public function gudang()

    {
        $data = DB::table('barang')
        ->join('jenis', 'jenis.id', '=', 'barang.jenisid')
        ->join('lokasi', 'lokasi.id', '=', 'barang.lokasiid')
        ->join('pengguna', 'pengguna.id', '=', 'barang.penggunaid')
        ->select('barang.*', 'jenis.nama AS kategori','pengguna.nama AS namaPengguna','lokasi.nama AS namaLokasi')
       ->where('lokasi.id','=','4')->orderBy('namaLokasi')
        ->get();
        
        
        return view('barang.gudang',compact('data')
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('barang.create');
        
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namapengguna' => 'required',

            'nama1' => 'required',
            'jeniss' => 'required',
            'lokasis' => 'required',
            'statuss' => 'required',
            'stok' => 'required|numeric',
            'donaturss' => 'required',
            'kondisis' => 'required',
            'tglmasuks' => 'required',

        ], [
            'namapengguna.required' => 'Nama Pengguna barang wajib di isi',
            'nama1.required' => 'Nama barang wajib di isi',
            'jeniss.required' => 'Jenis wajib di isi',
            'lokasis.required' => 'Lokasi wajib di isi',
            'statuss.required' => 'Status wajib di isi',
            'stok.required' => 'Jumlah wajib di isi',
            'donaturss.required' => 'donaturss wajib di isi',
            'kondisi.required' => 'Kondisi wajib di isi',
            'tglmasuks.required' => 'Tanggal wajib di isi',

        ]);

        if(!empty(request()->fotos)){
            // request()->validate(['fotos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $namaFile = time().'.'.request()->fotos->getClientOriginalExtension();
            request()->fotos->move(public_path('img/'), $namaFile);
        DB::table('barang')->insert(
            [ 
                'penggunaid'=>$request->namapengguna,                
                'nama_barang'=>$request->nama1,
                'donatur'=>$request->donaturss,
                'jenisid'=>$request->jeniss,
                'lokasiid'=>'4',
                'stok'=>$request->stok,
                'kondisi'=>$request->kondisis,  
                'status'=>'nonaktif', 
                'tglmasuk'=>$request->tglmasuks,  
                'foto'=>$namaFile,  

                
            ]);
        }else {
            $namaFile = null; 
            DB::table('barang')->insert(
                [               
                'penggunaid'=>$request->namapengguna,                

                    'nama_barang'=>$request->nama1,
                    'donatur'=>$request->donaturss,
                    'jenisid'=>$request->jeniss,
                    'lokasiid'=>$request->lokasis,
                    'stok'=>$request->stok,
                    'kondisi'=>$request->kondisis, 
                    'status'=>$request->statuss, 
                    'tglmasuk'=>$request->tglmasuks,  
    
                    
                ]);
        }
    return redirect('/barang');
            
        
    }

public function add()
{
    $post = Post::paginate(10);
    return view('post.add', compact('post'));
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('barang')
        
        ->join('jenis', 'jenis.id', '=', 'barang.jenisid')
        
        ->join('lokasi', 'lokasi.id', '=', 'barang.lokasiid')
        ->join('pengguna', 'pengguna.id', '=', 'barang.penggunaid')
        ->select('barang.*', 'jenis.nama AS kategori','pengguna.nama AS namaPengguna','lokasi.nama AS namaLokasi')
        ->where('barang.id','=',$id) 
        ->get();
        return view('barang.show',compact('data')
        
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = barang::where('id',$id)->get();
        return view('barang.edit',compact('data'));
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
        $d=\App\Barang::where('id',$id)->first();
        $dg=$d->foto;
        if(!empty(request()->foto)){
            File::delete('img/'.$dg);
            $namaFile = time().'.'.request()->foto->getClientOriginalExtension();
            request()->foto->move(public_path('img'), $namaFile);
        }else{
            $namaFile=$dg;
        }
        DB::table('barang')->where('id',$id)->update(
            
                [ 
                    'penggunaid'=>$request->namapengguna,                
                    'nama_barang'=>$request->nama1,
                    'donatur'=>$request->donaturss,
                    'jenisid'=>$request->jeniss,
                    'lokasiid'=>$request->lokasi,
                    'stok'=>$request->jumlah,
                    'kondisi'=>$request->kondisis, 
                    'tglmasuk'=>$request->tglmasukk,  
                'foto'=>$namaFile
                  
                ]);
                
        return redirect('barang');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('barang')->where('id',$id)->delete();
        return redirect('/barang');
    
    }
}
