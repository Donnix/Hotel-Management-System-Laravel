<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    
    public function index ( Request $request ){


        return view ('logins.index');
    }

    public function store(Request $request)
    {
        if (Auth::attempt($request->only('name','password'))){
        
        
            return redirect()->route('kamars.index')
                        ->with('succsess','Anda berhaslogin')   ;
    }
        return redirect()->route('logins.index')
                     ->with('danger','Anda gagal login');

    }   
}
