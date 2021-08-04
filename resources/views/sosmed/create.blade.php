@extends('layouts.dashboard')

@section('title')
    Tambah Data Sosial Media
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
            <form action="{{ route('sosmed.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-header">
                @yield('title')
              </div>
              <br>
              <div class="card-body">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama sosmed</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter nama">
                  
                    {{-- ERROR MESSAGE UNTUK nama --}}
                    @error('nama')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                      </div>
                    @enderror
                    </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Icon</label>
                    <input type="text" name="icon" class="form-control " id="exampleFormControlInput1" placeholder="enter icon">
                  
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Link</label>
                    <input type="text" name="link" class="form-control" id="exampleFormControlInput1" placeholder="enter link">
                  
                  </div>
                  <button type="submit" class="btn btn-md btn-info">ADD</button>
              </div>
            </div>
            </form>
        </div>
    </main>
  </div>
@endsection