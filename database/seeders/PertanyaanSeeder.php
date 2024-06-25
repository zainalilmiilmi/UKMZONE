<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pertanyaan;

class PertanyaanSeeder extends Seeder
{
    public function run()
    {
        $pertanyaans = [
            ['pertanyaan' => 'Aktivitas apa yang paling Anda nikmati di waktu luang?'],
            ['pertanyaan' => 'Apa jenis keterampilan yang menurut Anda paling mahir?'],
            ['pertanyaan' => 'Jenis kegiatan apa yang membuat Anda paling bersemangat?'],
            ['pertanyaan' => 'Bidang apa yang ingin Anda pelajari lebih dalam?'],
            ['pertanyaan' => 'Bagaimana cara Anda ingin berkontribusi pada masyarakat?'],
            ['pertanyaan' => 'Apa motivasi utama Anda dalam bergabung dengan sebuah UKM'],
            ['pertanyaan' => 'Peran apa yang paling sesuai dengan Anda dalam situasi darurat?'],
            ['pertanyaan' => 'Bagaimana Anda menggambarkan diri Anda dalam sebuah tim?'],
            ['pertanyaan' => 'Apa yang Anda harapkan dari keanggotaan di sebuah UKM?'],
            ['pertanyaan' => 'Apa yang menjadi prioritas Anda dalam berorganisasi?'],
        ];

        foreach ($pertanyaans as $pertanyaan) {
            Pertanyaan::create($pertanyaan);
        }
    }
}
