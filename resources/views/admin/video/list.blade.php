@extends('layouts.app')

@section('title', 'Liste des Vidéos')

@section('content_header')
    <h1>Liste des Vidéos</h1>
@stop

@section('content')
    <a href="{{ route('admin.videos.create') }}" class="btn btn-primary mb-3">Ajouter une nouvelle vidéo</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Type</th>
            <th>Chemin/URL</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($videos as $video)
            <tr>
                <td>{{ $video->id }}</td>
                <td>{{ $video->title }}</td>
                <td>{{ $video->type }}</td> <!-- Assurez-vous que le modèle de vidéo a un champ 'type' -->
                <td>{{ $video->vpath }}</td>
                <td>
                    <a href="{{ route('admin.videos.edit', $video->id) }}" class="btn btn-xs btn-info">Éditer</a>
                    <form action="{{ route('admin.videos.delete', $video->id) }}" method="POST" style="display:inline;">
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
