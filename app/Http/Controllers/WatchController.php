<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use App\Popcorn;

class WatchController extends Controller
{
    //
    
    public function watch($token)
    {
        if(Popcorn::watch($token))
        {
            $movie = json_decode(Popcorn::watch($token));
            return View('default.watch', ['movie' => $movie]);
        }
        else
        {
            echo $token . ' error';
        }
    }
}
