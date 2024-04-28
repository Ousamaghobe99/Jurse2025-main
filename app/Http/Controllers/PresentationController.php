<?php

namespace App\Http\Controllers;

use App\Models\KeynoteSpeakers;
use App\Models\SpecialSessions;

class PresentationController extends Controller
{
    public function keynotes()
    {
        $keynoteSpeakers = KeynoteSpeakers::all();
        return view('presentation.keynotes', compact('keynoteSpeakers'));
    }

    public function special_sessions()
    {
        $special_sessions = SpecialSessions::with('authors')->get();

        return view('presentation.special_sessions', compact('special_sessions'));
    }

    public function show_special_session($slug)
    {
        $specialSession = SpecialSessions::where('id', $slug)->firstOrFail();
        return view('presentation.special-sessions.show', compact('specialSession'));
    }

    public function topics()
    {
        return view('presentation.topics');
    }

    public function technicalTutorials()
    {
        return view('presentation.technical-tutorials');
    }

    public function studentContest()
    {
        return view('presentation.student-contest');
    }

    public function exhibitors()
    {
        return view('presentation.exhibitors');
    }


}
