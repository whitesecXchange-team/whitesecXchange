<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebountyRequest;
use App\Http\Requests\UpdatebountyRequest;
use App\Models\bounty;

class BountyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebountyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(bounty $bounty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bounty $bounty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebountyRequest $request, bounty $bounty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bounty $bounty)
    {
        //
    }
}
