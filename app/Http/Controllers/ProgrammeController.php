<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Models\SpecialSessions;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function index()
    {
        return view('participation.program');
    }

    public function guidelines()
    {
        return view('participation.guidelines');
    }

    public function call_for_papers()
    {
        return view('participation.call-for-papers');
    }

    public function registration()
    {
        $specialSessions = SpecialSessions::all();
        return view('participation.registration', compact('specialSessions'));
    }

    public function storeAuthor(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'organism' => 'nullable|string|max:255',
            'special_session_id' => 'nullable|exists:special_sessions,id',
        ]);

        $author = new Authors();
        $author->fill($validatedData);
        $author->save();

        return redirect()->route('accueil');
    }
}
