<?php

namespace App\Http\Controllers;

use App\Laporan;
use App\Transaction;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporans=Laporan::latest()->paginate(5);

        return view('laporans.index',compact('laporans'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
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
     * @param  \App\Laporans  $laporans
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        return view('laporans.show',compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporans  $laporans
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporans $laporans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporans  $laporans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporans $laporans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporans  $laporans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporans $laporans)
    {
        //
    }
    public function cari(Request $request)
    {
        $request->validate([
            'startDate'=> 'required',
            'endDate'=> 'required',
            ]);
        $from = $request->startDate;
        $to = $request->endDate;
        $title="Laporan From: ".$from."To:".$to;
        $startDate = $from.' 00:00:00';
        $endDate = $to.' 23:59:59';

        $laporans = Laporan::whereBetween('created_at', [$startDate,$endDate])->latest()->paginate(5);
        
        return view('laporans.index', compact('laporans', 'startDate', 'endDate'))->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('laporans.index');
    }

    public function print(Request $request)
    {

        // $request->validate([
        //     'startDate'=> 'required',
        //     'endDate'=> 'required',
        //     ]);
        $laporans = $request->transaction;
        $from = $request->startDate;
        $to = $request->endDate;

        $title ="Laporan From: ".$from."To:".$to;
        $redirect = route('laporans');   
        if(isset($from) && isset($to)){
            $startDate = $from;
            $endDate = $to;

            $laporans = Laporan::whereBetween('created_at', [$startDate,$endDate])->latest()->paginate(5);
            $startDate = explode(' ', $startDate)[0];
            $endDate = explode(' ', $endDate)[0];

            return view('laporans.print', compact('laporans', 'startDate', 'endDate', 'redirect'))->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            $laporans = Laporan::latest()->paginate(5);

            return view('laporans.print', compact('laporans', 'redirect'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
  
    }
}
