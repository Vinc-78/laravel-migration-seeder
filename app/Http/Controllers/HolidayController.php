<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayController extends Controller
{
    function index() {

        return view('vacanze');

    }
}
