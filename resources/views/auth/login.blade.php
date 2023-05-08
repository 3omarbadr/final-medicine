<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/web/css/final_style.css')}}" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form class="sign-in-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    @error('email')
                    <span class="invalid-feedback" style="color: #721c24;
                    background-color: #f8d7da;
                    border-color: #f5c6cb;
                    padding: 0.75rem 1.25rem;
                    margin-bottom: 1rem;
                    border: 1px solid transparent;
                    border-radius: 0.25rem;" role="alert">
                        <strong style="font-weight: bold;">{{ $message }}</strong>
                    </span>
                    @enderror
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" placeholder="Email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" style="color: #721c24;
                        background-color: #f8d7da;
                        border-color: #f5c6cb;
                        padding: 0.75rem 1.25rem;
                        margin-bottom: 1rem;
                        border: 1px solid transparent;
                        border-radius: 0.25rem;" role="alert">
                            <strong style="font-weight: bold;">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                    old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn solid">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <form action="{{route('register')}}" method="GET">
                        <button class="btn transparent">
                            Sign up
                        </button>
                    </form>
                </div>
                <img src="{{asset('assets/web/img/log.svg')}}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="{{asset('assets/web/img/register.svg')}}" class="image" alt="" />
            </div>
        </div>
    </div>
</body>

</html>