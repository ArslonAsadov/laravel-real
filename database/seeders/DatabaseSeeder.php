<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
      Role::create(['name'=>'admin']);
      Role::create(['name='=>'user']);

    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}


