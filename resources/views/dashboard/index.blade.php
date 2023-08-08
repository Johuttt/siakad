@section('title','Dashboard')
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom col-lg-8">
    <h1 class="h2">Data UKT Mahasiswa {{ auth()->user()->name }}</h1>
</div>
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">NPM</th>
          <th scope="col">Golongan</th>
          <th scope="col">UKT</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($ukts1 as $ukt1)
        <tr class="align-middle">
          <td>{{ $loop->iteration }}</td>
          <td class="mx-auto">{{ $ukt1->name }}</td>
          <td>{{ $ukt1->npm }}</td>
          <td>{{ $ukt1->golongan }}</td>
          <td>@currency ($ukt1->ukt)</td>
        </tr>
        @empty
            <td colspan="8">Tidak ada data...</td>
        @endforelse
      </tbody>
    </table>
  </div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom col-lg-8">
    <h1 class="h2">Data UKT Semua Mahasiswa</h1>
</div>
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">NPM</th>
          <th scope="col">Golongan</th>
          <th scope="col">UKT</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($ukts as $ukt)
        <tr class="align-middle">
          <td>{{ $loop->iteration }}</td>
          <td class="mx-auto">{{ $ukt->name }}</td>
          <td>{{ $ukt->npm }}</td>
          <td>{{ $ukt->golongan }}</td>
          <td>@currency ($ukt->ukt)</td>
        </tr>
        @empty
            <td colspan="8">Tidak ada data...</td>
        @endforelse
      </tbody>
    </table>
  </div>

@endsection
