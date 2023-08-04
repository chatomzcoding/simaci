<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function index(){
        $s = (isset($_GET['s'])) ? $_GET['s'] : 'index' ;
        switch ($s) {
            case 'value':
                # code...
                break;
            
            default:
                return view('landing.welcome');
                break;
        }
    }
}
