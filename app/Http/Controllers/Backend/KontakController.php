<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_kontak'] = Kontak::all();
        return view('backend.kontak.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = New Kontak();
        $data->alamat = request('alamat');
        $data->telphone = request('telphone');
        $data->email = request('email');
        $data->save();

        return redirect('admin/kontak')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['kontak'] = Kontak::find($id);
        return view('backend.kontak.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['kontak'] = Kontak::find($id);
        return view('backend.kontak.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Kontak::find($id);
        $data->alamat = request('alamat');
        $data->telphone = request('telphone');
        $data->email = request('email');
        $data->save();

        return redirect('admin/kontak')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kontak::destroy($id);
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
