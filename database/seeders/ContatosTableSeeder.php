<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table("contatos")->insert([
            "name" => $faker->name(),
            "email" => $faker->safeEmail,
            "facebook_link" => 'facebook-fake.com.br',
            "linkedin_link" => 'linkedin-fake.com.br',
        ]);
    }
}
