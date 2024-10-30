<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Gallery::create([
            'title'=>'title 1',
            'sub_title'=>'sub title 1',
            'image'=>'',
        ]);
        Gallery::create([
            'title'=>'title 2',
            'sub_title'=>'sub title 2',
            'image'=>'',
        ]);

        Gallery::create([
            'title'=>'title 3',
            'sub_title'=>'sub title 3',
            'image'=>'',
        ]);
    }
}