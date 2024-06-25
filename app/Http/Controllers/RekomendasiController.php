<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class RekomendasiController extends Controller
{
    public function index()
    {
        // Ambil semua pertanyaan dari database
        $pertanyaan = Pertanyaan::all();

        // Pilihan jawaban untuk setiap pertanyaan
        $pilihan = [
            'a' => 'Olahraga',
            'b' => 'Seni dan Budaya',
            'c' => 'Keagamaan',
            'd' => 'Sosial dan Kemanusiaan',
            'e' => 'Pengembangan Diri',
            'f' => 'Teknologi dan Sains',
        ];

        return view('rekomendasi.index', compact('pertanyaan', 'pilihan'));
    }

    public function prosesForm(Request $request)
    {
        // Memproses jawaban dari formulir
        $jawaban = $request->input('jawaban');

        // Daftar rekomendasi berdasarkan jawaban
        $recommendations = [
            'a' => 'UKM Olahraga seperti Futsal, Basket, atau Badminton',
            'b' => 'UKM Seni dan Budaya seperti Paduan Suara atau Tari',
            'c' => 'UKM Keagamaan seperti KKM atau Kajian Islam',
            'd' => 'UKM Sosial dan Kemanusiaan seperti PMR atau BEM',
            'e' => 'UKM Pengembangan Diri seperti English Club atau Debating Club',
            'f' => 'UKM Teknologi dan Sains seperti Robotika atau Astronomi',
        ];

        // Inisialisasi rekomendasi
        $rekomendasi = '';

        // Rekomendasi berdasarkan jawaban yang dipilih
        foreach ($jawaban as $key => $answer) {
            if (isset($recommendations[$answer])) {
                $rekomendasi = $recommendations[$answer];
                break; // Hentikan iterasi setelah menemukan rekomendasi yang cocok
            }
        }

        // Jika tidak ada rekomendasi yang cocok
        if (empty($rekomendasi)) {
            $rekomendasi = 'Tidak ada rekomendasi yang cocok berdasarkan jawaban Anda.';
        }

        // Tampilkan hasil rekomendasi
        return view('rekomendasi.hasil', compact('rekomendasi'));

    }
}
