<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = config('travels');

        foreach ($travels as $travel) {
            $Newtravel = new Travel();
            $Newtravel->travel_event = $travel["travel_event"];
            $Newtravel->number_of_visitors = $travel["number_of_visitors"];
            $Newtravel->available_locations = $travel["available_locations"];
            $Newtravel->price = $travel["price"];
            $Newtravel->description = $travel["description"];
            $Newtravel->save();
        }
    }
}
