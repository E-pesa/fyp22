<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonInterval;

class PagesController extends Controller
{
    public function home()
    {
      $now = new Carbon();
      return view('Pages.home');
      dd($now);
    }
}
