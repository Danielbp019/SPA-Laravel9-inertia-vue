<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;//se agregan ambos
use App\Models\Note;

/* ejecutar migraciones y seeders: php artisan migrate --seed */
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
            'email' => 'i@admin.com',
            'password' => bcrypt('123456')
        ]);


        Note::factory(30)->create();
    }
}
