<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\TvSeries;
use Illuminate\Http\Request;

class TvSeriesController extends Controller
{
    public function index()
    {
        $tv_series = TvSeries::all();

        return response()->json($tv_series);
    }
}
