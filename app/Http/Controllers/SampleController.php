<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrUpdateSampleRequest;
use App\Http\Resources\SampleCollection;
use App\Http\Resources\SampleResouce;
use App\Models\Sample;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Http\Resources\SampleCollection
     */
    public function index(): SampleCollection
    {
        return new SampleCollection(Sample::orderByDesc('created_at')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrUpdateSampleRequest  $request
     * @return string[]
     */
    public function store(StoreOrUpdateSampleRequest $request)
    {
        Sample::create($request->validated());

        return ['message' => 'created'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sample  $sample
     * @return \App\Http\Resources\SampleResouce
     */
    public function show(Sample $sample): SampleResouce
    {
        return new SampleResouce($sample);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrUpdateSampleRequest  $request
     * @param  \App\Models\Sample  $sample
     * @return \App\Http\Resources\SampleResouce
     */
    public function update(StoreOrUpdateSampleRequest $request, Sample $sample): SampleResouce
    {
        $sample->update($request->validated());

        return new SampleResouce($sample);
    }
}
