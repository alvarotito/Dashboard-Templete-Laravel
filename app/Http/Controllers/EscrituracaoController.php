<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscrituracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apuracao()
    {
        return view('site.escrituracao.apuracao');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function debitos()
    {
        return view('site.escrituracao.debitos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registros()
    {
        return view('site.escrituracao.registros');
    }
}
