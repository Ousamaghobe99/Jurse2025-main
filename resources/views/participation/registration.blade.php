<html dir="ltr" lang="en-US" style="position: relative; min-height: 100%;"
      coupert-item="9AF8D9A4E502F3784AD24272D81F0381">

@include('head')
<body class="stretched has-plugin-easing has-plugin-bootstrap device-md">
@include('header')

<div style="margin-top: 10rem" class="py-1">
    <div class="container">


        <form action="{{ route('program.registration.store') }}" method="POST">
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
                <label for="organism">Organisme :</label>
                <input type="text" class="form-control" id="organism" name="organism">
            </div>
            <div class="form-group">
                <label for="special_session_id">Session Spéciale :</label>
                <select class="form-control" id="special_session_id" name="special_session_id">
                    <option value="">Sélectionner une session</option>
                    @foreach($specialSessions as $session)
                        <option value="{{ $session->id }}">{{ $session->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
</div>
