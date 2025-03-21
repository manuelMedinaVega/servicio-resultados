<?php

use App\Http\Controllers\ResultadosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ResultadosController::class, 'index']);

Route::get('position/{position_id}/results', [ResultadosController::class, 'results']);
