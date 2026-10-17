<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $daftarKecamatan = [
            'Dayeuhkolot',
            'Baleendah',
            'Bojongsoang',
            'Rancaekek',
            'Majalaya',
            'Ciparay',
            'Kertasari'
        ];

        for ($i = 0; $i < 15; $i++) {
            DB::table('laporan')->insert([
                'nama_pelapor'     => $faker->name,
                'lokasi'           => $faker->randomElement($daftarKecamatan),
                'tinggi_genangan'  => $faker->numberBetween(10, 150), // 10 cm - 150 cm
                'tanggal_kejadian' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
                'created_at'       => now(),
                'updated_at'       => now(),
            ]);
        }
    }
}