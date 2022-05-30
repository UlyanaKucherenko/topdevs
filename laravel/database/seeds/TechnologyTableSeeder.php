<?php

use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(['Objective-C','Swift','Java','Kotlin','JavaScript','Vue.js','React.js','PHP','Laravel','Node.js','Express'])->map(function ($item){
            factory(Technology::class)->create(['name' => $item]);
        });
    }
}
