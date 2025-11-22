<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreConferenceRequest;
use App\Http\Requests\UpdateConferenceRequest;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::orderBy('date', 'desc')->orderBy('time', 'desc')->get();

        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(StoreConferenceRequest $request)
    {
        Conference::create($request->validated());

        return redirect()
            ->route('admin.conferences.index')
            ->with('success', __('messages.conference_created'));
    }

    public function edit(Conference $conference)
    {
        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(UpdateConferenceRequest $request, Conference $conference)
    {
        $conference->update($request->validated());

        return redirect()
            ->route('admin.conferences.index')
            ->with('success', __('messages.conference_updated'));
    }

    public function destroy(Conference $conference)
    {
        if ($conference->date < now()->toDateString()) {
            return redirect()
                ->route('admin.conferences.index')
                ->with('error', __('messages.cannot_delete_past_conference'));
        }

        $conference->delete();

        return redirect()
            ->route('admin.conferences.index')
            ->with('success', __('messages.conference_deleted'));
    }
}
