<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'roles-show',
            'roles-create',
            'roles-edit',
            'roles-delete',
            'users-show',
            'users-create',
            'users-edit',
            'users-delete',
            'orders-show',
            'orders-create',
            'orders-edit',
            'orders-delete',
            'pages-show',
            'pages-create',
            'pages-edit',
            'pages-delete',
            'products-services-show',
            'products-services-create',
            'products-services-edit',
            'products-services-delete',

            
                
         ];
      
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}