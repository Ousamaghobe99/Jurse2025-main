@extends('layouts.app')

@section('title', 'Éditer Page')

@section('content_header')
    <h1>Éditer Page</h1>
@stop

@section('content')
    <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Nom de la Page :</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $page->name }}" required>
        </div>
        <!-- Ajoutez d'autres champs si nécessaire -->
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
