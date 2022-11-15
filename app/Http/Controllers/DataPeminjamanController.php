<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapeminjaman;

class DataPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = datapeminjaman::all();
        return view('peminjaman.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new datapeminjaman;
        return view('peminjaman.create', compact('model'));
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
            'Nim'=>'required|min:9|unique:datapeminjaman,Nim',
            'NamaBarang'=>'required',
            'KodeBarang'=>'required|min:8',
            'JumlahBarang'=>'required',
        ]);

        $model = new datapeminjaman;
        $model->Nim = $request->input('Nim');
        $model->Nama_Barang = $request->input('NamaBarang');
        $model->Kode_Barang = $request->input('KodeBarang');
        $model->Jumlah_Barang = $request->input('JumlahBarang');
        $model->save();

        return redirect()->to('/home');
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
        $model = datapeminjaman::find($id);
        return view('peminjaman.edit',compact('model'));
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
        $model = datapeminjaman::find($id);
        $model->Nim = $request->input('Nim');
        $model->Nama_Barang = $request->input('NamaBarang');
        $model->Kode_Barang = $request->input('KodeBarang');
        $model->Jumlah_Barang = $request->input('JumlahBarang');
        $model->save();

        return redirect()->to('/datapeminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = datapeminjaman::find($id);
        $model->delete();
        return redirect('/datapeminjaman');
    }
}
