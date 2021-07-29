<?php

namespace App\Http\Controllers;

use App\Models\Dress;
use Illuminate\Http\Request;

class DressesController extends Controller
{
  public function all() {
    $dresses = Dress::all();

    return $dresses;
  }
}
