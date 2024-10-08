<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Page::create([
            'about' => '<b>Center of Excellence (CoE) Biomedical & Healthcare Technology</b> ini akan fokus pada riset dan inovasi di bidang rekayasa biomedis dan teknologi layanan kesehatan, dengan menekankan pada aspek socio-economic dan psychological wellbeing pasien atau masyarakat. Riset dasar dan terapan, serta inovasi di bidang tersebut akan dilakukan secara kolaboratif dengan berbagai stakeholder di bidang Kesehatan seperti dengan Fakultas Kedokteran & Kesehatan Universitas DN/LN (Academic); Industri ALKES, Rumah sakit, Klinik dll (Business); Kemenkes, Pemda, dll (Government); dan Asosiasi Profesi Kedokteran & Kesehatan (Society).',
        ]);
    }
}
