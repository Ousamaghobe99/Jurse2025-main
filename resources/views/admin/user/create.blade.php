@php use Iya30n\DynamicAcl\Models\Role; @endphp
@extends('layouts.app')

@section('title', 'Créer un Utilisateur')

@section('content_header')
    <h1>Créer un Utilisateur</h1>
@stop

@section('content')
    <form action="{{ route('admin.user.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmer le mot de passe :</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                   required>
        </div>
        <div class="form-group">
            <label for="role_id">Rôle :</label>
            <select class="form-control" id="role_id" name="role_id">
                <option value="">Aucun rôle</option>
                @foreach(Role::all() as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <!-- Autres champs -->
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
