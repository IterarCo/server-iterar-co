<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        return view('pages.page-home.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
