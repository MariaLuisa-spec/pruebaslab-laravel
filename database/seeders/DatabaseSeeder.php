<?php

namespace Database\Seeders;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PacienteSeeder::class);
        $this->call(UsersTablesSeeder::class);
    }
}
