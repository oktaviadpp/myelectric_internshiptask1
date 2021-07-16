@extends('layouts.dashboard')

@section('title')
    Tambah Data Artikel
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
            <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-header">
                @yield('title')
              </div>
              <br>
              <div class="card-body">
                    <div class="mb-3">
                        <label for="position-option" class="form-label">Kategori</label>
                        <select class="form-control" id="position-option" name="kategori">
                        <option>-- Select Kategori -- </option>
                            @foreach ($artikelkats as $a)
                                <option value="{{ $a->id }}">{{ $a->kategori}}</option>
                            @endforeach
                        </select>
        
                        {{-- ERROR MESSAGE UNTUK kategori --}}
                        @error('kategori')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter judul">
                    
                        {{-- ERROR MESSAGE UNTUK judul--}}
                        @error('judul')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kutipan</label>
                        <input type="text" name="kutipan" class="form-control @error('kutipan') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter kutipan">
                    
                        {{-- ERROR MESSAGE UNTUK kutipan--}}
                        @error('kutipan')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Isi</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" rows="5" placeholder="Masukkan Konten Blog"></textarea>
                    
                        <!-- error message untuk isi -->
                        @error('isi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Penulis</label>
                        <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter penulis">
                    
                        {{-- ERROR MESSAGE UNTUK penulis--}}
                        @error('penulis')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                        {{-- ERROR MESSAGE UNTUK gambar--}}
                        @error('gambar')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                  <button type="submit" class="btn btn-md btn-info">ADD</button>
              </div>
            </div>
            </form>
        </div>
    </main>
  </div>
@endsection