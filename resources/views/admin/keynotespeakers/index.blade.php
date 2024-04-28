@extends('layouts.app')

@section('title', 'Liste des Conférenciers')

@section('content_header')
    <h1>Liste des Conférenciers</h1>
@stop

@section('content')
    <a href="{{ route('admin.keynotespeakers.create') }}" class="btn btn-primary mb-3">Ajouter un Conférencier</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($keynoteSpeakers as $speaker)
            <tr>
                <td>{{ $speaker->id }}</td>
                <td>{{ $speaker->firstname }}</td>
                <td>{{ $speaker->lastname }}</td>
                <td>{{ $speaker->description }}</td>
                <td>
                    <a href="{{ route('admin.keynotespeakers.edit', $speaker->id) }}"
                       class="btn btn-xs btn-info">Éditer</a>
                    <form action="{{ route('admin.keynotespeakers.delete', $speaker->id) }}" method="POST"
                          style="display:inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-xs btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
