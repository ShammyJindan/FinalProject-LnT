<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    public function index(Request $request)
    {
       $barang = DB::table('barangs')->get();

        $kategori = DB::select("SELECT kategori FROM barangs");
        $nama = DB::select("SELECT nama FROM barangs");
        $harga = DB::select("SELECT harga FROM barangs");
        $jumlah = DB::select("SELECT jumlah FROM barangs");
        $foto = DB::select("SELECT foto FROM barangs");

        return view('barang.index', compact('barang', 'kategori', 'nama', 'harga', 'jumlah', 'foto'));
    }
}
