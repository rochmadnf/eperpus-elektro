<?php

namespace Database\Seeders;

use App\Models\FileUpload;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileUploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'title' => 'MONITORING UNJUK KERJA PEMBANGKIT TERSEBAR BERBASIS PV MENGUNAKAN IoT (Internet of Things)',
                'authors' => 'Anang Tegar Rivaldy',
                'file_category_id' => 2,
                'abstract_path' => 'assets/docs/abstract/2oCHlvu7v9AwnDSIzBzRe84XmNM10Ckm.pdf',
                'filepath' => 'assets/docs/full/iVeoxieujazqmbW9Bhwe7DsUPwqzmu6S.pdf'
            ],
            [
                'title' => 'RANCANG BANGUN DC-DC CONVERTER TERKENDALI DALAM SISTEM PENGISIAN BATERAI PADA MODUL PEMBANGKIT LISTRIK TENAGA BAYU (PLTB) BERBASIS FUZZY',
                'authors' => 'Kiki Andes Hariyanti',
                'file_category_id' => 2,
                'abstract_path' => 'assets/docs/abstract/8wyPWwbW2osYdsfjLBPAvGNPygXSyKTp.pdf',
                'filepath' => 'assets/docs/full/cq5GVt8cGoNbZiP8fr3EGxnDGwJG03Ha.pdf'
            ],
        ])->each(fn($item) => FileUpload::create($item));
    }
}
