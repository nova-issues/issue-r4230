<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['Manager', 'Staff', 'Moderator'] as $role) {
            Role::forceCreate([
                'name' => $role,
            ]);
        }
    }
}
