<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use App\Models\ProductSpecification;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $this->call([
            RolesSeeder::class,
            UsersSeeder::class,
            ProductSpecificationSeeder::class,
            ProductCategorySeeder::class,
            SubCategorySeeder::class,
            StoreSeeder::class,
            ProductSpecificationTitleSeeder::class,
        ]);


        User::factory(10)->create();
    }
}
