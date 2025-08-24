<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_tentang_kami'] = TentangKami::all();
        return view('backend.tentang-kami.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.tentang-kami.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = New TentangKami();
        $data->judul = request('judul');
        $data->deskripsi = request('deskripsi');
        $data->handleUploadPoto();
        $data->save();

        return redirect('admin/tentang-kami')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['tentang_kami'] = TentangKami::find($id);
        return view('backend.tentang-kami.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['tentang_kami'] = TentangKami::find($id);
        return view('backend.tentang-kami.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $data = TentangKami::find($id);
        $data->judul = request('judul');
        $data->deskripsi = request('deskripsi');
        $data->handleUploadPoto();
        $data->save();

        return redirect('admin/tentang-kami')->with('warning', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TentangKami::destroy($id);
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
