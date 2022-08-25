<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Stuart'],
            ['name' => 'Lan'],
            ['name' => 'Adam'],
            ['name' => 'Tyler']
        ]);

        DB::table('projects')->insert([
            ['name' => 'Websocket Upgrades'],
            ['name' => 'Angular Upgrade'],
            ['name' => 'E-Commerce Website'],
        ]);

        DB::table('tasks')->insert([
            [
                'name' => 'Product Pages',
                'project_id' => 3,
                'hours' => 5,
                'assigned_to' => 3
            ],
            [
                'name' => 'Shopping Cart',
                'project_id' => 3,
                'hours' => 10,
                'assigned_to' => 4
            ],
            [
                'name' => 'My Account',
                'project_id' => 3,
                'hours' => 5,
                'assigned_to' => 3
            ],
            [
                'name' => 'Add to Socket.IO',
                'project_id' => 1,
                'hours' => 2,
                'assigned_to' => 1
            ],
            [
                'name' => 'Enable Broadcasting',
                'project_id' => 1,
                'hours' => 5,
                'assigned_to' => 1
            ],
            [
                'name' => 'Adjust Interface',
                'project_id' => 1,
                'hours' => 3,
                'assigned_to' => 1
            ],
            [
                'name' => 'Upgrade Angular',
                'project_id' => 2,
                'hours' => 15,
                'assigned_to' => 2
            ],
            [
                'name' => 'Fix Broken Things',
                'project_id' => 2,
                'hours' => 10,
                'assigned_to' => 1
            ],
            [
                'name' => 'Test',
                'project_id' => 2,
                'hours' => 10,
                'assigned_to' => 2
            ]
        ]);
    }
}
