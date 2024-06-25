<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        // Ambil semua pertanyaan dari database
        $pertanyaan = Pertanyaan::pluck('pertanyaan', 'id')->all();

        // Pilihan jawaban untuk setiap pertanyaan
        $pilihan = [
            'a' => 'Berlatih seni bela diri atau olahraga',
            'b' => 'Diskusi atau kegiatan keagamaan',
            'c' => 'Berpartisipasi dalam latihan fisik dan simulasi militer',
            'd' => 'Menjadi relawan dalam kegiatan kemanusiaan',
            'e' => 'Mengelola bisnis ataupun kegiatan ekonomi',
            'f' => 'Berdiskusi dan memperjuangkan isu-isu penting dalam masyarakat',
            'g' => 'Latihan seni dan pertunjukan budaya',
        ];

        return view('rekomendasi.index', compact('pertanyaan', 'pilihan'));
    }

    public function prosesForm(Request $request)
    {
        // Memproses jawaban dari formulir
        $jawaban = $request->input('jawaban');

        // Daftar rekomendasi berdasarkan jawaban
        $recommendations = [
            'a' => 'Kami merekomendasikan Anda untuk bergabung dalam UKM PSHT atau Merpati Putih.',
            'b' => 'Kami merekomendasikan Anda untuk bergabung dalam UKM LDK UKMM.',
            'c' => 'Kami merekomendasikan Anda untuk bergabung dalam UKM Resimen Mahasiswa.',
            'd' => 'Kami merekomendasikan Anda untuk bergabung dalam UKM KSR ULM',
            'e' => 'Kami merekomendasikan Anda untuk bergabung dalam UKM Koperasi Mahasiswa.',
            'f' => 'Kami merekomendasikan Anda untuk bergabung dalam UKM Lembaga Advokasi dan Aksi Mahasiswa.',
            'g' => 'Kami merekomendasikan Anda untuk bergabung dalam UKM Kampoeng Seni Boedaja.',
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
