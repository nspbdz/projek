<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengguna;
use App\User;
use DB;
use App\barang;
use Validator,Redirect,Response,File;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use Charts;
class penggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pengguna')
    
    ->select('pengguna.*')

    ->get();
    
    
    return view('pengguna.index',compact('data')
    );
    }
    public function pprofil()
    {
        $data = DB::table('pengguna')
    
    ->select('pengguna.*')

    ->get();
    
    
    return view('pengguna.index',compact('data')
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty(request()->foto)){
            request()->validate(['foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $namaFile = time().'.'.request()->foto->getClientOriginalExtension();
            request()->foto->move(public_path('img'), $namaFile);
        }
        DB::table('pengguna')->insert(
            [ 
                'nama'=>$request->namas,
                'jenis_pengguna'=>'ustadz', 
                'asal'=>$request->asal,
                'hp'=>$request->hp,
                'email'=>$request->email,
                'foto'=>$namaFile,  
                          
            ]);
            // }
            return redirect('/pengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = DB::table('pengguna')
        $data = DB::table('pengguna')
    
    ->select('pengguna.*')
    ->where('pengguna.id','=',$id) 

    ->get();
                          
        return view('pengguna.show',compact('data')
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
        $data = pengguna::where('id',$id)->get();        
        return view('pengguna.edit',compact('data'));
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
        if(!empty(request()->foto)){
            request()->validate(['foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $namaFile = time().'.'.request()->foto->getClientOriginalExtension();
            request()->foto->move(public_path('img'), $namaFile);
        
        DB::table('pengguna')->where('id',$id)->update(
            [ 
                'nama'=>$request->namass,
                'jenis_pengguna'=>$request->jpengguna,
                'asal'=>$request->asal,
                'hp'=>$request->hp,
                'email'=>$request->email,
               'foto'=>$namaFile                    
                               
            ]);

        } else { 
            DB::table('pengguna')->where('id',$id)->update(
                [ 
                    'nama'=>$request->namass,
                    'jenis_pengguna'=>$request->jpengguna,
                    'asal'=>$request->asal,
                    'hp'=>$request->hp,
                    'email'=>$request->email,
                                   
                ]);
        }
            return redirect('pengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pengguna')->where('id',$id)->delete();
        return redirect('/pengguna');
    }
}
