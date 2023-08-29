<?php

namespace App\Http\Controllers;

use App\Models\Futsal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FutsalController extends Controller
{
    public function index(Request $request){
        $data = Futsal::all();
        return view ('beranda' , compact('data'));
    }

    public function tambahbooking(){
        return view ('tambahbooking');
    }

    public function insert(Request $request){
        $hargalapangan = ['1'=> 90000, '2' => 70000, '3' => 80000];
        $totalbayar = $hargalapangan[$request->lapangan];
        DB::table('futsals')->insert([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'lapangan' => $request->lapangan,
            'totalbayar' => $totalbayar,
            'status' => 'belum',
        ]);

        return redirect('beranda');
    }
}
