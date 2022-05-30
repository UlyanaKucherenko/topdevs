<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(['IT Outsourcing','IT Outstaffing','Full Cycle Development','Web Development','Mobile App Development','UX/UI Design'])->map(function ($item){
            factory(Service::class)->create(['name' => $item]);
        });
    }
}
