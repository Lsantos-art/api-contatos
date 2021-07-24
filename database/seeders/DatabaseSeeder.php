<?php

namespace Database\Seeders;

use App\Models\Contatos;
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
        #$this->call(ContatosTableSeeder::class);
        Contatos::factory(100)->create();
    }
}
