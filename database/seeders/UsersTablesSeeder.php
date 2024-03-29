<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Luisa',
            'email'    => 'l@gmail.com',
            'password'   =>  Hash::make('password'),
            'remember_token' =>  null,
        ]);
    }
}
