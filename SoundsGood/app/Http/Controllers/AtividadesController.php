<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtividadesController extends Controller
{
    public function index()
    {
        // Procura por: resources/views/atividades/index.blade.php
        return view('atividades.index');
    }

    public function respiracao()
    {
        // Procura por: resources/views/atividades/respiracao.blade.php
        return view('atividades.respiracao');
    }

    public function meditacao()
    {
        // Procura por: resources/views/atividades/meditacao.blade.php
        return view('atividades.meditacao');
    }

    public function alongamento()
    {
        // Procura por: resources/views/atividades/alongamento.blade.php
        return view('atividades.alongamento');
    }

    public function sonsCalmantes()
    {
        // Procura por: resources/views/atividades/sons-calmantes.blade.php
        return view('atividades.sons-calmantes');
    }
}
