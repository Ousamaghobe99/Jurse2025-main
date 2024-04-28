@extends('layouts.app')

@section('title', 'Éditer Conférencier')

@section('content_header')
    <h1>Éditer Conférencier</h1>
@stop

@section('content')
    <form action="{{ route('admin.keynotespeakers.update', $keynoteSpeaker->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="firstname">Prénom :</label>
            <input type="text" class="form-control" id="firstname" name="firstname"
                   value="{{ $keynoteSpeaker->firstname }}" required>
        </div>
        <div class="form-group">
            <label for="lastname">Nom :</label>
            <input type="text" class="form-control" id="lastname" name="lastname"
                   value="{{ $keynoteSpeaker->lastname }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea class="form-control" id="description"
                      name="description">{{ $keynoteSpeaker->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
