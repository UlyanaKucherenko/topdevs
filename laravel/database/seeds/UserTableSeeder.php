<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name' => 'admin1',
            'email' => 'admin@test.com',
            'password' => bcrypt('123123'),
        ]);
        factory(\App\User::class)->create([
            'name' => 'admin',
            'email' => 'admin@topdevs.org',
            'password' => bcrypt('SsJz(9X&gpQkKmdHDjy@gfCw'),
        ]);
    }
}
