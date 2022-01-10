<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travels;

class HolidayController extends Controller
{
    function index() {

        $viaggi=Travels::all();

        return $viaggi; 

       /*  return view('vacanze',
        ['singolTravel'=>$viaggi]
    ); */

    }
}
