<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        $conferences = Conference::orderBy('date')->orderBy('time')->get();

        return view('client.conferences.index', compact('conferences'));
    }

    public function show(Conference $conference)
    {
        return view('client.conferences.show', compact('conference'));
    }

    public function register(Conference $conference)
    {
        $user = Auth::user();
        if ($user->role !== 'client') {
            abort(403);
        }
        if ($conference->date < now()->toDateString()) {
            return back()->with('error', __('messages.cannot_register_past_conference'));
        }
        $alreadyRegistered = Registration::where('user_id', $user->id)
            ->where('conference_id', $conference->id)
            ->exists();

        if ($alreadyRegistered) {
            return back()->with('error', __('messages.already_registered'));
        }

        Registration::create([
            'user_id' => $user->id,
            'conference_id' => $conference->id,
        ]);

        return back()->with('success', __('messages.registered_successfully'));
    }
}
