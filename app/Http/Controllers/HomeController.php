<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $query = DB::table('resumo_pends')->get();
        $collection = DB::table('resumo_pends')->select('ano')->get();
        $uniq = $collection->unique();
        $uniq->values()->all();

        return view('site.home.index', ['values' => $query, 'anos' => $uniq]);
    }


    public function listaPendencias(Request $request)
    {
        if ($request->ano != 0) {
            $query = DB::table('resumo_pends')->where('ano', $request->ano)->get();
            echo json_encode($query);
            return;
        } else {
            $query = DB::table('resumo_pends')->get();
            echo json_encode($query);
            return;
        }
    }

    public function detalhamento(Request $request)
    {
        $query = DB::table('nfe_pends')->where('resumo_id', $request->id)->limit(10)->offset($request->offset)->get();
        // $total = count(DB::select('select * from nfe_pends where resumo_id = ?', [$request->id]));
        $total = DB::table('nfe_pends')->get()->count();
        $query['total'] = $total;

        echo json_encode($query);
        return;
    }

    public function teste()
    {
        return view('site.teste.sidebar');
    }
}
