@extends('layouts.dashboard')

@section('title')
    Tambah Data Produk
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
            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
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
                            @foreach ($produkkats as $p)
                                <option value="{{ $p->id }}">{{ $p->kategori}}</option>
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
                        <label for="position-option" class="form-label">Brand</label>
                        <select class="form-control" id="position-option" name="brand">
                        <option>-- Select Brand -- </option>
                            @foreach ($brands as $b)
                                <option value="{{ $b->id }}">{{ $b->brand}}</option>
                            @endforeach
                        </select>
        
                        {{-- ERROR MESSAGE UNTUK brand --}}
                        @error('brand')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                        <input type="text" name="produk" class="form-control @error('produk') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter produk">
                    
                        {{-- ERROR MESSAGE UNTUK produk--}}
                        @error('produk')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter harga">
                    
                        {{-- ERROR MESSAGE UNTUK harga--}}
                        @error('harga')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5" placeholder="Masukkan Konten Blog">{{ old('deskripsi') }}</textarea>
                    
                        <!-- error message untuk deskripsi -->
                        @error('deskripsi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Keterangan</label>
                        <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" rows="5" placeholder="Masukkan Konten Blog">{{ old('keterangan') }}</textarea>
                    
                        <!-- error message untuk keterangan -->
                        @error('keterangan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Stock</label>
                        <input type="text" name="stock" class="form-control @error('stock') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter stock">
                    
                        {{-- ERROR MESSAGE UNTUK stock--}}
                        @error('stock')
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

