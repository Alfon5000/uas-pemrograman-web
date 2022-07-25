<?php

namespace Database\Seeders;

use App\Models\DataDua;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataDuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_dua = [
            ['nama' => '1.1', 'id_data_satu' => 1],
            ['nama' => '1.2', 'id_data_satu' => 1],
            ['nama' => '1.3', 'id_data_satu' => 1],
            ['nama' => '1.4', 'id_data_satu' => 1],
            ['nama' => '2.1', 'id_data_satu' => 2],
            ['nama' => '2.2', 'id_data_satu' => 2],
            ['nama' => '2.3', 'id_data_satu' => 2],
            ['nama' => '2.4', 'id_data_satu' => 2],
            ['nama' => '3.1', 'id_data_satu' => 3],
            ['nama' => '3.2', 'id_data_satu' => 3],
            ['nama' => '3.3', 'id_data_satu' => 3],
            ['nama' => '3.4', 'id_data_satu' => 3],
            ['nama' => '4.1', 'id_data_satu' => 4],
            ['nama' => '4.2', 'id_data_satu' => 4],
            ['nama' => '4.3', 'id_data_satu' => 4],
            ['nama' => '4.4', 'id_data_satu' => 4],
        ];
        DataDua::insert($data_dua);
    }
}
