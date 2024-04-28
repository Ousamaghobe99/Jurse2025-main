{{-- resources/views/special-sessions/show.blade.php --}}

<html dir="ltr" lang="en-US">
@include('head')
<body class="stretched has-plugin-easing has-plugin-bootstrap device-md">
@include('header')

<div class="container mb-5">
    <div class="text-center mt-2">
        <h3 class="titular-title gradient-horizon gradient-text mb-4">{{ $specialSession->title }}</h3>
        @foreach ($specialSession->authors as $author)
            <small><i><b>{{ $author->firstname }} {{ $author->lastname }}</b>, {{ $author->organism }}</i></small><br>
        @endforeach

        <div class="my-5 w-75 mx-auto">
            <p align="start" class="mb-3 h5">
                <b>Abstract</b>
            </p>
            <p align="justify">
                {{ $specialSession->description }} <!-- Remplacez 'abstract' par le nom de votre champ de description -->
            </p>
        </div>
    </div>
</div>

@include('footer')
</body>
</html>
