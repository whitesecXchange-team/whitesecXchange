<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebountyRequest;
use App\Http\Requests\UpdatebountyRequest;
use App\Models\bounty;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

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
        return view('bountyCreate');
    }

    public function show_details_bounty($id)
    {
    // Retrieve a single bounty by ID, with its associated company
        $bounty = Bounty::with('company')->findOrFail($id);

        return view('detailsBounty', compact('bounty'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'reward' => 'required|numeric',
        ]);

        // Create the bounty in the database
        Bounty::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'reward' => $request->input('reward'),
            'company_id' => auth('company')->id(), // assumes company_id is the authenticated company's ID
        ]);

        // Redirect back to the bounties page with a success message
        return redirect()->route('bounties')->with('success', 'Bounty created successfully!');
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
