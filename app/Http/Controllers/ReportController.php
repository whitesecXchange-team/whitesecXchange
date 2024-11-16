<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorereportRequest;
use App\Http\Requests\UpdatereportRequest;
use App\Models\report;
use App\Models\Bounty;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

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
            $filePath = $request->file('file_path')->store('reports', 'public');
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



    public function download($id)
    {
        $report = Report::with('bounty')->findOrFail($id);
        $userId = auth('web')->id();
        $isUploader = $userId === $report->user_id;
        $isCompany = auth('company')->check() && auth('company')->id() === $report->bounty->company_id;

        if ($isUploader || $isCompany) {
            $filePath = public_path('storage/' . $report->file_path);

            if (file_exists($filePath)) {
                return response()->download($filePath);
            } else {
                abort(404, 'File not found.');
            }
        }

        abort(Response::HTTP_FORBIDDEN, 'You are not authorized to download this file.');
    }

    public function approval(Request $request, $id)
    {
        $report = Report::with('bounty')->findOrFail($id);
        $userId = auth('web')->id();
        $isUploader = $userId === $report->user_id;
        $isCompany = auth('company')->check() && auth('company')->id() === $report->bounty->company_id;

// reject works, still fails on adding balance to user

        // if($isCompany)
        // {
            if($request->btn==1){
                Report::where('id', $id)->with('bounty')->with('user')->update([
                    'status' => 1,
                 ]);

                
                // Retrieve the bounty and report
                $report = report::findOrFail($id);
                $bounty = Bounty::findOrFail($report->bounty_id);

                // Get the bounty hunter (user who submitted the report)
                $bountyHunter = User::findOrFail($report->user_id);

                // Add the reward to the bounty hunter's balance
                $bountyHunter->balance += $bounty->reward;
                $bountyHunter->save();

            }

        if($request->btn==2){
            Report::where('id', $id)->update([
                'status' => 2
            ]);
            }
        // }

        return redirect()->route('reports.show', ['id' => $report->id])->with('success', 'Report Status Changed.');
    }

    //thanks griff
//     public function acceptReport($reportId)
// {
//     // Retrieve the bounty and report
//     $report = report::findOrFail($reportId);
//     $bounty = Bounty::findOrFail($report->bounty_id);

//     // Get the bounty hunter (user who submitted the report)
//     $bountyHunter = User::findOrFail($report->user_id);

//     // Add the reward to the bounty hunter's balance
//     $bountyHunter->balance += $bounty->reward;
//     $bountyHunter->save();
// }

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
