<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()->count(20)->create();

    }
//         Schema::disableForeignKeyConstraints();
//         Student::truncate();
//         Schema::enableForeignKeyConstraints();

//         $data = [
//             ['name' => 'aiu', 'gender' => 'perempuan', 'nis' => '01001010', 'class_id' => 2],
//             ['name' => 'Firjaun', 'gender' => 'laki-laki', 'nis' => '02001010', 'class_id' => 2],
//             ['name' => 'bagas', 'gender' => 'laki-laki', 'nis' => '03001010', 'class_id' => 2],
//             ['name' => 'Mikha', 'gender' => 'perempuan', 'nis' => '04001010', 'class_id' => 2],
//         ];

//         foreach ($data as $value) {
//             Student::insert([//digunakan untuk database yang masih kosong
//                 'name' => $value['name'],
//                 'gender' => $value['gender'],
//                 'nis' => $value['nis'],
//                 'class_id' => $value['class_id'],
//                 'created_at' => Carbon::now(),
//                 'updated_at' => Carbon::now()
//             ]);
//         }
//     }
}
