<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-7 vh-100 d-flex justify-content-center align-items-center bg-blue">
                <h1 class="fs-1 text text-light font-archivo">
                    BOOKREVU
                </h1>
            </div>
            <div class="col-5 vh-100 d-flex justify-content-center align-items-center">
                <form action="{{ route('login') }}" method="POST" class="w-75 m-2">
                    @csrf
                    <h2 class="mb-4 fs-1 fw-bold">
                        Login
                    </h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter you email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter you password" required>
                    </div>

                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <div class="form-check m-0">
                            <input class="form-check-input" type="checkbox" value="" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>
                        <a href="/forgot">
                            Forgot Password?
                        </a>
                    </div>

                    <div class="mb-3 d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    <div class="d-flex justify-content-center">
                        <small>
                            Don't have account?
                            <a href="{{ route('register') }}">
                                Register
                            </a>
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
