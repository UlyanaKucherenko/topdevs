<?php

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PragmaRX\Countries\Package\Countries;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = new Countries();
        $all_countries = $countries->all();
        foreach ($all_countries as $country) {
            if (isset($country['name']['common']) && isset($country['calling_codes'][0]) && isset($country['currencies'][0])) {
                if ($country['name']['common'] == 'Norway') {
                    DB::table('countries')->insert([
                        'name'      => $country['name']['common'],
                        'dial_code' => preg_replace('/\D+/', '', $country['calling_codes'][0]),
                        'iso_code'  => 'NO',
                    ]);
                } else {
                    DB::table('countries')->insert([
                        'name'      => $country['name']['common'],
                        'dial_code' => preg_replace('/\D+/', '', $country['calling_codes'][0]),
                        'iso_code'  => $country['iso_a2'],
                    ]);
                }
            }
        }


        $all_saved_countries = Country::all();
        foreach ($all_saved_countries as $saved_country) {
            $uploadedFlag = new \Illuminate\Http\UploadedFile(storage_path("fixtures/pictures/flags/" . strtolower($saved_country->iso_code) . ".png"), strtolower($saved_country->iso_code) . '.png');
            if ($uploadedFlag) {
                $saved_country->saveImage($uploadedFlag);
            }
        }
    }
}
