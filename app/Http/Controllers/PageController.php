<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo 'Selamat Datang';
    }
    public function about(){
        echo 'Afvanie Rama Ardyansah - 2041720127';
    }
    public function articles($id){
        echo 'Halaman Artikel dengan Id ' . $id;
    }
}