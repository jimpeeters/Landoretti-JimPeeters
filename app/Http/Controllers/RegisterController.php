<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Country;
use View;


class RegisterController extends Controller
{
    public function index()
    {
        $countries =  ['default'=>'Kies een land'] + Country::orderby('nameDutch', 'ASC')->lists('nameDutch', 'id')->all();  
       // $countriesEnglish = ['default'=>'Choose a country'] + Country::orderby('nameEnglish', 'ASC')->lists('nameEnglish', 'id')->all();  

        return View::make('register')
            ->with('countries', $countries);
    }
}
