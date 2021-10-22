<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    public static $quotes = array(
        "The Black Knight Always Triumphs! - Monty Python",

        "Anyone who has never made a mistake has never tried anything new - Albert Einstein",

        "Never Stop Exploring - The North Face",

        "Be yourself; everyone else is already taken - Oscar Wilde",

        "So many books, so little time - Frank Zappa",

        "Be the change that you wish to see in the world - Mahatma Gandhi",

    );
    public static $images = array(
        "https://storage.googleapis.com/ariosg-bucket-images/1.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/2.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/3.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/4.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/5.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/6.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/7.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/8.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/9.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/10.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/11.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/12.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/13.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/14.jpg",

        "https://storage.googleapis.com/ariosg-bucket-images/15.jpg"
    );

    public function index()

    {

        $totalQuotes = (count(Controller::$quotes));

        $randomNumber = (rand(0, ($totalQuotes - 1)));

        $randomQuote = Controller::$quotes[$randomNumber];

        return response()->json(['quote' => $randomQuote, 'server_ip' => gethostbyname(gethostname())]);
    }

    public function images(){
        $totalImages = (count(Controller::$images));
        $randomNumber = (rand(0,($totalImages-1)));
        $randomImage = Controller::$images[$randomNumber];
        return response("echo \"<img src=\"".$randomImage."\" alt=\"\">\"\nserver_ip=>".gethostbyname(gethostname()));
    }
}
