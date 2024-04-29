<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controllers
{
    public function index()
    {

        return view('/Dashboard');
}


}
