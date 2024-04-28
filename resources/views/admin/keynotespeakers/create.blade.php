@extends('layouts.app')

@section('title', 'Ajouter un Conférencier')

@section('content_header')
    <h1>Ajouter un Conférencier</h1>
@stop

@section('content')
    <form action="{{ route('admin.keynotespeakers.store') }}" method="POST">
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
            <label for="description">Description :</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
