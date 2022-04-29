<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->setUp();
    }

    protected function setUp()
    {
        DB::transaction( function() {
            
            # seeders necesarios para el correcto funcionamiento del sistema.

            $this->call(CalleSeeder::class);

            // $this->call(BouncerSeeder::class);

            // $this->call(UserSeeder::class);

            // $this->call(GeoSeeder::class);

            // $this->call(ContactableSeeder::class);

            // $this->call(PersonalDataSeeder::class);
        });
    }
}
