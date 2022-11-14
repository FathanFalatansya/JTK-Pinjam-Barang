
@extends('adminlte::page')

@section('title', 'Pinjam Barang')

@section('content_header')
    <h1 class="m-0 text-dark">Data Peminjaman Barang</h1>
@stop

@section('content')
    <form action="{{ url('/home') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                        <label for="InputNama">Nama</label>    
                        <input type="text" class="form-control" name="Nama" placeholder="Nama lengkap" id="InputNama"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputNim">Nim/Kode Dosen</label>    
                        <input type="text" class="form-control" name="Nim" placeholder="Nim (9-digit)" id="InputNim"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputNamaBarang">Nama Barang</label>    
                        <input type="text" class="form-control" name="NamaBarang" placeholder="Nama Barang" id="InputNamaBarang"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputKodeBarang">Kode Barang</label>    
                        <input type="text" class="form-control" name="KodeBarang" placeholder="Kode Barang" id="InputKodeBarang"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputJumlahBarang">Jumlah Barang</label>    
                        <input type="text" class="form-control" name="JumlahBarang" placeholder="Jumlah Barang (Angka)" id="InputJumlahBarang"><br/>
                        </div>
                    

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('/home') }}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop
