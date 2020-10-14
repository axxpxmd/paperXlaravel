@php
$template = App\Models\Template::select('id', 'logo', 'logo_title', 'logo_auth')->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Title -->
    <link rel="icon" href="{{ asset('images/logo/'.$template->logo_title) }}" type="image/x-icon">
    <title>PAPER | Form Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
   
</head>
<body>
    <div class="container-contact100">
        <div class="wrap-contact100 mt-n5">
            <form method="POST" action="{{ route('login') }}" autocomplete="off" class="needs-validation" novalidate>
                @csrf
                <img class="mx-auto d-block mb-3" src="{{ asset('images/logo/'.$template->logo) }}" width="100">
                <p class="text-center fs-22">
                    Selamat Datang
                </p>
                <p class="text-center mb-4 mt-n3">Silahkan masukan username dan password Anda.</p>
                <div class="form-group has-icon"><i class="icon icon-user"></i>
                    <input type="username" class="form-control form-control-lg  @if ($errors->has('username')) is-invalid @endif" placeholder="username" name="username" autocomplete="off" value="{{ old('username') }}" required>
                    @if ($errors->has('username'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </div>
                    @endif
                </div>
                <div class="form-group has-icon"><i class="icon icon-user-secret"></i>
                    <input type="password" class="form-control form-control-lg @if ($errors->has('password')) is-invalid @endif" placeholder="Password" name="password" autocomplete="off" value="{{ old('password') }}" required>
                    @if ($errors->has('password'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                    @endif
                </div>
                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn">
                            <span>
                                Login
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
    <!-- Script -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/myScript.js') }}"></script>
    <script>
		window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
	</script>
    <script src="{{ asset('assets1/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
</html>