<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorereportRequest;
use App\Http\Requests\UpdatereportRequest;
use App\Models\report;
use App\Models\Bounty;
use Illuminate\Http\Request;

class ReportController extends Controller
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
    public function create($id)
    {
        $bounty = bounty::findOrFail($id);
        return view('reportCreate', compact('bounty'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file_path' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        $report = new report();
        $report->bounty_id = $id;
        $report->user_id = auth('web')->id();
        $report->title = $request->input('title');
        $report->description = $request->input('description');

        // If there's an uploaded file, save it
        if ($request->hasFile('file_path')) {
            $filePath = $request->file('file_path')->store('reports');
            $report->file_path = $filePath;
        } else {
            $report->file_path = null; // Explicitly set to null if no file is uploaded
        }

        $report->save();

        return redirect()->route('bounty.details', ['id' => $id])->with('success', 'Report submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $report = Report::with(['bounty', 'user'])->findOrFail($id);
        return view('reportDetail', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereportRequest $request, report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(report $report)
    {
        //
    }
}
