<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // User::factory()->create([
       //    'name' => 'Test User',
       //   'email' => 'test@example.com',
       // ]);


       //DB::table('users')->insert([
           // 'name' => Str::random(10),
          //  'email' => Str::random(10).'@example.com',
           // 'password' => Hash::make('password'),
       // ]);

        // Insert data mahasiswa menggunakna query builder
        //DB::table('mahasiswa')->insert([
          //  'npm' => '2428250005',
           // 'nama' => 'Jesslyn Kimiko',
          //  'tempat_lahir' => 'Metro',
           // 'tanggal_lahir'=> '2006-08-14'
        //]);

       // DB::table('mahasiswa')
       // ->where(['tempat_lahir' => 'Palembang',
       //     update(['tempat_lahir' => 'Palembang'])
       // ]);

        Mahasiswa::insert([
            'npm' => '2428250005',
            'nama' => 'Jesslyn Kimiko',
            'tempat_lahir' => 'Metro',
            'tanggal_lahir'=> '2006-08-14'
        ]);

        //retrieve all data
        //Mahasiswa::all();
                // SELECT * FROM Mahasiswa
        //Mahasiswa::where('id', '<', 3)-> get(); 
                // SELECT * FROM Mahasiswa WHERE id < 3
        //Mahasiswa::select(['npm', 'nama'])-> get();
                // SELECT npm, nama FROM Mahasiswa


    }
}
