@extends('layouts.app')

@section('title', 'Ajouter une Page')

@section('content_header')
    <h1>Ajouter une Page</h1>
@stop

@section('content')
    <form action="{{ route('admin.pages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom de la Page :</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <!-- Ajoutez d'autres champs si nécessaire -->
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
