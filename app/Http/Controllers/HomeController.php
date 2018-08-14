<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use App\Popcorn;


class HomeController extends Controller
{
    use SEOToolsTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($moviepage = 1)
    {
        
        $pages = json_decode(Popcorn::pages());
        
        if($moviepage > Count($pages))
        {
            echo 'not sure how to handle that';
        }
        else
        {
            $page = preg_replace('/[^0-9]/', '' , $moviepage);
            $pages = preg_replace('/[^0-9]/', '' , $pages);
            $movies = json_decode(Popcorn::movies($page));
            $settings = DB::table('settings')->get();
            $this->seo()->setTitle($settings[0]->name . ' - Movie & TV streaming platform for the masses');
            $this->seo()->setDescription($settings[0]->description);
            $this->seo()->opengraph()->setUrl($settings[0]->url);
            $this->seo()->opengraph()->addProperty('type', 'articles');
            $this->seo()->twitter()->setSite('@cine-stream');
        
        
            if($settings[0]->live == 1)
            {
                return view('default.home', ['settings' => $settings, 'movies' => $movies, 'page' => $pages]);
            }
        else
            {
            
            }
        }
    }
}
