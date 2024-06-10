<!DOCTYPE html>
<html lang="en" class="theme-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-bulma/>
    <title>Register</title>
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body class="is-flex is-justify-content-center is-align-items-center" style="height: 100vh;">
    <div class="box" style="min-width: 25%">
        <h1 class="subtitle"><b>Register yourself</b></h1>
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <div class="field">
                <label class="label" for="name">Name</label>
                <input class="input" name="name" value="{{ old('name') }}">
                @error('name')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="field">
                <label class="label" for="email">Email</label>
                <input class="input" name="email" value="{{ old('email') }}">
                @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="field">
                <label class="label" for="password">Password</label>
                <input class="input" name="password" type="password">
                @error('password')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="field">
                <label class="label" for="password_confirmation">Confirm Password</label>
                <input class="input" name="password_confirmation" type="password">
            </div>
            <div class="buttons is-justify-content-space-between">
                <button class="button is-success" type="submit">Register</button>
                <a href="{{ route('login') }}" class="button is-info" >Go to login page</a>
            </div>
        </form>
    </div>
</body>
</html>
