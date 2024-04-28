<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorsRequest;
use App\Models\Authors;

class AuthorsController extends Controller
{
    public function index()
    {
        return Authors::all();
    }

    public function store(AuthorsRequest $request)
    {
        return Authors::create($request->validated());
    }

    public function show(Authors $authors)
    {
        return $authors;
    }

    public function update(AuthorsRequest $request, Authors $authors)
    {
        $authors->update($request->validated());

        return $authors;
    }

    public function destroy(Authors $authors)
    {
        $authors->delete();

        return response()->json();
    }
}
