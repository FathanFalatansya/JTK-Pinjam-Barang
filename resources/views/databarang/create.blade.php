
@extends('adminlte::page')

@section('title', 'Tambah Databarang')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Barang</h1>
@stop

@section('content')
    <form action="{{ url('/DataBarang') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                        <label for="InputNamaBarang">Nama Barang</label>    
                        <input type="text" class="form-control" name="NamaBarang" placeholder="Nama Barang" id="InputNamaBarang"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputKodeBarang">Kode Barang</label>    
                        <input type="text" class="form-control" name="KodeBarang" placeholder="Kode Barang(8-digit)" id="InputKodeBarang"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputJumlahBarang">Jumlah Barang</label>    
                        <input type="text" class="form-control" name="JumlahBarang" placeholder="Jumlah Barang (angka)" id="InputJumlahBarang"><br/>
                        </div>
                    

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('/databarang') }}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop
