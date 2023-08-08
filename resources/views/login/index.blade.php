@extends('master')
@section('title','Login')
@section('login','active')

@section('content')

<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-4">

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger">
                {{session()->get('loginError')}}
            </div>
        @endif

        <main class="form-signin w-100 m-auto">
            <div class="text-center">
                <img class="mb-4" src="/assets/logo.png" alt="" width="200" height="200">
                <h1 class="h3 mb-4 fw-bold">Login</h1>
            </div>
            <form action="/login" method="POST">
                @csrf

                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email')
                    is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-grey" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Belum terdaftar? <a href="/register">Daftar Sekarang!</a></small>
            <div class="text-center">
                <p class="mt-5 mb-5 text-muted">&copy; Copyright SIAKAD 2022</p>
            </div>
        </main>
    </div>
</div>

@endsection
