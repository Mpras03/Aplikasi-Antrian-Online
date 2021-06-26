<?php

namespace Database\Seeders;
use App\Models\Antrian;;
use Illuminate\Database\Seeder;

class AntrianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Antrian::updateOrCreate([
            'id' => 1
        ],[
            'nama' => 'htw',
            'nama_perusahaan' => 'infish',
            'layanan_id' => '1',
            'nomor_antrian' => '1'
        ]);
        Antrian::updateOrCreate([
            'id' => 2
        ],[
            'nama' => 'pras',
            'nama_perusahaan' => 'kang nganggur',
            'layanan_id' => '2',
            'nomor_antrian' => '2'
        ]);
        Antrian::updateOrCreate([
            'id' => 3
        ],[
            'nama' => 'htw kw1',
            'nama_perusahaan' => 'infish kw 1',
            'layanan_id' => '3',
            'nomor_antrian' => '3'
        ]);
        Antrian::updateOrCreate([
            'id' => 4
        ],[
            'nama' => 'haidar',
            'nama_perusahaan' => 'rpl',
            'layanan_id' => '4',
            'nomor_antrian' => '4'
        ]);
        Antrian::updateOrCreate([
            'id' => 5
        ],[
            'nama' => 'haidar1',
            'nama_perusahaan' => 'rpl',
            'layanan_id' => '5',
            'nomor_antrian' => '5'
        ]);


    }
}
