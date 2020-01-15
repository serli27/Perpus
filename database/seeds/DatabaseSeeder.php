<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(usersTableSeeder::class);
        $this->call(anggota::class); // tambahkan line ini
        $this->call(petugas::class); // tambahkan line ini
        $this->call(buku::class); // tambahkan line ini

    }
}
