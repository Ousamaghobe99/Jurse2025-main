@extends('layouts.app')

@section('title', 'Ajouter un Sponsor')

@section('content_header')
    <h1>Ajouter un Sponsor</h1>
@stop

@section('content')
    <form action="{{ route('admin.sponsors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="slc">SLC :</label>
            <input type="text" class="form-control" id="slc" name="slc" required>
        </div>
        <div class="form-group">
            <label for="order">Ordre :</label>
            <input type="number" class="form-control" id="order" name="order" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
