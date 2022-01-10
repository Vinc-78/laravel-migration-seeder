<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class HolidayController extends Controller
{
    function index() {

        $viaggi=Travel::all();

        return $viaggi; 

       /*  return view('vacanze',
        ['singolTravel'=>$viaggi]
    ); */

    }
}
