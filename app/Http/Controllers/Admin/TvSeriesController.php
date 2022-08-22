<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $tv_series= TvSeries::all();
        
        return view("admin.tv_series.index", compact('tv_series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.tv_series.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTvSeriesRequest $request)
    {
        // dump($request->all());
        $data = $request->validated();

        $newSeries = new TvSeries();

        $newSeries->fill($data);
        $newSeries->save();

        return redirect()->route("admin.tv_series.show", $newSeries->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tvShow= TvSeries::findOrFail($id);

        return view("admin.tv_series.show",compact("tvShow"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tvShow= TvSeries::findOrFail($id);

        return view("admin.tv_series.edit", compact("tvShow"));
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
        $data= $request->validated();
        $tvShow= TvSeries::findOrFail($id);

        $tvShow->update($data);

        return redirect()->route("admin.tv_series.show", $tvShow->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tvShow= TvSeries::findOrFail($id);
        $tvShow->delete();
        return redirect()->route("admin.tv_series.index");
    }
}
