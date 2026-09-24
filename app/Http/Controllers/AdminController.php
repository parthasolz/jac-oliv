<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function showLogin(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt($credentials)) {
            return back()->withErrors(['email' => 'Those admin credentials are not recognised.'])
                ->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function dashboard(): RedirectResponse
    {
        return redirect()->route('admin.applications');
    }

    public function applications(): View
    {
        return view('admin.applications', [
            'applications' => DB::table('applications')
                ->latest('created_at')
                ->get(),
        ]);
    }

    public function application(int $id): View
    {
        $application = DB::table('applications')->where('id', $id)->firstOrFail();

        return view('admin.application', [
            'application' => $application,
            'resumeAvailable' => $this->resumeFilePath($application->resume) !== null,
        ]);
    }

    public function downloadResume(int $id)
    {
        $application = DB::table('applications')->where('id', $id)->firstOrFail();
        $filePath = $this->resumeFilePath($application->resume);

        if ($filePath === null || ! is_file($filePath)) {
            abort(404, 'Resume file is not available in storage.');
        }

        return response()->download($filePath, basename($filePath), [
            'Content-Type' => 'application/pdf',
        ]);
    }

    private function resumeFilePath(?string $resume): ?string
    {
        $path = trim((string) $resume);

        if ($path === '') {
            return null;
        }

        $safeFileName = basename(str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $path));
        $storagePath = storage_path('app/public/uploads/resumes/' . $safeFileName);

        if ($safeFileName !== '' && is_file($storagePath)) {
            return $storagePath;
        }

        $diskPath = 'uploads/resumes/' . $safeFileName;
        if ($safeFileName !== '' && Storage::disk('public')->exists($diskPath)) {
            return Storage::disk('public')->path($diskPath);
        }

        return null;
    }

    public function contactMessages(): View
    {
        return view('admin.contact-messages', [
            'contactMessages' => DB::table('contact_messages')
                ->latest('created_at')
                ->get(),
        ]);
    }

    public function contactMessage(int $id): View
    {
        return view('admin.contact-message', [
            'message' => DB::table('contact_messages')->where('id', $id)->firstOrFail(),
        ]);
    }
}
