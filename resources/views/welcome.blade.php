@extends('master')
@section('home','active')
@section('title','Home')

@section('content')
    <style>
        .bg-maroon {
            background-color: #555555;
            color: white;
        }
        .text-maroon {
            color: maroon;
            font-weight: bold
        }
    </style>
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-lg-12">
            <div class="text-center">
                <img class="mb-4" src="/assets/logo.png" alt="" width="200" height="200">
                <h1 style="color: #555555;" class="fw-bold">Selamat datang di FASILKOM</h1>
                <h1 style="color: #555555;" class="mb-4 fw-bold">Universitas Singaperbangsa Karawang</h1>
                <h4 style="color: black;" class="mb-2 fw-normal">Inovatif, Kompetitif, dan Unggul</h4>
                <h5 style="color: black;" class="mb-2 fw-normal">Jl. HS. Ronggo Waluyo, Telukjambe Timur, Karawang, Jawa Barat, Indonesia - 41361</h5>
                <h5 style="color: black;" class="mb-2 fw-normal"><i class="bi bi-telephone-fill"></i> Telepon. 0267641177 <i class="bi bi-envelope-fill"></i> Email. info@unsika.ac.id</h5>
            </div>
            <div class="text-center">
                <p class="mt-5 text-muted">&copy; 2023 UNIVERSITAS SINGAPERBANGSA KARAWANG</p>
            </div>
        </div>
    </div>
@endsection
