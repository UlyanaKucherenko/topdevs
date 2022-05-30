<?php

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PictureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = \App\Models\Post::inRandomOrder()->limit(30)->get();
        $uploadedPostImage = new \Illuminate\Http\UploadedFile(storage_path('fixtures/pictures/post.png'), 'post.png');

        $solocator = new \Illuminate\Http\UploadedFile(storage_path('fixtures/pictures/solocator.png'), 'solocator.png');
        $babel_bark = new \Illuminate\Http\UploadedFile(storage_path('fixtures/pictures/babel-bark.png'), 'babel-bark.png');
        $beauty_streamin_service = new \Illuminate\Http\UploadedFile(storage_path('fixtures/pictures/beauty-streaming-service.png'), 'beauty-streaming-service.png');
        $calibre = new \Illuminate\Http\UploadedFile(storage_path('fixtures/pictures/calibre.png'), 'calibre.png');
        $gerasyanov = new \Illuminate\Http\UploadedFile(storage_path('fixtures/pictures/gerasyanov.png'), 'gerasyanov.png');
        $helpy = new \Illuminate\Http\UploadedFile(storage_path('fixtures/pictures/helpy.png'), 'helpy.png');
        $meld = new \Illuminate\Http\UploadedFile(storage_path('fixtures/pictures/meld.png'), 'meld.png');
        $pet_monitoring = new \Illuminate\Http\UploadedFile(storage_path('fixtures/pictures/pet-monitoring.png'), 'pet-monitoring.png');
        $qliq = new \Illuminate\Http\UploadedFile(storage_path('fixtures/pictures/qliq.png'), 'qliq.png');
        $real_page = new \Illuminate\Http\UploadedFile(storage_path('fixtures/pictures/real-page.png'), 'real-page.png');

        foreach ($posts as $post) {
            $post->saveImage($uploadedPostImage);
        }

        Portfolio::whereSlug('solocator')->first()->saveImage($solocator);
        Portfolio::whereSlug('babelbark')->first()->saveImage($babel_bark);
        Portfolio::whereSlug('beauty-streaming-service')->first()->saveImage($beauty_streamin_service);
        Portfolio::whereSlug('calibre')->first()->saveImage($calibre);
        Portfolio::whereSlug('gerasyanov')->first()->saveImage($gerasyanov);
        Portfolio::whereSlug('helpy')->first()->saveImage($helpy);
        Portfolio::whereSlug('meld')->first()->saveImage($meld);
        Portfolio::whereSlug('pet-monitoring-system')->first()->saveImage($pet_monitoring);
        Portfolio::whereSlug('qliq')->first()->saveImage($qliq);
        Portfolio::whereSlug('realpage')->first()->saveImage($real_page);
    }
}
