<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs2 = Job::all();
        return view('jobs.index', compact('jobs2'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $location = $request->input('location');

        $query = Job::query();

        if ($keyword) {
            $query->where('title', 'like', '%' . $keyword . '%')
                  ->orWhere('description', 'like', '%' . $keyword . '%');
        }

        if ($location) {
            $query->where('location', 'like', '%' . $location . '%');
        }

        $jobs2 = $query->get();

        return view('jobs.index', compact('jobs2'));
    }

    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.show', compact('job'));
    }
}