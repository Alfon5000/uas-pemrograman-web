<?php

namespace Database\Seeders;

use App\Models\DataSatu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_satu = [
            ['nama' => '1'],
            ['nama' => '2'],
            ['nama' => '3'],
            ['nama' => '4'],
        ];
        DataSatu::insert($data_satu);
    }
}
