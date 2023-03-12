@extends('layouts.app')

@section('title', 'Data Buku')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
    </div>
    <div class="card-body">
      @if (auth()->user()->level == 'admin')
        <a href="{{ route('buku.tambah') }}" class="btn btn-primary mb-3">Tambah Data Buku</a>
      @endif
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Barang</th>
              <th>Judul Buku</th>
              <th>Nama Pengarang</th>
              <th>Penerbit</th>
              <th>Sinopsis Buku</th>
              <th>Kategori Buku</th>
              <th>Gambar</th>
              <th>Stok Buku</th>
              @if (auth()->user()->level == 'admin')
                <th>Aksi</th>
              @endif
						
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($buku as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->kode_buku }}</td>
                <td>{{ $row->judul_buku }}</td>
                <td>{{ $row->nama_pengarang }}</td>
                <td>{{ $row->penerbit }}</td>
                <td>{{ $row->sinopsis_buku }}</td>
                <td>{{ $row->kategori->nama}}</td>
                <td><img src="{{ asset('storage/'.$row->gambar) }}" alt="coverimg"></td>
                <td>{{ $row->stok_buku }}</td>
                @if (auth()->user()->level == 'admin')
                  <td>
                    <a href="{{ route('buku.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('buku.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                  </td>
                @else
                  <td></td>
                @endif   
								
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection