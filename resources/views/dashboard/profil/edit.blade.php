@section('title','Profil')
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom col-lg-8">
    <h1 class="h2">Edit Profil</h1>
</div>
<form action="/dashboard/profil/edit" method="POST" class="mb-5 col-lg-8" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <label for="name" class="form-label">Nama</label>
        <input type="text" name="name" id="name" placeholder="Masukkan Nama" class="form-control @error('name') is-invalid @enderror" value="{{old('name', auth()->user()->name)}}" required>
        @error('name')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" name="npm" id="npm" placeholder="Masukkan NPM" class="form-control @error('npm') is-invalid @enderror" value="{{old('npm', auth()->user()->npm)}}" required>
        @error('npm')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="hp" class="form-label">No HP</label>
        <input type="text" name="hp" id="hp" placeholder="Masukkan No HP" class="form-control @error('hp') is-invalid @enderror" value="{{old('hp', auth()->user()->hp)}}" required>
        @error('hp')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
            <option selected disabled>Pilih Jenis Kelamin</option>
            <option value="Laki-laki" {{old('jenis_kelamin') ?? auth()->user()->jenis_kelamin == "Laki-laki" ? "selected" : ""}}>Laki-laki</option>
            <option value="Perempuan" {{old('jenis_kelamin') ?? auth()->user()->jenis_kelamin == "Perempuan" ? "selected" : ""}}>Perempuan</option>
        </select>
        @error('jenis_kelamin')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-warning">Edit</button>
@endsection
