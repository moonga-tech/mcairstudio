<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Nkosizani',
               'email'=>'nkosizani@mcair.com',
               'role'=> 0,
               'password'=> bcrypt('nkosizani123456'),
            ],
            [
               'name'=>'Editor',
               'email'=>'editor@mcair.com',
               'role'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'MasterAdmin',
               'email'=>'admin@mcair.com',
               'role'=> 2,
               'password'=> bcrypt('admin123456'),
            ],
            
        ];
    
        foreach ($users as $key => $user) 
        {
            User::create($user);
        }
    }
}
