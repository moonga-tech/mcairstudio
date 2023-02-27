<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
                    [
                        'name'=>'masteradmin',
                        'email'=>'moongamanongo3@gamil.com',
                        'password'=>bcrypt(123456789),
                        'role'=>0
                    ],
            ];
        foreach($users as $user)
        User::create($user);
    }
}
