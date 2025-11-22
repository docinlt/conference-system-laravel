<?php

namespace App\Http\Controllers;

use App\Models\Conference;

class EmployeeController extends Controller
{
    public function index()
    {
        $conferences = Conference::orderBy('date', 'desc')->orderBy('time', 'desc')->get();

        return view('employee.conferences.index', compact('conferences'));
    }

    public function show(Conference $conference)
    {
        $conference->load('registrations.user');

        return view('employee.conferences.show', compact('conference'));
    }
}
