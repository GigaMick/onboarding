<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){

        return view('search-fueltype');

    }

    public function fueltype($token){

        $fueltype = $token;

        return view('search-size', compact('fueltype'));

    }
}
