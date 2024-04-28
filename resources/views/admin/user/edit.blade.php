@extends('layouts.app')
@php
    use Iya30n\DynamicAcl\Models\Role;
@endphp
@section('title', 'Modifier Utilisateur')

@section('content_header')
    <h1>Modifier Utilisateur</h1>
@stop

@section('content')
    <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="password">Nouveau mot de passe (optionnel) :</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmer le nouveau mot de passe :</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <div class="form-group">
            <label for="role_id">Rôle :</label>
            <select class="form-control" id="role_id" name="role_id">
                <option value="">Aucun rôle</option>
                @foreach(Role::all()    as $role)
                    <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                        {{ $role->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <!-- Autres champs -->
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
