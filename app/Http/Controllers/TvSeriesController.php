<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTvSeriesRequest;
use App\Http\Requests\UpdateTvSeriesRequest;
use App\TvSeries;
use Illuminate\Http\Request;

class TvSeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tv_series = TvSeries::all();
        
        return view("tv_series.index", compact("tv_series"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tv_series.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTvSeriesRequest $request)
    {
        //title  original_title  nationality date  vote
        $data =  $request->validated();

        $show = TvSeries::create($data);

        return redirect()->route("tv_series.show", $show->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = TvSeries::findOrFail($id);
        return view("tv_series.show", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = TvSeries::findOrFail($id);
        return view("tv_series.edit", compact("show"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTvSeriesRequest $request, $id)
    {
        $data = $request->validated();
        $show = TvSeries::findOrFail($id);

        $show->update($data);

        return redirect()->route("tv_series.show", $show->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = TvSeries::findOrFail($id);
        $show->delete();
        return redirect()->route("tv_series.index");
    }
}
