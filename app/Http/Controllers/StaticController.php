<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class StaticController extends Controller
{
    
    public function home(){

        return view('home');

    }

}