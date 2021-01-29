<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Headquarter;

class HeadquarterController extends Controller
{
  public function indexHQ() {
      $headquarters = Headquarter::all();
      return view('pages.homeHQ', compact('headquarters'));
  }

  public function show($id)
  {
    // dd($id);
    $headquarter = Headquarter::findOrFail($id);
    return view('pages.headquarter', compact('headquarter'));
  }
}
