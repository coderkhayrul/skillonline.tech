<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BlogCategory;
use App\Models\Brand;
use App\Models\Role;
use App\Models\User;
use App\Models\BlogTag;
use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'role_id' => 1, //password
            'phone' => '01835061968',
            'password' => Hash::make('password'), //password
        ]);

        $roles = [
            'Admin',
            'Editor',
            'User',
        ];

        foreach ($roles as $key => $role) {
            Role::create([
                'role_name' => $role,
                'role_slug' => uniqid(),
            ]);
        }

        BlogCategory::factory(20)->create();
        Brand::factory(20)->create();
        BlogTag::factory(20)->create();
        Page::factory(5)->create();

        $this->call([
            SetupSeeder::class,
        ]);
    }
}
