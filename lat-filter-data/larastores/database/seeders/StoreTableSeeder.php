<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = new Store;
        $store = Store::insert([
            [
                'name' => 'Pasar Peunayong',
                'address' => 'Jl. Sisingamangaraja, Kel Peunayong, Kec Kuta alam, Banda aceh',
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pasar Ulee Kareng',
                'address' => 'Jl. Teuku Iskandar, Kel Lambhuk, Kec Lhoknga, Banda Aceh',
                'city_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pasar Baru',
                'address' => 'Jl. Pasar Barat No.26 A, Kb. Jeruk, Andir, Kota Bandung',
                'city_id' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pasar Sederhana',
                'address' => 'Jl. Jurang No.1, Pasteur, Sukajadi, Kota Bandung',
                'city_id' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pasar Anyar',
                'address' => 'Sukaasih, Kec. Tangerang, Kota Tangerang',
                'city_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pasar Andir',
                'address' => 'Jl. Arjuna, Ciroyom, Andir, Kota Bandung',
                'city_id' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pasar Kranggan',
                'address' => 'Jl. Diponegoro, Gowongan, Jetis, Kota Yogyakarta',
                'city_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pasar Minggu',
                'address' => 'Jl. Pasar Minggu, Bengkulu',
                'city_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pasar Pancasila',
                'address' => 'Jl. Ahmad Yani No.31, Lengkongsari, Tawang, Tasikmalaya',
                'city_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pasar Cikurubuk',
                'address' => 'Jl. Raden Adiwinangun, Linggajaya, Mangkubumi, Tasikmalaya',
                'city_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
        $store->save();
    }
}
