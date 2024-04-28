<html dir="ltr" lang="en-US" style="position: relative; min-height: 100%;">
@include('head')
<body class="stretched has-plugin-easing has-plugin-bootstrap device-md">
@include('header')

<div class="container mb-5">
    <div class="text-center">
        <h3>Sessions</h3>
        <div class="row">
            @foreach($special_sessions as $special_session)
                <div class="col-lg-6 mb-5">
                    <div class="mb-3">
                        <!-- Utiliser la fonction route() pour générer le lien -->
                        <a href="{{ route('special-sessions.show', ['slug' => Str::slug($special_session->id)]) }}">
                            <h4 class="titular-title gradient-horizon gradient-text ss-title mb-3">{{ $special_session->title }}</h4>
                        </a>
                        @foreach($special_session->authors as $author)
                            <small><i><b>{{ $author->firstname }} {{ $author->lastname }}</b>, {{ $author->organism }}
                                </i></small><br>
                        @endforeach
                    </div>
                    <!-- Utiliser la fonction route() ici aussi -->
                    <a href="{{ route('special-sessions.show', ['slug' => Str::slug($special_session->id)]) }}">
                        <button class="button button-border button-small button-rounded button-purple">Learn More
                        </button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@include('footer')
</body>
</html>
