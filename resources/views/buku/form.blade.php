@extends('layouts.app')

@section('title', 'Form Data Buku')

@section('contents')
<form action="{{ isset($buku) ? route('buku.tambah.update', $buku->id) : route('buku.tambah.simpan') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($buku) ? 'Form Edit Data Buku' : 'Form Tambah Data Buku' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_buku">Kode Buku</label>
                        <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="{{ isset($buku) ? $buku->kode_buku : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ isset($buku) ? $buku->judul_buku : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_pengarang">Nama Pengarang</label>
                        <input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" value="{{ isset($buku) ? $buku->nama_pengarang : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ isset($buku) ? $buku->penerbit : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="sinopsis_buku">Sinopsis Buku</label>
                        <input type="text" class="form-control" id="sinopsis_buku" name="sinopsis_buku" value="{{ isset($buku) ? $buku->sinopsis_buku : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="kategori_buku">Kategori Buku</label>
                        <select name="id_kategori" id="id_kategori" class="custom-select">
                            <option value="" selected disabled hidden>-- Pilih Kategori --</option>
                            @foreach ($kategori as $row)
                                <option value="{{ $row->id }}" {{ isset($buku) ? ($buku->id_kategori == $row->id ? 'selected' : '') : '' }}>{{ $row->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Upload Cover</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="stok_buku">Stok</label>
                        <input type="text" class="form-control" id="stok_buku" name="stok_buku" value="{{ isset($buku) ? $buku->stok_buku : '' }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>                    
@endsection