<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Menghapus data yang ada di tabel User untuk menyinkronkan data
        User::truncate(); // Hati-hati, ini akan menghapus semua data di tabel User

        // Mahasiswa
        User::create([
            'id' => '24060122130071',
            'username' => 'Mahasiswa Test',
            'email' => 'mahasiswa@test.com',
            'password' => Hash::make('password'), // Password terenkripsi
            'roles1' => 'mahasiswa',
            'roles2' => '', // Atau null jika tidak ada
            'created_at' => now(),
            'remember_token' => Str::random(100),
        ]);

        // Dosen
        User::create([
            'id' => '219700000000',
            'username' => 'Dosen Test',
            'email' => 'dosen@test.com',
            'password' => Hash::make('password'),
            'roles1' => 'dosen',
            'roles2' => '', // Misalnya
            'created_at' => now(),
            'remember_token' => Str::random(100),
        ]);

        // Membuat pengguna dengan role bagian akademik
        User::create([
            'id' => '219700000002',
            'username' => 'Bagian Akademik Test',
            'email' => 'akademik@test.com',
            'password' => Hash::make('password'),
            'roles1' => 'akademik',
            'roles2' => '', // Misalnya
            'created_at' => now(),
            'remember_token' => Str::random(100),
        ]);
        
        // Membuat pengguna dengan role dosen
        User::create([
            'id' => '219700000003',
            'username' => 'Dosen Test 1',
            'email' => 'dekan@test.com',
            'password' => Hash::make('password'),
            'roles1' => 'dosen',
            'roles2' => 'Dekan', // Misalnya
            'created_at' => now(),
            'remember_token' => Str::random(100),
        ]);

        User::create([
            'id' => '219700000004',
            'username' => 'Dosen Test 2',
            'email' => 'kaprodi@test.com',
            'password' => Hash::make('password'),
            'roles1' => 'dosen',
            'roles2' => 'Kaprodi', // Misalnya
            'created_at' => now(),
            'remember_token' => Str::random(100),
        ]);

        // Tambahkan user lain sesuai kebutuhan
    }
}
