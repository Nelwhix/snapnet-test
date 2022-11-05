<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Citizen;
use App\Models\Lga;
use App\Models\State;
use App\Models\Ward;
use Database\Factories\StateFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * Creating Model instances taking into consideration the necessary relationships
     *
     * @return void
     */
    public function run()
    {
        State::factory()
            ->has(Lga::factory()
                ->has(Ward::factory()
                    ->has(Citizen::factory()->count(10))
                ->count(10))
                ->count(10))
            ->count(10)->create();
    }
}
