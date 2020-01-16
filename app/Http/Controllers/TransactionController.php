<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Guest;
use App\Kamar;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions=Transaction::latest()->paginate(5);

        return view('transactions.index',compact('transactions'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $transaction = Transaction::get();
        $guests=Guest::all();
        $kamars=Kamar::all();
		return view('transactions.create',['transaction' => $transaction],compact('guests',$guests,'kamars',$kamars));
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
            'nama_tamu'=>'required',
            'nama_kamar'=>'required',
            'tanggal_cekin'=>'required',
            'tanggal_cekout'=>'required',
            'harga_kamar'=>'required',
            'jumlah_kamar'=>'required',
            'total'=>'required',
            'bayar'=>'required',
            'kembalian'=>'required',
        ]);

        Transaction::create($request->all());
        return redirect()->route('transactions.index')
        ->with('Berhasil','Data Berhasil Ditambahkan.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('transactions.show',compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        $guests=Guest::all();
        $kamars=Kamar::all();
        
        return view('transactions.edit',compact('transaction','guests','kamars',$guests,$kamars));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'nama_tamu'=>'required',
            'nama_kamar'=>'required',
            'tanggal_cekin'=>'required',
            'tanggal_cekout'=>'required',
            'harga_kamar'=>'required',
            'jumlah_kamar'=>'required',
            'total'=>'required',
            'bayar'=>'required',
            'kembalian'=>'required',
        ]);

       $transaction->update($request->all());
        return redirect()->route('transactions.index')
        ->with('Berhasil','Data Berhasil Diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
       
        $transaction->delete();
  
        return redirect()->route('transactions.index')
                        ->with('Berhasil','Data Berhasil DiHapus');
    }
}
