@section('title','Dashboard')
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom col-lg-8">
    <h1 class="h2">Tambah Data UKT Mahasiswa</h1>
</div>
<form action="/dashboard/ukt" method="POST" class="mb-5 col-lg-8" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <label for="name" class="form-label">Nama</label>
        <input type="text" name="name" id="name" placeholder="Masukkan Nama" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" required autofocus>
        @error('name')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" name="npm" id="npm" placeholder="Masukkan NPM" class="form-control @error('npm') is-invalid @enderror" value="{{old('npm')}}" required autofocus>
        @error('npm')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="golongan" class="form-label">Golongan</label>
        <select name="golongan" id="golongan" class="form-control" onchange="myUkt()" required>
            <option selected disabled>Pilih Golongan</option>
            <option value="BKT" {{old('golongan') == "BKT" ? "selected" : ""}}>BKT</option>
            <option value="UKT 1" {{old('golongan') == "UKT 1" ? "selected" : ""}}>UKT 1</option>
            <option value="UKT 2" {{old('golongan') == "UKT 2" ? "selected" : ""}}>UKT 2</option>
            <option value="UKT 3" {{old('golongan') == "UKT 3" ? "selected" : ""}}>UKT 3</option>
            <option value="UKT 4" {{old('golongan') == "UKT 4" ? "selected" : ""}}>UKT 4</option>
            <option value="UKT 5" {{old('golongan') == "UKT 5" ? "selected" : ""}}>UKT 5</option>
            <option value="UKT 6" {{old('golongan') == "UKT 6" ? "selected" : ""}}>UKT 6</option>
            <option value="UKT 7" {{old('golongan') == "UKT 7" ? "selected" : ""}}>UKT 7</option>
            <option value="UKT 8" {{old('golongan') == "UKT 8" ? "selected" : ""}}>UKT 8</option>
        </select>
        @error('golongan')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="ukt" class="form-label">UKT</label>
        <input type="text" name="ukt" id="ukt" placeholder="Pilih Golongan" class="form-control @error('ukt') is-invalid @enderror" value="{{old('ukt')}}" readonly required>
        @error('ukt')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-grey">Tambah</button>
</form>
@endsection
