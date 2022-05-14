<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contato extends Controller
{
    public function index(){
        echo view('site.template.header');
        echo view('site.contato.index');
        echo view('site.template.footer');
    }
}
