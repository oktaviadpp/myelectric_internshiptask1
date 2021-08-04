@extends('layouts.dashboard')

@section('title')
    Edit Data About Us
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
            <form action="{{ route('aboutus.update', ['about'=>$about]) }}" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
            <div class="card">
              <div class="card-header">
                @yield('title')
              </div>
              <br>
              <div class="card-body">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Bab</label>
                    <input type="text" name="bab" value="{{ old('bab', $about->bab) }}" class="form-control @error('bab') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter bab">
                    {{-- ERROR MESSAGE UNTUK bab --}}
                    @error('bab')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                      </div>
                    @enderror
                    </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Judul</label>
                    <input type="text" name="judul" value="{{ old('judul', $about->judul) }}" class="form-control @error('judul') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter judul">
                  
                    {{-- ERROR MESSAGE UNTUK judul --}}
                    @error('judul')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                      </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Isi</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" rows="5" placeholder="Masukkan Konten Blog">{{ old('isi', $about->isi) }}</textarea>
                    
                        <!-- error message untuk isi -->
                        @error('isi')
                            <div class="alert alert-danger mt-2">
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