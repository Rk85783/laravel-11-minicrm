<?php

namespace Database\Seeders;

use App\RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Role::create(['name' => 'admin']);
        // Role::create(['name' => 'user']);
        Role::create(['name' => RoleEnum::ADMIN]);
        Role::create(['name' => RoleEnum::USER]);
    }
}
