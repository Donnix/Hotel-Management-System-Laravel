<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller{
    public function index()
    {  $guests=Guest::latest()->paginate(5);

        return view('guests.index',compact('guests'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        
		return view('guests.create');

      
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
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request)
    {
        $request->validate([
           
           'nama_tamu'=>'required',
           'jk_tamu'=>'required',
           'alamat_tamu'=>'required',
           'nohp_tamu'=>'required',
           'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            
        ]);
        if ($files = $request->file('image')) {
            // Define upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $destinationPath = public_path('/images/'); // upload path
         // Upload Orginal Image

            $files->move($destinationPath, $profileImage);

            $insert['image'] = "$profileImage";
         // Save In Database
             $imagemodel= new Guest();
             $imagemodel->image="$profileImage";
        }

       Guest::create([
        'image' => $profileImage,
        'nama_tamu' => $request->nama_tamu,
        'jk_tamu' => $request->jk_tamu,
        'alamat_tamu' => $request->alamat_tamu,
        'nohp_tamu' => $request->nohp_tamu,
       
    
    ]);
        return redirect()->route('guests.index')
        ->with('success','Data telah tersimpan.');
    }

    public function show(Guest $guest)
    {
        return view('guests.show',compact('guest'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */

    public function edit(Guest $guest)
    {
       
        return view('guests.edit',compact('guest'));
             
    }   

    public function update(Request $request,$id)
    {
        $request->validate([
               'nama_tamu'=>'required',
               'jk_tamu'=>'required',
               'alamat_tamu'=>'required',
               'nohp_tamu'=>'required',
               'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
               
        
        ]);
 
        if ($files = $request->file('image')) {
            // Define upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $destinationPath = public_path('/images/'); // upload path
         // Upload Orginal Image

            $files->move($destinationPath, $profileImage);

            $insert['image'] = "$profileImage";
         // Save In Database
             $imagemodel= new Guest();
             $imagemodel->image="$profileImage";

        }
        
            Guest::find($id)->update([
                'image' => $profileImage,
                'nama_tamu' => $request->nama_tamu,
                'jk_tamu' => $request->jk_tamu,
                'alamat_tamu' => $request->alamat_tamu,
                'nohp_tamu' => $request->nohp_tamu,
               
                
            ]);
        
         return redirect()->route('guests.index')
            ->with('success','Data Berhasil Diupdate.');
        
    }

    public function destroy(Guest $guest)
    {
        $guest->delete();
  
        return redirect()->route('guests.index')
                        ->with('Berhasil','Data Berhasil DiHapus');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */

    
}



