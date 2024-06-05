<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavedJobController extends Controller
{
    public function store(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $user = Auth::user();
        
        if (!$user->savedJobs->contains($job)) {
            $user->savedJobs()->attach($job);
        }

        return redirect()->route('jobs.index')->with('success', 'Job saved successfully.');
    }

    public function index()
    {
        $user = Auth::user();
        $savedJobs = $user->savedJobs;

        return view('saved_jobs.index', compact('savedJobs'));
    }
}


