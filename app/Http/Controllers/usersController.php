<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\barang;
use Validator,Redirect,Response,File;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use Charts;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')
    
    ->select('users.*')

    ->get();
    
    
    return view('users.index',compact('data')
    // ->select('users.name','users.email','users.role','users.foto')

    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('users.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty(request()->fotos)){
            // request()->validate(['fotos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $namaFile = time().'.'.request()->fotos->getClientOriginalExtension();
            request()->fotos->move(public_path('img/'), $namaFile);
        }
            DB::table('users')->insert(
            [ 
                // 'id'=>$request->id,
                'name'=>$request->name,
                'role'=>$request->role,
                'password'=>Hash::make($request->password),
                'email'=>$request->email,
                'foto'=>$namaFile  
                          
            ]);
         
            
            return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('users')
    
    ->select('users.*')
    ->where('users.id','=',$id) 

    ->get();
                          
        return view('users.show',compact('data')
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
        $data = User::where('id',$id)->get();
        return view('users.edit',compact('data'));
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
        $d=\App\user::where('id',$id)->first();
        $dg=$d->foto;
        if(!empty(request()->foto)){
            File::delete('img/'.$dg);
            $namaFile = time().'.'.request()->foto->getClientOriginalExtension();
            request()->foto->move(public_path('img'), $namaFile);
        }else{
            $namaFile=$dg;
        }
        DB::table('users')->where('id',$id)->update(
            
                [ 
                 'name'=>$request->name,
                'email'=>$request->email,
                // 'password'=>Hash::make($request->password),

                'role'=>$request->role,
                'foto'=>$namaFile
                  
                ]); 
            
                
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('/users');
    
    }
    }

