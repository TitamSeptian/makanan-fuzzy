<?php

namespace Database\Seeders;

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
                'email' => 'niki@sirekan.com',
                'password' => bcrypt('12345678'),
                'name' => 'Niki',
            ],
            [
                'email' => 'nika@sirekan.com',
                'password' => bcrypt('12345678'),
                'name' => 'Nika',
            ],
            [
                'email' => 'reyhan@sirekan.com',
                'password' => bcrypt('12345678'),
                'name' => 'Reyhan',
            ],
            [
                'email' => 'reihan@sirekan.com',
                'password' => bcrypt('12345678'),
                'name' => 'Reihan',
            ],
            [
                'email' => 'septian@sirekan.com',
                'password' => bcrypt('12345678'),
                'name' => 'septian',
            ],
        ];

        foreach ($users as $data) {
            User::create($data);
        }
    }
}
