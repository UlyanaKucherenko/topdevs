<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'ENTERPRISE',
            'APP DEVELOPMENT',
            'SECURITY DATA',
            'LOGISTICS',
            'RETAIL',
            'FINANCE',
            'IOT',
        ];
        foreach ($tags as $tag)
        {
            factory(\App\Models\Tag::class)->create([
                'name' => $tag
            ]);
        }
    }
}
