<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // $student = Student::all();

        // return view('student', ['StudentList' => $student]);

        //query builder
        // $student = DB::table('students')->get();
        // dd ($student);

        //get data menggunakan eloquent
        // $student = Student::all();
        // dd ($student);

        // $student = Student::all();
        // return view('student', ['StudentList' => $student]);

        //insert data menggunakan query builder
        // DB::table('students')->insert([
        //     'name' => 'query builder',
        //     'gender' => 'Laki-Laki',
        //     'nis' => '0234987',
        //     'class_id' => 1
        // ]);

        //insert data menggunakan eloquent
        // Student::create([
        //     'name' => 'Eloquent',
        //      'gender' => 'Perempuan',
        //      'nis' => '0234789',
        //      'class_id' => 1
        // ]);

        //update data query builder
        // DB::table('students')->where('id', 18)->update([
        //     'name' => 'query builder 2',
        //     'class_id'=> '5'

        // ]);

        //update data dengan eloquent
        // Student::find(13)->update([
        //     'name' => 'Eloquery 2',
        //     'class_id' => 1
        // ]);

        //Delete menggunakan query builder
        // DB::table('students')->where('id', 21)->delete();

        //Delete menggunakan eloquent
        //Student::find(20)->delete();



        // Hitung rata-rata menggunakan php biasa
        // $nilai = [1, 2, 6, 7, 8, 9, 5, 4, 6, 3, 6, 10];
        // $countNilai = count ($nilai);
        // $totalNilai = array_sum($nilai);
        // $nilaiRataRata = $totalNilai / $countNilai;

        // dd ($nilaiRataRata);

        //collection

        // $nilai = [1, 2, 6, 7, 8, 9, 5, 4, 6, 3, 6, 10];
        // $nilaiRataRata = collect($nilai)->avg();

        // dd ($nilaiRataRata);

        //contains = cek apakah sebuah array memiliki sesuatu
        // $nilai = [1, 2, 6, 7, 8, 9, 5, 4, 6, 3, 6, 10];
        // $aa = collect($nilai)->contains(function ($value){
        //     return $value < 6;
        // });
        //dd($aa);

        //diff digunakan untuk melakukan perbandingan sebuah data di dalam array yang berbeda dan mengecek data apa saja yang tidak ada di kedua array tersebut
        // $restaurantA = ["Burger", "Spaghetti", "Pizza", "Kebab", "Pasta", "Kentang Goreng"];
        // $restaurantB = ["Burger", "Spagetti", "Pizza", "pecel lele", "Kebab", "Ramen", "Rujak"];
        // $menurestoA = collect($restaurantA)->diff($restaurantB);
        // dd ($menurestoA);

        // $nilai = [1, 2, 6, 7, 8, 9, 5, 4, 6, 3, 6, 10];
        // $aa = collect($nilai)->filter(function($value){
        //     return $value > 7;
        // })->all();
        // dd($aa);

        //Fungsi dari pluck
        // $biodata = [
        //     ['nama' => 'Budi', 'umur' => 17],
        //     ['nama' => 'Shinta', 'umur' => 18],
        //     ['nama' => 'Jojo', 'umur' => 18],
        //     ['nama' => 'Wendy', 'umur' => 21],
        //     ['nama' => 'Dona', 'umur' => 22],
        // ];
        // $aa = collect($biodata)->pluck('nama');
        // dd ($aa);




    }
}
