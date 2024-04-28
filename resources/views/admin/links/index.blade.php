@extends('layouts.app')


@section('title', 'Liste des Liens')

@section('content_header')
    <h1>Liste des Liens</h1>
@stop

@section('content')
    <a href="{{ route('admin.links.create') }}" class="btn btn-primary mb-3">Ajouter un nouveau lien</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>URL</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($links as $link)
            <tr>
                <td>{{ $link->id }}</td>
                <td>{{ $link->href }}</td>
                <td>
                    <a href="{{ route('admin.links.edit', $link->id) }}" class="btn btn-xs btn-info">Éditer</a>
                    <form action="{{ route('admin.links.delete', $link->id) }}" method="POST" style="display:inline;">
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
