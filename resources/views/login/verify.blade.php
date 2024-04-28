<html dir="ltr" lang="en-US" style="position: relative; min-height: 100%;"
      coupert-item="9AF8D9A4E502F3784AD24272D81F0381">
@include('head')

<body class="stretched has-plugin-easing has-plugin-bootstrap device-md">

@include('header')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">Verify Your Email Address</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">A fresh verification link has been sent to
                                your email address
                            </div>
                        @endif
                        <p>Before proceeding, please check your email for a verification link.If you did not receive
                            the email,</p>
                        <a href="#"
                           onclick="event.preventDefault(); document.getElementById('resend-form').submit();">
                            click here to request another.
                        </a>
                        <form id="resend-form" action="{{ route('verification.resend') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('footer')
</body>


</html>

