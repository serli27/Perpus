<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\buku_model::insert([
            [
              'buku'  => 'Surat dari Kematian',
              'penerbit' => 'PT Falcon',
              'pengarang'=> 'Adham T. Fusuma',
              'foto'=> '-',
            ],
            [
              'buku'  => 'Marmut Merah Jambu',
              'penerbit' => 'bukune',
              'pengarang'=> 'Raditya Dika',
              'foto'=> '-',
            ],
            [
              'buku'  => 'Koala Kumal',
              'penerbit' => 'GagasMedia',
              'pengarang'=> 'Raditya Dika',
              'foto'=>'-',
            ],
            [
              'buku'  => 'Hujan',
              'penerbit' => 'Gramedia Pustaka Utama',
              'pengarang'=> 'Tere Liye',
              'foto'=> '-',
            ],
            [
              'buku'  => 'Perahu Kertas',
              'penerbit' => 'Bentang Pustaka&Truedee',
              'pengarang'=> 'Dee Lestari',
              'foto'=> '-'
            ],
        ]);

    }
}
