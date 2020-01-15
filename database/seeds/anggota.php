<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota_model::insert([
            [
              'nama_anggota'  => 'Syifa',
              'alamat' => 'Malang',
              'telp'          => '08214278468',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'nama_anggota'  => 'Natan',
              'alamat' => 'Jakarta',
              'telp'          => '085789284763',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'nama_anggota'  => 'Rava',
              'alamat' => 'Bali',
              'telp'          => '08128391982',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'nama_anggota'  => 'Bryan',
              'alamat' => 'Bandung',
              'telp'          => '0812732489',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'nama_anggota'  => 'Varo',
              'alamat' => 'Yogyakarta',
              'telp'          => '0812823289',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);

    }
}
