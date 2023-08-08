@extends('master')
@section('title','Register')

@section('content')

<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-4">
        <main class="form-registration">
            <div class="text-center">
                <img class="mb-4" src="/assets/logo.png" alt="" width="200" height="200">
                <h1 class="h3 mb-4 fw-normal">Form Pendaftaran</h1>
            </div>
            <form action="/register" method="POST">
                @csrf

                <div class="form-floating">
                    <input type="text" name="npm" class="form-control rounded-top @error('npm')
                    is-invalid @enderror" id="npm" placeholder="NPM/NIDN" required value="{{ old('npm') }}" autofocus>
                    <label for="npm">NPM/NIDN</label>
                    @error('npm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name')
                    is-invalid @enderror" id="name" placeholder="Nama" required value="{{ old('name') }}">
                    <label for="name">Nama</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email')
                    is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="hp" class="form-control @error('hp')
                    is-invalid @enderror" id="hp" placeholder="No HP" required value="{{ old('hp') }}">
                    <label for="hp">No HP</label>
                    @error('hp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <select name="jenis_kelamin" class="form-control rounded-0 @error('jenis_kelamin')
                    is-invalid @enderror" id="jenis_kelamin" required>
                    <option selected disabled>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" {{ old('jenis_kelamin') == "Laki-laki" ? "selected" : "" }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jenis_kelamin') == "Perempuan" ? "selected" : "" }}>Perempuan</option>
                    </select>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password')
                    is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-grey mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Sudah terdaftar? <a href="/login">Login</a></small>
            <div class="text-center">
                <p class="mt-5 mb-5 text-muted">&copy; Copyright SIAKAD 2022</p>
            </div>
        </main>
    </div>
</div>

@endsection
