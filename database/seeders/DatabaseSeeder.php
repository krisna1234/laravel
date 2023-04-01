<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()//untuk menjalankan semua seeder
    {
      $this->call([
        ClassSeeder::class,//parent | pake konsep inherintence
        StudentSeeder::class//child
      ]);
    }
}
