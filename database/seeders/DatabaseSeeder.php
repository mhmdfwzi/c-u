<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gallery;
use App\Models\MetaData;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(MetaDataSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(ServiceProductSeeder::class);
        $this->call(GallerySeeder::class);


    }
}