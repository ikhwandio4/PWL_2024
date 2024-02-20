<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {

        return " iwan (NIM: ''2241720028)";
    }

    public function articles($artikelId){
         return 'Halaman artikel dengan ID '.$artikelId;
    }


}
