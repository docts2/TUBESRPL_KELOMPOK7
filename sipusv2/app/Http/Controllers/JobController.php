<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function save(Request $request)
    {
        // Logika untuk menyimpan lowongan pekerjaan
        // ...

        return response()->json(['message' => 'Lowongan pekerjaan berhasil disimpan']);
    }
}
