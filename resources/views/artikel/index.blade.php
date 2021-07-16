@extends('layouts.dashboard')

@section('title')
    Artikel
@endsection

@section('content')
<div id="layoutSidenav_content">
  <main>
      <div class="container-fluid px-4">
          <h1 class="mt-4">@yield('title')</h1>
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active">Tables</li>
          </ol>
          <div class="card">
            <div class="card-header">
              Data @yield('title')
            </div>
            <br>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="GET" action="{{ route('artikel.index') }}">
              <div class="input-group">
                <a href =" {{route('artikel.create')}} " class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-plus"></i></a>  
                <input class="form-control" type="text" name="search" value="{{$request->search}}" placeholder="Cari Judul Artikel" aria-label="Cari Judul Artikel" aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </form>
            <br>

            {{-- ALERT MESSAGE --}}
            @if ($message = Session::get('message'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                  </svg>
                  <div>
                    {{ $message }}
                  </div>
                </div>
            @endif

            <div class="card-body">
              <table class="table table-bordered border-black">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Kutipan</th>
                      <th scope="col">Isi</th>
                      <th scope="col">Penulis</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Created at</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($artikels as $key => $art)
                      <tr>
                        <th scope="row">{{ $artikels->firstItem() + $key }}</th>
                        <td>{{ $art->artikel->kategori }}</td>
                        <td>{{ $art->judul }}</td>
                        <td>{{ $art->kutipan }}</td>
                        <td>{!! $art->isi !!}</td>
                        <td>{{ $art->penulis }}</td>
                        <td>
                            <img src="{{ Storage::url('public/gambar/').$art->gambar }}" class="rounded" style="width: 150px">
                        </td>
                        <td>{{ $art->created_at }}</td>
                        <td>
                          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('artikel.destroy', $art->id) }}" method="POST">
                            <a href="{{ route('artikel.edit', $art->id) }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                {{$artikels->links()}}
            </div>
          </div>
      </div>
  </main>
</div>
@endsection