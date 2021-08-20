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

    /**
     * @return View
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * @return View
     */
    public function dev(): View
    {
        return view('pages.dev');
    }

    /**
     * @return View
     */
    public function digital(): View
    {
        return view('pages.digital');
    }

    /**
     * @return View
     */
    public function graphic(): View
    {
        return view('pages.graphic');
    }

    /**
     * @return View
     */
    public function media(): View
    {
        return view('pages.media');
    }

    /**
     * @return View
     */
    public function motion(): View
    {
        return view('pages.motion');
    }
}
