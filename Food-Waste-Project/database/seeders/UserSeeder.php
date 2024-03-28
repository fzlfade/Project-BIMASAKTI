<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Mockery\Generator\StringManipulation\Pass\Pass;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234578')
         ]);
            $admin->assignRole('admin');

            
            $buyer = User::create([
                'name' => 'buyer',
                'email' => 'buyer@gmail.com',
                'password' => bcrypt('1234578')
            ]);

            $buyer->assignRole('buyer');

            $seller = User::create([
                'name' => 'seller',
                'email' => 'seller@gmail.com',
                'password' => bcrypt('1234578')
            ]);
            
            $seller->assignRole('seller');


    }
}
