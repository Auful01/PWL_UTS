<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Mahasiswa;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function search(Request $request)
    {
        // $cari = $request->nim;
        $barang= Barang::where('nama_barang', 'LIKE', "%" . $request->nama_barang ."%")->paginate(5);
        return view('barang.cari', compact('barang'));
    }

}
