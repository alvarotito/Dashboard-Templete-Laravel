<?php

use App\Http\Controllers\ContribuinteController;
use App\Http\Controllers\DebitosController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\EscrituracaoController;
use App\Http\Controllers\FacilitadoresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndicadoresController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home/resumo-pendencias-fiscais', [HomeController::class, '__invoke'])->name('resumo');

Route::get('/contribuinte/dados-cadastrais', [ContribuinteController::class, 'index'])->name('dados');

Route::get('/escrituracao/apuracao-efd', [EscrituracaoController::class, 'apuracao'])->name('apuracao');
Route::get('/escrituracao/debitos-fiscais', [EscrituracaoController::class, 'debitos'])->name('debitos');
Route::get('/escrituracao/registros', [EscrituracaoController::class, 'registros'])->name('registros');

Route::get('/debitos-fiscais/detalhes', [DebitosController::class, 'detalhes'])->name('detalhes');
Route::get('/debitos-fiscais/daes-emitidos', [DebitosController::class, 'dae'])->name('dae');

Route::get('/indicadores/arrecadacao', [IndicadoresController::class, 'arrecadacao'])->name('arrecadacao');
Route::get('/indicadores/cte', [IndicadoresController::class, 'ct'])->name('cte');
Route::get('/indicadores/eventos-nfe', [IndicadoresController::class, 'eventos'])->name('eventos');
Route::get('/indicadores/mdfe', [IndicadoresController::class, 'mdf'])->name('mdfe');
Route::get('/indicadores/nfe', [IndicadoresController::class, 'nf'])->name('nfe');
Route::get('/indicadores/nfce', [IndicadoresController::class, 'nfc'])->name('nfce');
Route::get('/indicadores/omissao', [IndicadoresController::class, 'omissao'])->name('omissao');
Route::get('/indicadores/pagamento', [IndicadoresController::class, 'pagamento'])->name('pagamento');

Route::get('/documentos-fiscais/arquivos-cfe', [DocumentosController::class, 'cf'])->name('arquivo-cfe');
Route::get('/documentos-fiscais/arquivos-cte', [DocumentosController::class, 'ct'])->name('arquivo-cte');
Route::get('/documentos-fiscais/manifestacao-destinatario', [DocumentosController::class, 'manifestacao'])->name('manifestacao');
Route::get('/documentos-fiscais/arquivo-nfe', [DocumentosController::class, 'nf'])->name('arquivo-nfe');
Route::get('/documentos-fiscais/arquivo-nfce', [DocumentosController::class, 'nfc'])->name('arquivo-nfce');

Route::get('/facilitadores/atendimento', [FacilitadoresController::class, 'atendimento'])->name('atendimento');
Route::get('/facilitadores/auditoria', [FacilitadoresController::class, 'auditoria'])->name('auditoria');
Route::get('/facilitadores/perguntas', [FacilitadoresController::class, 'perguntas'])->name('perguntas');


Route::post('/detalhamento', [HomeController::class, 'detalhamento'])->name('detalhamento');
Route::post('/lista-pendencias', [HomeController::class, 'listaPendencias'])->name('lista-pendencias');

Route::get('/teste', [HomeController::class, 'teste']);
