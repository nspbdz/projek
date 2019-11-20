<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenis;

use DB;
 
use App\lokasi;
use App\barang;
use App\pengguna;
use Validator,Redirect,Response,File;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use Charts;
class jenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $data = DB::table('jenis')
    
    ->select('jenis.*')

    ->get();
    
    
    return view('jenis.index',compact('data')
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('jenis')->insert(
            [ 
                'nama'=>$request->namas
                
                
            ]);
        
    
            return redirect('/jenis');
   
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
        $data = jenis::where('id',$id)->get();
        
        return view('jenis.edit',compact('data'));
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
        DB::table('jenis')->insert(
            [ 
                'nama'=>$request->namajenis,
                
                
            ]);
        
    
            return redirect('jenis');
   
            }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('jenis')->where('id',$id)->delete();
        return redirect('/jenis');
    }
}
