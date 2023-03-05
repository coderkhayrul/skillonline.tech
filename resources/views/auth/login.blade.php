{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Skill Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend') }}{{ asset('backend') }}/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body pt-0">
                            <h3 class="text-center pt-4 text-primary">SKILL ONLINE</h3>
                            <div class="py-4">
                                <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="Enter email" required value="{{ old('email') }}">
                                            @error('email')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input name="password" type="password" class="form-control"
                                                placeholder="Enter password" aria-label="Password"
                                                aria-describedby="password-addon" required>
                                            <button class="btn btn-light " type="button" id="password-addon"><i
                                                    class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input name="remember" class="form-check-input" type="checkbox"
                                            id="remember-check">
                                        <label class="form-check-label" for="remember-check">
                                            Remember me
                                        </label>
                                    </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Log
                                            In</button>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i
                                                    class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                        </div>
                                    @endif

                                </form>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="mt-5 text-center">
                        <div>
                            <p>Don't have an account ? <a href="#" class="fw-medium text-primary">
                                    Signup now </a> </p>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Crafted with <i class="mdi mdi-heart text-danger"></i>
                                SkillOnline
                            </p>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/node-waves/waves.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>
</body>

</html>
