<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['mahasiswas'] = Mahasiswa::all();
        return view('mahasiswa', $data);
    }

    public function detail($id)
    {
        $decrypted_id = decrypt($id);
        $data['mahasiswa'] = Mahasiswa::find($decrypted_id);

        if (!$data['mahasiswa']) {
            return redirect()->route('mahasiswa.index')->with('error', 'Mahasiswa not found.');
        }

        return view('detailMahasiswa', $data);
    }

    public function contoh1()
    {
        return view('contoh123');
    }

    public function contoh1Proses(Request $request)
    {
        dd($request->all());
    }
}
