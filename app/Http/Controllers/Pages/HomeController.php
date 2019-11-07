<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{

    public function index()
    {
        SEOTools::setTitle('IterarCo | Home Page');
        SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::setDescription('This is my page description');
        SEOMeta::addKeyword(['key1', 'key2', 'key3']);

        SEOTools::opengraph()->setTitle('Home');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::opengraph()->setDescription('This is my page description');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'pt-br');
        SEOTools::opengraph()->addProperty('locale:alternate', ['pt-pt', 'en-us']);

        SEOTools::twitter()->setTitle('Homepage');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::twitter()->addImage('https://codecasts.com.br/img/logo.jpg');

        SEOTools::jsonLd()->setType('Article');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        SEOTools::jsonLd()->setDescription('OLI');

        return view('pages.home');
    }

}
