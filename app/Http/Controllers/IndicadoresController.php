<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndicadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventos()
    {
        return view('site.indicadores.eventos');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mdf()
    {
        return view('site.indicadores.mdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ct()
    {
        return view('site.indicadores.ct');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nf()
    {
        return view('site.indicadores.nf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nfc()
    {
        return view('site.indicadores.nfc');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pagamento()
    {
        return view('site.indicadores.pagamento');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function arrecadacao()
    {
        return view('site.indicadores.arrecadacao');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function omissao()
    {
        return view('site.indicadores.omissao');
    }
}
