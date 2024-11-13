<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserdashboardController extends Controller
{
    //


    // show  user index page start 

   public function index(){


    return view('userdashboard.index');
   }
}
