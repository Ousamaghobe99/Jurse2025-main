@extends('layouts.app')

@section('title', 'Éditer Auteur')

@section('content')
    <h1>Éditer Auteur</h1>
    <form action="{{ route('admin.authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="firstname">Prénom :</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $author->firstname }}">
        </div>
        <div class="form-group">
            <label for="lastname">Nom :</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $author->lastname }}">
        </div>
        <div class="form-group">
            <label for="organism">Organisme :</label>
            <input type="text" class="form-control" id="organism" name="organism" value="{{ $author->organism }}">
        </div>
        <div class="form-group">
            <label for="special_session_id">Session Spéciale :</label>
            <select class="form-control" id="special_session_id" name="special_session_id">
                <option value="">Sélectionner une session</option>
                @foreach($specialSessions as $session)
                    <option value="{{ $session->id }}">{{ $session->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
