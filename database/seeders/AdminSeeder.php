<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  User::create(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123456'),
                'gender' => 'male',
                'phone' => '01025640964',
                'birthday' => '1998-09-01',
            ]
        );

        $user->assignRole('admin');
    }
}
