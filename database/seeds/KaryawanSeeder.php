<?php

use App\Karyawan;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Karyawan::create(
            [
                'user_id' => '1',
                'jabatan' => 'Manager',
                'no_hp' => '081657228980',
                'jk' => 'perempuan',
            ]
        );
        Karyawan::create(
            [
                'user_id' => '2',
                'jabatan' => 'Developer',
                'no_hp' => '083456789334',
                'jk' => 'perempuan',
            ]
        );
    }
}
