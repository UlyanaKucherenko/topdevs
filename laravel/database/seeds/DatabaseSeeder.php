<?php

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
        $this->call(IndustriesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(TechnologyTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PortfolioTableSeeder::class);
        $this->call(PictureTableSeeder::class);
    }
}
