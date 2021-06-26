<?php

namespace Database\Seeders;
use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $layanan = ['','Import','Export','Domestik Masuk','Domestik Keluar','Customer Service'];
        foreach($layanan as $key => $item){
            Layanan::updateOrCreate([
                'id' => $key
            ],[
                'nama_layanan' => $item
            ]);
        }
    }
}
