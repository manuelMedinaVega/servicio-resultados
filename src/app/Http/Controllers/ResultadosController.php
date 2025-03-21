<?php

namespace App\Http\Controllers;

use App\Services\AnalisisApiService;
use App\Services\PostulacionesApiService;
use Illuminate\Http\Request;

class ResultadosController extends Controller
{
    public function index()
    {
        $postulacionesApiService = new PostulacionesApiService();
        $positions = $postulacionesApiService->call('positions', []);
        //dd($positions);
        return view('index', [
            'positions' => $positions['data']
        ]);
    }

    public function results($positionId)
    {
        $analisisApiService = new AnalisisApiService();
        $postulacionesApiService = new PostulacionesApiService();
        $results = $analisisApiService->call('results/'.$positionId, []);
        //dd($results);
        $positionData = $postulacionesApiService->call('positions/'.$positionId, []);
        $data = [];
        foreach($results['data'] as $result) {
            $userData = $postulacionesApiService->call('users/'.$result['user_id'], []);
            $data[] = [
                'userData' => $userData,
                'result' => $result['score']
            ];
        }
        return view('results', [
            'position' => $positionData,
            'results' => $data
        ]);
    }
}
