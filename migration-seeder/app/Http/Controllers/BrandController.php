<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Brand;

class BrandController extends Controller
{
  public function indexBrand()
  {
    $brands = Brand::all();
    return view('pages.homeBrand', compact('brands'));
  }

  public function show($id)
  {
    // dd($id);
    $brand = Brand::findOrFail($id);
    return view('pages.brand', compact('brand'));
  }
}
