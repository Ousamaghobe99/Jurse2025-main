<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialSessionsRequest;
use App\Models\SpecialSessions;

class SpecialSessionsController extends Controller
{
    public function index()
    {
        return SpecialSessions::all();
    }

    public function store(SpecialSessionsRequest $request)
    {
        return SpecialSessions::create($request->validated());
    }

    public function show(SpecialSessions $specialSessions)
    {
        return $specialSessions;
    }

    public function update(SpecialSessionsRequest $request, SpecialSessions $specialSessions)
    {
        $specialSessions->update($request->validated());

        return $specialSessions;
    }

    public function destroy(SpecialSessions $specialSessions)
    {
        $specialSessions->delete();

        return response()->json();
    }
}
