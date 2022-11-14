<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBarang;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataBarang::all();
        return view('databarang.index',compact('data'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new DataBarang;
        return view('databarang.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new DataBarang;
        $model->Nama_Barang = $request->input('NamaBarang');
        $model->Kode_Barang = $request->input('KodeBarang');
        $model->Jumlah_Barang = $request->input('JumlahBarang');
        $model->save();

        return redirect()->to('/DataBarang');
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
        $model = DataBarang::find($id);
        return view('databarang.edit',compact('model'));
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
        $model = DataBarang::find($id);
        $model->Nama_Barang = $request->input('NamaBarang');
        $model->Kode_Barang = $request->input('KodeBarang');
        $model->Jumlah_Barang = $request->input('JumlahBarang');
        $model->Status = $request->input('Status');
        $model->save();

        return redirect()->to('/DataBarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = DataBarang::find($id);
        $model->delete();
        return redirect('/DataBarang');
    }
}
