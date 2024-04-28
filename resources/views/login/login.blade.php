<html dir="ltr" lang="en-US" style="position: relative; min-height: 100%;"
      coupert-item="9AF8D9A4E502F3784AD24272D81F0381">
@include('head')

<body class="stretched has-plugin-easing has-plugin-bootstrap device-md">

@include('header')
<div style="top:-100px" class="container">

    <div class="row gutter-60 col-mt-80">
        <x-laravel-ui-adminlte::adminlte-layout>

            <body class="hold-transition login-page">
            <div class="login-box">
                <div class="login-logo">
                    <a href="{{ url('/home') }}"><b>{{ config('app.name') }}</b></a>
                </div>
                <!-- /.login-logo -->

                <!-- /.login-box-body -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <form method="post" action="{{ url('/login') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                       class="form-control @error('email') is-invalid @enderror">
                                <div class="input-group-append">
                                    <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                                </div>
                                @error('email')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input type="password" name="password" placeholder="Password"
                                       class="form-control @error('password') is-invalid @enderror">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                @error('password')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">Remember Me</label>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>

                            </div>
                        </form>

                        <p class="mb-1">
                            <a href="{{ route('password.request') }}">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                            <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                </div>

            </div>
            <!-- /.login-box -->
            </body>
        </x-laravel-ui-adminlte::adminlte-layout>
    </div>
</div>
@include('footer')
</body>


</html>

