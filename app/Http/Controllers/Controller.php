<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function __construct()
  {
    $UTM = [
      'utm_source'   => $_GET['utm_source'] ?? null ?: "",
      'utm_medium'   => $_GET['utm_medium'] ?? null ?: "",
      'utm_campaign' => $_GET['utm_campaign'] ?? null ?: "",
      'utm_term'     => $_GET['utm_term'] ?? null ?: "",
      'utm_content'  => $_GET['utm_content'] ?? null ?: "",
    ];
    View::share('UTM', $UTM);

    $this->middleware(function ($request, $next) {
      $locale = config('app.fallback_locale');
      if (session('locale')) {
        $locale = session('locale');
      } else {
        session(['locale' => $locale]);
      }
      if (\Request::has('lang')) {
        $locale = \Request::get('lang');
        session(['locale' => $locale]);
      }
      \App::setLocale($locale);
      return $next($request);
    });
  }
}
