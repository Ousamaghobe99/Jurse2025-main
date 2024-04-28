@extends('layouts.app')

@section('title', 'Liste des Organisateurs')

@section('content_header')
    <h1>Liste des Organisateurs</h1>
@stop

@section('content')
    <a href="{{ route('admin.organizers.create') }}" class="btn btn-primary mb-3">Ajouter un Organisateur</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>SLC</th>
            <th>Ordre</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($organizers as $organizer)
            <tr>
                <td>{{ $organizer->id }}</td>
                <td>{{ $organizer->slc }}</td>
                <td>{{ $organizer->order }}</td>
                <td>
                    <a href="{{ route('admin.organizers.edit', $organizer->id) }}"
                       class="btn btn-xs btn-info">Éditer</a>
                    <form action="{{ route('admin.organizers.delete', $organizer->id) }}" method="POST"
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
