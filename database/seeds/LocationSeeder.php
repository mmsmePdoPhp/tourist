<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = public_path() . "/json/Iran96-97.json"; // ie: /var/www/laravel/app/storage/json/filename.json

        $json = json_decode(file_get_contents($path), true);

        foreach ($json as $key => $value) {
            $city = new Location();
                $city->latitude = $value['latitude'];
                $city->longitude = $value['longitude'];
                $city->province = $value['province'];
                $city->city = $value['city'];
                $city->state = $value['state'];
            $city->save();
        }
    }
}
