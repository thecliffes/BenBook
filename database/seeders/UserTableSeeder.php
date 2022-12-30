<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a-> new User;
        $a->name = 'Ben';
        $a->email = 'bencliffe1@gmail.com';
        $a->password = 'hihello15';
        $a->save();
    }
}
