<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|regex:/^[a-zA-Z\s]+$/|max:100',
            'email' => 'required|email|unique:profiles,email,|max:255',
            'phone_number' => 'required|regex:/^[0-9]+$/|max:20',
            'address' => 'required|regex:/^[a-zA-Z0-9\s,.-]+$/|max:255',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $path = $request->file('resume')->store('resumes');

        Profile::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'resume' => $path,
        ]);

        return redirect()->route('profiles.index')->with('success', 'Profile created successfully.');
    }

    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'full_name' => 'required|regex:/^[a-zA-Z\s]+$/|max:100',
            'email' => 'required|email|unique:profiles,email,|max:255' . $profile->id,
            'phone_number' => 'required|regex:/^[0-9]+$/|max:20',
            'address' => 'required|regex:/^[a-zA-Z0-9\s,.-]+$/|max:255',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $data = $request->only(['full_name', 'email', 'phone_number', 'address']);

        if ($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resumes');
            $data['resume'] = $path;
        }

        $profile->update($data);

        return redirect()->route('profiles.index')->with('success', 'Profile updated successfully.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')->with('success', 'Profile deleted successfully.');
    }

    public function resume(Profile $profile)
    {
        $path = storage_path('app/' . $profile->resume);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }
}
