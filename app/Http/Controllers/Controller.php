<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Breakdown;
use App\Models\Random;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function generate()
    {
        $faker = \Faker\Factory::create();
        for($r=1; $r<=random_int(5,10);$r++){
            $random = Random::create([
                'values' =>  $faker->lastname
            ]);

            for($i=1; $i<=random_int(5,10);$i++){
                $alphaNumeric = $faker->md5;
                $breakdown = Breakdown::create([
                    'values' =>  substr($alphaNumeric, 0, 5),
                    'random_id' => $random->id
                ]);
            }
        }
        
        return redirect(route('home'));
    }

    public function home()
    {
        return view('welcome')->with('randoms', Random::all());
    }

}
