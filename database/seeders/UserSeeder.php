<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->delete();
        $user = [
          "name" => "Anass Nabil",
          "email" => "anassnbbnnb@gmail.com",
          "password" => Hash::make("anassnbbnnb@gmail.com")
        ];
        User::create($user);
    }
}
