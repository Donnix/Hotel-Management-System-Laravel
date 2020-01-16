<?php

namespace App\Http\Controllers;

use App\Karyawan;
use App\Jabatan;
use Illuminate\Http\Request;



class KaryawanController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $karyawans=Karyawan::latest()->paginate(5);

        return view('karyawans.index',compact('karyawans'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $karyawan = Karyawan::get();
        $jabatans=Jabatan::all();
		return view('karyawans.create',['karyawan' => $karyawan],compact('jabatans',$jabatans));
      
      
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request)
    {
        $request->validate([
           
           'nama_karyawan'=>'required',
           'jk_karyawan'=>'required',
           'alamat_karyawan'=>'required',
           'nohp_karyawan'=>'required',
           'jabatan_karyawan'=>'required',
           
        ]);
 
        Karyawan::create($request->all());
            
        
    
        return redirect()->route('karyawans.index')
        ->with('Berhasil','Data Berhasil Ditambahkan.');
    }

    public function show(Karyawan $karyawan)
    {
        return view('karyawans.show',compact('karyawan'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */

    public function edit(Karyawan $karyawan)
    {
        $jabatans=Jabatan::get();
        return view('karyawans.edit',compact('jabatans','karyawan'));
    }   

    public function update(Request $request, Karyawan $karyawan)
    {
        
        $request->validate([
           
            'nama_karyawan'=>'required',
            'jk_karyawan'=>'required',
            'alamat_karyawan'=>'required',
            'nohp_karyawan'=>'required',
            'jabatan_karyawan'=>'required',
         ]);

        $karyawan->update($request->all());
        return redirect()->route('karyawans.index')
        ->with('Berhasil','Data Berhasil Diupdate.');
        
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
  
        return redirect()->route('karyawans.index')
                        ->with('Berhasil','Data Berhasil Dihapus');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
   

}

