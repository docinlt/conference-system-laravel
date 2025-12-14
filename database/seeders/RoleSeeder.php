<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         foreach (['client', 'employee', 'admin'] as $name) {
        Role::firstOrCreate(['name' => $name]);
    }
    }
}
