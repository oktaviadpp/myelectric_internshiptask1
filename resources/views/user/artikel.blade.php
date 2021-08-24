@extends('layouts.user')

@section('title')
    Artikel
@endsection

@section('content')
<div id="fh5co-about">
    <div class="container">
        <div class="about-content">
            <div class="row animate-box">
                <div class="col-md-6">
                    {{-- @foreach ($artikels as $art) --}}
                        
                    <div class="desc">
                        <div class="card mb-3">
                        <div class="card-body">
                            <h3>{{ $artikels->judul }}</h3>
                            <p class="card-text">{!! $artikels->isi !!}</p>
                            <p class="card-text">
                                <small class="text-muted"><i class="fas fa-calendar-alt"></i>
                                Diunggah pada : {{ $artikels->created_at }} | {{ $artikels->artikel->kategori }}
                                </small>
                            </p>
                        </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
                <div class="col-md-6">
                    {{-- <img class="img-responsive" src="{{ Storage::url('public/gambar/').$artikels->gambar }}" alt="about"> --}}
                    <img class="img-responsive" src="/gambar/{{$artikels->gambar}}" alt="about">
                    {{-- <img src="/gambar/{{$pro->gambar}}" class="rounded" style="width: 150px"> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection