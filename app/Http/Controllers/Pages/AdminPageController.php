<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;

class AdminPageController extends Controller
{

    public function index() {
        SEOTools::setTitle('IterarCo | Admin Dashboard ');
        SEOTools::setDescription('');
        return view('pages.page-admin.admin');
    }

    public function login() {
        return 'AUTH_LOGIN';
    }

    public function logout() {
        return 'AUTH_LOGOUT';
    }

}
