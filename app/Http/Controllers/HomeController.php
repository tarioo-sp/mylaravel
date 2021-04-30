<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = ['page' => 'Home'];


    return view('pages.home', compact('data'));
  }
}
