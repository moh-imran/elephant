<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
require 'public/directus/vendor/autoload.php';

class CommonController extends Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){

        $heroSlides = $this->client->getItems('hero_slideshow');
        $socialFeeds = $this->client->getItems('social_feeds');
        $newsTickerString = $this->getNews();

//        print_r($newsTickerString); exit;
        return view("index", ["slides" => $heroSlides, "feeds" => $socialFeeds, "newsList" => $newsTickerString ]);

    }

    public function getNews(){

         $newsTickers = $this->client->getItems('news_ticker');
         $newsTickerString = '';
         foreach($newsTickers as $newsTicker) {
             $newsTickerString = $newsTickerString . $newsTicker->news_ticker . ',';
         }
        $newsTickerString = rtrim($newsTickerString, ',');

         return $newsTickerString;

    }

    public function sendEmail(Request $request){

        $data = $request->validate(
            [

                'name' => 'required',
                'email' => 'required | email',
                'message' => 'required'
            ]
        );

        try {
            $newRequest = $this->client->createItem('contact_us', $data);

            if (isset($newRequest['id'])){
                //echo 'Message sent successfully.';
                return 1;
            }
            else{
                echo 'Message could not be sent successfully.';
            }
        }
        catch (\Exception $e) {
            echo 'Message could not be sent successfully.';
        }
    }

}
