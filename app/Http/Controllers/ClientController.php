<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function register(Request $request, Conference $conference)
    {
        // Demo variantas: paimame pirma client naudotoją
        $user = User::where('role', 'client')->first();

        if (! $user) {
            return redirect()
                ->route('client.conferences.show', $conference)
                ->with('error', __('messages.no_client_user'));
        }

        Registration::firstOrCreate([
            'user_id' => $user->id,
            'conference_id' => $conference->id,
        ]);

        return redirect()
            ->route('client.conferences.show', $conference)
            ->with('success', __('messages.registered_successfully'));
    }
}
