<?php

namespace Database\Seeders;

use App\Models\Contatos;
use App\Models\Telefone;
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
        $this->call(UserSeeder::class);
        Contatos::factory(100)->create();
        Telefone::factory(5)->create();
    }
}
