<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Admin',
            'role_id'=>1,
            'email'=>'abd@company.com',
            'password'=>Hash::make('secret')
        ]);


        User::create([
            'name'=> 'user test',
            'role_id'=>2,
            'email'=>'user@company.com',
            'password'=>Hash::make('secrett')
        ]);
    }
}
