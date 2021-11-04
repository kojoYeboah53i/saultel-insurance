<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(['name' => 'SuperAdmin']);
        Role::create(['name' => 'Partner']);
        Role::create(['name' => 'ServiceProvider']);
        Role::create(['name' => 'Agent']);
        Role::create(['name' => 'Subscriber']);
    }
}
