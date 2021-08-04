@extends('layouts.dashboard')

@section('title')
    Sosial Media
@endsection

@section('content')
<div id="layoutSidenav_content">
  <main>
      <div class="container-fluid px-4">
          <h1 class="mt-4">@yield('title')</h1>
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
          </ol>
          <div class="card">
            <div class="card-header">
              Data @yield('title')
            </div>
            <br>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="get" action="{{ route('sosmed.index') }}">
              <div class="input-group">
                <a href =" {{ route('sosmed.create') }} " class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-plus"></i></a>  
                <input class="form-control" name="search" value="{{ $request->search }}" type="text" placeholder="Cari Nama Artikel" aria-label="Cari Nama Artikel" aria-describedby="btnNavbarSearch" />
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
                      <th scope="col">Nama Medos</th>
                      <th scope="col">Icon</th>
                      <th scope="col">Link</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sosmed as $key => $sos)
                      <tr>
                        {{-- firstItem digunakan untuk mengurutkan nomor --}}
                        <th scope="row">{{ $sosmed->firstItem() + $key }}</th>
                        <td>{{ $sos->nama }}</td>
                        <td>{{ $sos->icon }}</td>
                        <td>{{ $sos->link }}</td>
                        <td>
                          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                            <a href="{{ route('sosmed.edit', $sos->id) }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            @csrf
                            
                        </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                {{$sosmed->links()}}
            </div>
          </div>
      </div>
  </main>
</div>
@endsection