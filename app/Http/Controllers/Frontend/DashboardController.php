<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Kontak;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_tentang_kami'] =TentangKami::Orderby('id', 'DESC')->get()->take(1);
        $data['list_berita'] =Berita::all();
        $data['list_kegiatan'] =Kegiatan::all();
        $data['list_kontak'] =Kontak::Orderby('id', 'DESC')->get()->take(1);
        return view('frontend.index', $data);
    }

    public function showBerita($id)  {
        $data['berita'] = Berita::find($id);
         $data['list_berita'] =Berita::Orderby('id', 'DESC')->get();
        return view('frontend.detail-berita', $data);
    }

     public function showKegiatan($id)  {
        $data['kegiatan'] = Kegiatan::find($id);
        $data['list_kegiatan'] =Kegiatan::Orderby('id', 'DESC')->get();
        return view('frontend.detail-kegiatan', $data);
    }
}
