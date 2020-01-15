<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Petugas_model::insert([
            [
              'nama_petugas'  => 'Revo',
              'alamat' => 'Malang',
              'nohp'          => '08214278432',
              'username'=> 'Revo',
              'password'=> 'secret',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'nama_petugas'  => 'Bhisma',
              'alamat' => 'Jakarta',
              'nohp'          => '08578928353',
              'username'=> 'Bhisma',
              'password'=> 'secret',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'nama_petugas'  => 'Elang',
              'alamat' => 'Bali',
              'nohp'          => '08128393454',
              'username'=> 'Elang',
              'password'=> 'secret',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'nama_petugas'  => 'Rizky',
              'alamat' => 'Bandung',
              'nohp'          => '08127323423',
              'username'=> 'Rizky',
              'password'=> 'secret',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'nama_petugas'  => 'Alvaro',
              'alamat' => 'Yogyakarta',
              'nohp'          => '0812823242',
              'username'=> 'Alvaro',
              'password'=> 'secret',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);

    }
}
