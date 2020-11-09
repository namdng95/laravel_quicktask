<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function changeLanguage($language)
    {
        Session::put('locale', $language);

        return redirect()->back();
    }
}

