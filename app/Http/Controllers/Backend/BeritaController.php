<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    
    public function index()
    {
        $data['list_berita'] = Berita::all();
        return view('backend.berita.index', $data);
    }

    
    public function create()
    {
        return view('backend.berita.create');
    }

    
    public function store(Request $request)
    {
        $berita = New Berita();
        $berita->judul = request('judul');
        $berita->tanggal_berita = request('tanggal_berita');
        $berita->deskripsi = request('deskripsi');
        $berita->handleUploadPoto();
        $berita->save();

        return redirect('admin/berita')->with('success', 'Data Berhasil Ditambahkan');
    }

    
    public function show(string $id)
    {
        $data['berita'] = Berita::find($id);
        return view('backend.berita.show', $data);
    }

    
    public function edit(string $id)
    {
        $data['berita'] = Berita::find($id);
        return view('backend.berita.edit', $data);
    }

    
    public function update(Request $request, string $id)
    {
        $berita = Berita::find($id);
        $berita->judul = request('judul');
        $berita->tanggal_berita = request('tanggal_berita');
        $berita->deskripsi = request('deskripsi');
        $berita->handleUploadPoto();
        $berita->save();

        return redirect('admin/berita')->with('warning', 'Data Berhasil Diedit');
    }

    
    public function destroy(string $id)
    {
        Berita::destroy($id);

        return back()->with('error', 'Data Berhasil Dihapus');
    }
}
