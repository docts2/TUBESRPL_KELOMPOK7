<?php

// app/Http/Controllers/ReviewController.php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, $jobId)
    {
        $request->validate([
            'review' => 'required|string',
        ]);

        $review = new Review();
        $review->job_id = $jobId;
        $review->user_id = Auth::id();
        $review->review = $request->input('review');
        $review->save();

        return redirect()->route('jobs.show', $jobId)->with('success', 'Ulasan berhasil ditambahkan.');
    }
}
