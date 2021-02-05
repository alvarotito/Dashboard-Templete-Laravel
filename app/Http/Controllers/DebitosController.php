<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detalhes()
    {
        return view('site.debitos.detalhes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dae()
    {
        return view('site.debitos.dae');
    }
}
