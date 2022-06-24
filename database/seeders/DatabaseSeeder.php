<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PortfolioPostSeeder::class,
            PortfolioPostImageSeeder::class,

            autotishSeeder::class,
            rassaSeeder::class,
            zasorovNetSeeder::class,
            boevaSeeder::class,
            caramelSeeder::class,
            clrpdsSeeder::class,
            dmSeeder::class,
            donetskayaSeeder::class,
            easycomnewSeeder::class,
            enchiSeeder::class,
            evatonSeeder::class,
            grandSeeder::class,
            ideastroySeeder::class,
            interiernoSeeder::class,
            kuzdvorSeeder::class,

            lightsnabSeeder::class,
            makmolSeeder::class,
            marhenkoSeeder::class,
            bazamasterSeeder::class,
            
            naSeeder::class,
            nesterovaSeeder::class,
            onlinemediaSeeder::class,
            potapovSeeder::class,

            wegoSeeder::class,
            unarmySeeder::class,
            selengaSeeder::class,
            samosvalSeeder::class,
            samayaSeeder::class
            
        ]);
    }
}