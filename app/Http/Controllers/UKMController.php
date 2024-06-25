<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ukm; // Pastikan menggunakan namespace yang benar

class UKMController extends Controller
{

    public function index()
    {
        $ukm = ukm::all(); // Ganti 'ukm' dengan 'ukm' jika ini adalah model Anda

        return view('pages.ukm', compact('ukm'));
    }

    public function ldk($id)
    {
        $ukm = Ukm::findOrFail($id);
        // Lakukan operasi lain yang Anda butuhkan
        return view('pages.ldk', compact('ukm'));
    }

    public function dpm($id)
    {
        $ukm = Ukm::findOrFail($id);
        // Lakukan operasi lain yang Anda butuhkan
        return view('pages.dpm', compact('ukm'));
    }

    public function bem($id)
    {
        $ukm = Ukm::findOrFail($id);
        // Lakukan operasi lain yang Anda butuhkan
        return view('pages.bem', compact('ukm'));
    }

    public function kopma($id)
    {
        $ukm = Ukm::findOrFail($id);
        // Lakukan operasi lain yang Anda butuhkan
        return view('pages.kopma', compact('ukm'));
    }

    public function lpm($id)
    {
        $ukm = Ukm::findOrFail($id);
        // Lakukan operasi lain yang Anda butuhkan
        return view('pages.lpm', compact('ukm'));
    }

    public function psht($id)
    {
        $ukm = Ukm::findOrFail($id);
        // Lakukan operasi lain yang Anda butuhkan
        return view('pages.psht', compact('ukm'));
    }



}
