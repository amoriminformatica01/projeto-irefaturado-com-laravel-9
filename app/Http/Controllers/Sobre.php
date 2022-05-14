<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sobre extends Controller
{
    public function index(){


        echo view('site.template.header');
        echo view('site.sobre.index');
        echo view('site.template.footer');
    }
}
