@extends('layouts.user')
@section('title')
    Kategori
@endsection
@section('content')
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Air Conditioner</h2>
					<p>Rekomendasi Untukmu</p>
				</div>
			</div>
			<div class="row">
				@foreach ($produks as $pro)
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(/gambar/{{$pro->gambar}});">
						{{-- <div class="product-grid" style="background-image:url({{ Storage::url('public/gambar/').$pro->gambar }});"> --}}
							<div class="inner">
								<p>
									<a href="{{ route('detailproduk', $pro->id) }}" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="{{ route('detailproduk', $pro->id) }}" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="{{ route('detailproduk', $pro->id) }}">{{ $pro->produk}}</a></h3>
							<p class="card-text">Rp {{ $pro->harga}},00</p>
							<p class="card-text"></p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection