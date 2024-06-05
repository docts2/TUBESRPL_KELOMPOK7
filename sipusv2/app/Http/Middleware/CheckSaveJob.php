<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckSaveJob
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login atau belum
        if (!Auth::check()) {
            return redirect('login');
        }

        // Simpan data user pada variabel $user
        $user = Auth::user();

        // Lanjutkan request jika user memiliki akses untuk menyimpan lowongan pekerjaan
        // Anda bisa menyesuaikan logika berikut sesuai dengan kebutuhan Anda, misalnya berdasarkan role atau permission
        if ($user->can('save-job')) {
            return $next($request);
        }
       
        // Jika tidak memiliki akses, kembalikan ke halaman login atau halaman lain dengan pesan error
        return redirect('login')->with('error', 'Maaf anda tidak memiliki akses');
    }
}
