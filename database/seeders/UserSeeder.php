<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        user::create([
            'name'=>'Admin',
            'role'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=> Hash::make('admin@gmail.com'),

        ]);
        user::create([
            'name'=>'user',
            'role'=>'user',
            'email'=>'user@gmail.com',
            'password'=> Hash::make('user@gmail.com'),

        ]);


    }
}
