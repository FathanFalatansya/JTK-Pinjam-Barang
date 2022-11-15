
@extends('adminlte::page')

@section('title', 'Pinjam Barang')

@section('content_header')
    <h1 class="m-0 text-dark">Data Peminjaman Barang</h1>
@stop

@section('content')
    <form action="{{ url('/datapeminjaman') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                        <label for="InputNim">Nim</label>    
                        <input type="text" class="form-control @error('Nim') is-invalid @enderror" name="Nim" placeholder="Nim (9-digit)" id="InputNim"><br/>
                        @error('Nim') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                        <label for="InputNamaBarang">Nama Barang</label>    
                        <input type="text" class="form-control @error('NamaBarang') is-invalid @enderror" name="NamaBarang" placeholder="Nama Barang" id="InputNamaBarang"><br/>
                        @error('NamaBarang') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                        <label for="InputKodeBarang">Kode Barang</label>    
                        <input type="text" class="form-control @error('KodeBarang') is-invalid @enderror" name="KodeBarang" placeholder="Kode Barang" id="InputKodeBarang"><br/>
                        @error('KodeBarang') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                        <label for="InputJumlahBarang">Jumlah Barang</label>    
                        <input type="text" class="form-control @error('JumlahBarang') is-invalid @enderror" name="JumlahBarang" placeholder="Jumlah Barang (Angka)" id="InputJumlahBarang"><br/>
                        @error('JumlahBarang') <span class="text-danger">{{$message}}</span> @enderror
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
