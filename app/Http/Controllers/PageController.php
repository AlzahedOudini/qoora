<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('welcome');
    }
}
