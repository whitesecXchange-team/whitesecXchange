<?php

namespace App\Http\Controllers;

use App\Models\bounty;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnArgument;

class Controller
{
    function show_home() {
        return view('home');
    }

    function show_contact_us() {
        return view('contactus');
    }

    function show_about_us() {
        return view('aboutus');
    }

    function show_bounties() {

        $bounties = bounty::with('company')->get();

        return view('bounties', compact('bounties'));
    }

    function show_reports_page() {
        return view('reports');
    }

    function show_details_bounty() {
        return view('detailsBounty');
    }
}
