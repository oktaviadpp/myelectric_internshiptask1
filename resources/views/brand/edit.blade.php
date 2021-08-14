@extends('layouts.dashboard')

@section('title')
    Edit Data Brand
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
            <form action="{{ route('brand.update', ['brand'=>$brand]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-header">
                @yield('title')
              </div>
              <br>
              <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Brand</label>
                        <input type="text" name="brand" value="{{ old('brand', $brand->brand) }}" class="form-control @error('brand') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter brand">
                    
                        {{-- ERROR MESSAGE UNTUK brand --}}
                        @error('brand')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Slug</label>
                        <input type="text" name="slug" value="{{ old('slug', $brand->slug) }}" class="form-control @error('slug') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter slug">
                    
                        {{-- ERROR MESSAGE UNTUK Slug--}}
                        @error('slug')
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