<?php

use Illuminate\Database\Seeder;
use App\Models\Industry;

class IndustriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(['Media & Entertainment','Sports & Fitness','Logistics & Tracking','Healthcare','Retail & E-Commerce','Education & E-Learning','Real Estate','Dating'])->map(function ($item){
            factory(Industry::class)->create(['name' => $item]);
        });
    }
}
