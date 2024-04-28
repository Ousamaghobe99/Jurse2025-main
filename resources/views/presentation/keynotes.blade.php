<html dir="ltr" lang="en-US" style="position: relative; min-height: 100%;"
      coupert-item="9AF8D9A4E502F3784AD24272D81F0381">

@include('head')
<body class="stretched has-plugin-easing has-plugin-bootstrap device-md">
@include('header')

<div class="container mb-5">

    <div class="text-center">
        <h3>Keynote Speakers</h3>
        <div class="row">
            @foreach($keynoteSpeakers as $speaker)
                <div class="col-lg-3 py-5 px-4 mb-5">
                    <img src="{{asset('images/keynotes/gustau.png')}}" alt="">
                </div>

                <div class="col-lg-3 text-start mb-5">
                    <h4 class="blue-color">    {{$speaker->firstname}}     {{$speaker->lastname}}</h4>

                    <p>
                        {{$speaker->description}}
                    </p>
                </div>
            @endforeach
        </div>
    </div>

</div>
