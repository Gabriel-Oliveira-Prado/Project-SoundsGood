<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Exibe a página inicial.
     */
    public function home()
    {
        // Corresponde ao arquivo: resources/views/pages/home.blade.php
        return view('pages.home');
    }

    /**
     * Exibe a página de login.
     */
    public function login()
    {
        // Corresponde ao arquivo: resources/views/pages/login.blade.php
        return view('pages.login');
    }
}
