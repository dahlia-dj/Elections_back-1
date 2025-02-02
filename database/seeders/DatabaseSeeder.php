<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\Participant;
use App\Models\Election;
use App\Models\Bulletin;
use App\Models\Vote;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //appelle la faction factory et genere 20 fois les objets de region
        Region::factory(10)->create();
        Participant::factory(200)->create();
        Election::factory(1)->create();
        Bulletin::factory(5)->create();
        Vote::factory(195)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
