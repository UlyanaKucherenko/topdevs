<?php

use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use Illuminate\Support\Str;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Portfolio::class)->create([
            'title' => 'Solocator',
            'slug' => Str::slug('Solocator'),
            'description' => 'Solocator app provides extensive possibilities for location tracking via data capture and overlays on the photos taken with a camera.',
            'sub_title' => 'A GPS Camera App For Fieldwork',
            'background_color' => 'radial-gradient(105.52% 496.75% at -0.83% 0%, #EDFFDE 0%, #E2FFCC 100%)',
            'link' => 'https://topdevs.org/portfolio/solocator'
        ]);

        factory(Portfolio::class)->create([
            'title' => 'Calibre',
            'slug' => Str::slug('Calibre'),
            'description' => 'Calibre is a kind of an electronic passport for expensive watches that allows watch owners to track the authenticity of a particular device.',
            'sub_title' => 'An Application For Luxury Watch Lovers',
            'background_color' => 'linear-gradient(110.04deg, #FFEBDC 1.51%, #FFEADA 18.23%, #FFE9D9 25.52%, #FFE9D8 32.95%, #FFE8D6 50.56%, #FFE6D3 75.24%, #FFE4CF 101.14%)',
            'link' => 'https://topdevs.org/portfolio/calibre'
        ]);

        factory(Portfolio::class)->create([
            'title' => 'Qliq',
            'slug' => Str::slug('Qliq'),
            'description' => 'Qliq is a powerful HIPAA-compliant communication platform connecting diverse medical institutions and patients.',
            'sub_title' => 'A Secure Messaging App For Healthcare',
            'background_color' => '#E3F5FF',
            'link' => 'https://topdevs.org/portfolio/qliq'
        ]);

        factory(Portfolio::class)->create([
            'title' => 'Pet Monitoring System',
            'slug' => Str::slug('Pet Monitoring System'),
            'description' => 'A pet camera app connecting pet parents with their adorable pets via live video streaming and interactive games playing at distance.',
            'sub_title' => 'A Video Streaming App For Pet Owners',
            'background_color' => '#EDEDED',
            'link' => 'https://topdevs.org/portfolio/pet-monitoring'
        ]);

        factory(Portfolio::class)->create([
            'title' => 'BabelBark',
            'slug' => Str::slug('BabelBark'),
            'description' => 'BabelBark is a website and mobile application uniting pet businesses, shelters, veterinary clinics and pet parents to take care of their pets.',
            'sub_title' => 'A Digital Ecosystem For Pet Lovers',
            'background_color' => '#EBF5FF',
            'link' => 'https://topdevs.org/portfolio/babelbark'
        ]);

        factory(Portfolio::class)->create([
            'title' => 'Beauty Streaming Service',
            'slug' => Str::slug('Beauty Streaming Service'),
            'description' => 'A beauty streaming service connecting beauty industry experts with their fans via special subscriptions to learn from the best.',
            'sub_title' => 'A Digital Platform for Beauty Fans',
            'background_color' => '#FFE2ED',
            'link' => 'https://topdevs.org/portfolio/beauty-streaming-service'
        ]);

        factory(Portfolio::class)->create([
            'title' => 'Helpy',
            'slug' => Str::slug('Helpy'),
            'description' => 'Helpy app is designed to help healthcare professionals in finding the fitting treatment or continued care for patients in a timely manner.',
            'sub_title' => 'A Mobile App for Healthcare Providers',
            'background_color' => 'radial-gradient(102.28% 430.59% at 0% 0%, #ECF4FF 0%, #C2DCFD 100%)',
            'link' => 'https://topdevs.org/portfolio/helpy'
        ]);

        factory(Portfolio::class)->create([
            'title' => 'Gerasyanov',
            'slug' => Str::slug('Gerasyanov'),
            'description' => 'A digital platform connecting fitness services providers with fitness enthusiasts that helps to improve health without being tied to a place.',
            'sub_title' => 'A Digital Ecosystem For Fitness Fans',
            'background_color' => '#FFEEFD',
            'link' => 'https://topdevs.org/portfolio/gerasyanov'
        ]);

        factory(Portfolio::class)->create([
            'title' => 'Meld',
            'slug' => Str::slug('Meld'),
            'description' => 'Meld is a dating platform for African Americans professionals that helps to find a perfect match or make friendship with new acquaintances.',
            'sub_title' => 'A Mobile Dating App For African Americans ',
            'background_color' => 'linear-gradient(113.63deg, #FFDBB9 -1.07%, #FFC48D 110.13%)',
            'link' => 'https://topdevs.org/portfolio/meld'
        ]);

        factory(Portfolio::class)->create([
            'title' => 'RealPage',
            'slug' => Str::slug('RealPage'),
            'description' => 'A mobile application for property managers and maintenance technicians aimed at increasing tenant satisfaction efficiently.',
            'sub_title' => 'A Property Management Tool For Real Estate',
            'background_color' => 'radial-gradient(105.52% 496.75% at -0.83% 0%, #E8F8FF 0%, #D5F0FC 100%)',
            'link' => 'https://topdevs.org/portfolio/real-page'
        ]);

        $portfolios = Portfolio::all();
        $services = \App\Models\Service::all();
        $industries = \App\Models\Industry::all();
        $technologies = \App\Models\Technology::all();

        foreach ($portfolios as $portfolio)
        {
            $portfolio->services()->sync($services->random());
            $portfolio->industries()->sync($industries->random());
            $portfolio->technologies()->sync($technologies->random());
        }
    }
}
