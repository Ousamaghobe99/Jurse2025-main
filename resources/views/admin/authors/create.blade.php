@extends('layouts.app')

@section('title', 'Ajouter un Auteur')

@section('content')
    <h1>Ajouter un Auteur</h1>
    <form action="{{ route('admin.authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="firstname">Prénom :</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Nom :</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="organism">Organisme :</label>
            <input type="text" class="form-control" id="organism" name="organism">
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
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
