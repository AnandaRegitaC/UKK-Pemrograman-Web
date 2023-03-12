<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::get();
        return view('buku.index', ['buku'=>$buku]);
    }

    public function tambah()
    {
        $kategori = Kategori::get();
        return view('buku.form', ['kategori' => $kategori]);
    }

    public function simpan(Request $request)
    {
        $buku = [
            'kode_buku'=>$request->kode_buku,
            'judul_buku'=>$request->judul_buku,
            'nama_pengarang'=>$request->nama_pengarang,
            'penerbit'=>$request->penerbit,
            'sinopsis_buku'=>$request->sinopsis_buku,
            'id_kategori'=>$request->id_kategori,
            'gambar'=> $request->gambar,
            'stok_buku'=>$request->stok_buku
        ];

        $gambar = $buku['gambar'];
        $nama_gambar = date('Ymd') . '_' . uniqid() . '.' . $gambar->getClientOriginalExtension();

        if (!Storage::exists('/public/' . $nama_gambar)) {
            $gambar->storeAs('public', $nama_gambar);
        }

        $buku['gambar'] = $nama_gambar;

        Buku::create($buku);

        return redirect()->route('buku');
    }

    public function edit($id)
    {
        $buku = Buku::find($id)->first();
        $kategori = Kategori::get();

        return view('buku.form', ['buku'=>$buku, 'kategori'=> $kategori]);
    }

    public function update($id, Request $request)
    {
        $buku = [
            'kode_buku'=>$request->kode_buku,
            'judul_buku'=>$request->judul_buku,
            'nama_pengarang'=>$request->nama_pengarang,
            'penerbit'=>$request->penerbit,
            'sinopsis_buku'=>$request->sinopsis_buku,
            'id_kategori'=>$request->id_kategori,
            'stok_buku'=>$request->stok_buku
        ];
        Buku::find($id)->update($buku);

        return redirect()->route('buku');
    }

    public function hapus($id)
    {
        Buku::find($id)->delete();

        return redirect()->route('buku');
    }

}
