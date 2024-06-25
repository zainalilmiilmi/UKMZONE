<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UKMSeeder extends Seeder
{
    /**
     * Jalankan seeder database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ukm')->insert([
            [
                'name' => 'LDK UKMM ULM',
                'description' => 'Lembaga Dakwah Kampus Unit Kerohanian Mahasiswa Muslim Universitas Lambung Mangkurat.',
                'image_path' => 'ldkumm.jpeg',
                'visi' => 'Menjadi lembaga dakwah kampus yang solid dan terdepan dalam menyebarkan nilai-nilai Islam di ULM.',
                'misi' => 'Mengadakan kajian Islam rutin, mempererat ukhuwah antar mahasiswa Muslim, dan menyebarkan nilai-nilai Islam melalui berbagai media.',
                'kegiatan' => 'Kajian rutin, kegiatan sosial, mentoring, dan publikasi dakwah.',
                'image_kegiatan' => 'kukmm.jpg'
            ],
            [
                'name' => 'DPM ULM',
                'description' => 'DPM adalah sebuah Badan Legislatif Mahasiswa dalam Perguruan Tinggi yang merupakan lembaga tertinggi sebagai pengurus dan pengendali kehidupan dinamika keorganisasian dan aspirasi mahasiswa di Perguruan Tinggi.',
                'image_path' => 'dpmulm.jpg',
                'visi' => 'Menjadi badan legislatif mahasiswa yang demokratis, transparan, dan bertanggung jawab.',
                'misi' => 'Menjembatani aspirasi mahasiswa, mengawasi kinerja eksekutif mahasiswa, dan memperjuangkan hak-hak mahasiswa.',
                'kegiatan' => 'Rapat pleno, sidang umum, diskusi publik, dan advokasi mahasiswa.',
                'image_kegiatan' => 'kdpm.jpg'
            ],
            [
                'name' => 'BEM ULM',
                'description' => 'BEM ULM adalah salah satu bentuk Bhineka Tunggal Ika di mana ULM yang terdiri dari 11 Fakultas dan puluhan program studi dapat disatukan dalam suatu.',
                'image_path' => 'bem.jpg',
                'visi' => 'Mewujudkan BEM ULM sebagai wadah pemersatu mahasiswa yang berintegritas dan berprestasi.',
                'misi' => 'Meningkatkan sinergi antar fakultas, mengadakan kegiatan pengembangan diri, dan memperjuangkan kesejahteraan mahasiswa.',
                'kegiatan' => 'Seminar, workshop, kegiatan sosial, dan lomba-lomba.',
                'image_kegiatan' => 'kbem.jpg'
            ],
            [
                'name' => 'KOPMA ULM',
                'description' => 'Koperasi Mahasiswa Universitas Lambung Mangkurat atau disingkat Kopma Unlam adalah suatu organisasi kemahasiswaan yang bergerak dalam bidang kewirausahaan kemahasiwaan. Visi KOPMA ULM yaitu Menjadi Organisasi yang mengembangkan diri secara terus menerus dan berkelanjutan melalui kader-kader koperasi yang berkualitas guna memberikan manfaat ekonomi kepada anggota serta berperan aktif dalam kehidupan Perkoperasian Universitas maupun Nasional secara Umum.',
                'image_path' => 'kopma.png',
                'visi' => 'Menjadi organisasi yang mengembangkan diri secara terus menerus dan berkelanjutan melalui kader-kader koperasi yang berkualitas guna memberikan manfaat ekonomi kepada anggota serta berperan aktif dalam kehidupan Perkoperasian Universitas maupun Nasional secara Umum.',
                'misi' => 'Mengembangkan keterampilan kewirausahaan mahasiswa, memperkuat koperasi sebagai lembaga ekonomi, dan memperluas jaringan kemitraan.',
                'kegiatan' => 'Pelatihan kewirausahaan, bazaar, dan pengembangan produk koperasi.',
                'image_kegiatan' => 'kkopma.jpg'
            ],
            [
                'name' => 'LPM KINDAY',
                'description' => 'Lembaga Pers Mahasiswa KINDAY adalah organisasi yang bergerak dalam bidang jurnalistik di Universitas Lambung Mangkurat.',
                'image_path' => 'kinday.png',
                'visi' => 'Menjadi media pers mahasiswa yang kritis, inovatif, dan berintegritas.',
                'misi' => 'Mengembangkan kemampuan jurnalistik mahasiswa, mempublikasikan informasi yang edukatif, dan menjadi wadah aspirasi mahasiswa.',
                'kegiatan' => 'Pelatihan jurnalistik, penerbitan buletin, dan diskusi media.',
                'image_kegiatan' => 'klpm.jpg'
            ],
            [
                'name' => 'PSHT ULM',
                'description' => 'Unit Kegiatan Mahasiswa (UKM) Organisasi pencak silat Persaudaraan Setia Hati Terate (PSHT) komisariat Universitas Lambung Mangkurat (ULM) mengajak mahasiswa dan para remaja mengikuti dan bergabung dalam latihan pencak silat untuk menjadi dasar sebagai bekal mahasiswa untuk melindungi nya dari berbagai gangguan.',
                'image_path' => 'psht.png',
                'visi' => 'Menjadi organisasi pencak silat yang unggul dalam prestasi dan karakter.',
                'misi' => 'Mengembangkan kemampuan beladiri mahasiswa, membina karakter yang kuat, dan mempromosikan budaya pencak silat.',
                'kegiatan' => 'Latihan rutin, kejuaraan pencak silat, dan kegiatan sosial.',
                'image_kegiatan' => 'kpsht.jpg'
            ]
            // Tambahkan data lainnya jika diperlukan
        ]);
    }
}
