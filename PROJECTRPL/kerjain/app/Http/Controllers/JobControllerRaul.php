<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobControllerRaul extends Controller
{
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('pages.detailpekerjaan', compact('job'));
    }
}
