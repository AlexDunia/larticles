<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\articles;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    // public function run(): void
    // {
    //     // \App\Models\User::factory(10)->create();

    //     // \App\Models\User::factory()->create([
    //     //     'name' => 'Test User',
    //     //     'email' => 'test@example.com',
    //     // ]);
    // }

    public function run(){
    // articles::create(
    //     [
    //         'title' => 'New blog', 
    //         'body' => 'quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
    //     ],
    // );
    articles::factory(10)->create();
}

}
