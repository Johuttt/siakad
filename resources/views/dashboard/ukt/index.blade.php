@section('title','Profil')
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom col-lg-8">
    <h1 class="h2">Profil Akun</h1>
    <a href="/dashboard/ukt/create" class="btn btn-grey"><span data-feather="file-plus"></span> Tambah</a>
</div>
@if (session()->has('success'))
            <div class="alert alert-success col-lg-8">
                {{session()->get('success')}}
            </div>
        @endif
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">NPM</th>
          <th scope="col">Golongan</th>
          <th scope="col">UKT</th>
          <th scope="col">Aksi</th>
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
          <td>
            <form action="/dashboard/ukt/{{ $ukt->id }}" method="POST">
                <a href="/dashboard/ukt/{{ $ukt->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                @csrf
                @method('DELETE')
                <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Ingin menghapus Data UKT Mahasiswa?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @empty
            <td colspan="8">Tidak ada data...</td>
        @endforelse
      </tbody>
    </table>
  </div>
@endsection
