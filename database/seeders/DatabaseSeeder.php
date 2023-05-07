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
        Region::factory(20)->create();
        Participant::factory(20)->create();
        Election::factory(20)->create();
        Bulletin::factory(20)->create();
        Vote::factory(20)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
