<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilitadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function atendimento()
    {
        return view('site.facilitadores.atendimento');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auditoria()
    {
        return view('site.facilitadores.auditoria');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perguntas()
    {
        return view('site.facilitadores.perguntas');
    }
}
