@section('title','Profil')
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom col-lg-8">
    <h1 class="h2">Data UKT Mahasiswa</h1>
</div>
<div class="card col-lg-8">
    <div class="card-body">
        @if (session()->has('success1'))
            <div class="alert alert-success">
                {{session()->get('success1')}}
            </div>
        @endif
        <div class="row">
            <div class="h6 col-4">Nama</div>
            <div class="col-4 text-muted">{{ auth()->user()->name }}</div>
          </div>
          <hr class="mt-2">
          <div class="row">
            <div class="h6 col-4">NPM</div>
            <div class="col-4 text-muted">{{ auth()->user()->npm }}</div>
          </div>
          <hr class="mt-2">
          <div class="row">
            <div class="h6 col-4">Email</div>
            <div class="col-4 text-muted">{{ auth()->user()->email }}</div>
          </div>
          <hr class="mt-2">
          <div class="row">
            <div class="h6 col-4">Jenis Kelamin</div>
            <div class="col-4 text-muted">{{ auth()->user()->jenis_kelamin }}</div>
          </div>
          <hr class="mt-2">
          <div class="row">
            <div class="h6 col-4">No HP</div>
            <div class="col-4 text-muted">{{ auth()->user()->hp }}</div>
          </div>
          <hr class="mt-2">
        <a href="/dashboard/profil/edit" class="btn btn-warning">Edit</a>
    </div>
  </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom col-md-8">
        <h1 class="h2">Ganti Password</h1>
    </div>
    <div class="card col-md-8 mb-5">
        <div class="card-body">
            <form action="/dashboard/profil" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{session()->get('error')}}
                    </div>
                @endif

                @if (session()->has('error1'))
                    <div class="alert alert-danger">
                        {{session()->get('error1')}}
                    </div>
                @endif
                <div class="mb-3">
                    <label for="password" class="form-label">Password Lama</label>
                    <input type="password" name="password" id="password" placeholder="Masukkan Password Lama" class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="passwordBaru" class="form-label">Password Baru</label>
                    <input type="password" name="passwordBaru" id="passwordBaru" placeholder="Masukkan Password Baru" class="form-control @error('passwordBaru') is-invalid @enderror" required>
                    @error('passwordBaru')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="ulangiPassword" class="form-label">Ulangi Password Baru</label>
                    <input type="password" name="ulangiPassword" id="ulangiPassword" placeholder="Masukkan Ulang Password Baru" class="form-control @error('ulangiPassword') is-invalid @enderror" required>
                    @error('ulangiPassword')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning">Edit</button>
            </form>
        </div>
    </div>

@endsection
