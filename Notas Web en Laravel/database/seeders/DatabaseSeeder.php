<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Note;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
             'email' => 'leo@admin.com',
             'password' => bcrypt('123456789')
         ]);

         Note::factory(30)->create();
    }
}
