<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        \App\Models\Category::factory(4)->create();
        \App\Models\OrderProduct::factory(10)->create();
        \App\Models\ShippingAddress::factory()->count(10)->create();
        \App\Models\CategoryProduct::factory(10)->create();
    }
}
