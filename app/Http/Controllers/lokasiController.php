<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lokasi;

use DB;

use Validator,Redirect,Response,File;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use Charts;
class lokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('lokasi')
    
    ->select('lokasi.*')

    ->get();
    
    
    return view('lokasi.index',compact('data')
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('lokasi.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('lokasi')->insert(
            [ 
                'nama'=>$request->namal
                
                
            ]);
        
    
            return redirect('lokasi');
   
            }
    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = lokasi::where('id',$id)->get();
        
        return view('lokasi.edit',compact('data'));
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
        DB::table('lokasi')->insert(
            [ 
            'nama'=>$request->namax
                
                
            ]);
        
    
            return redirect('lokasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('lokasi')->where('id',$id)->delete();
        return redirect('/lokasi');
    }
}
