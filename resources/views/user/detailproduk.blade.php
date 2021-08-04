@extends('layouts.user')

@section('title')
    Detail Produk
@endsection

@section('content')
<div id="page">
	<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="owl-carousel owl-carousel-fullwidth product-carousel">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="{{ Storage::url('public/gambar/').$produks->gambar }}" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="{{ Storage::url('public/gambar/').$produks->gambar }}" alt="user">
								</figure>
							</div>
						</div>
					</div>
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>{{ $produks->produk}}</h2>
							<p>
								<form action="/add_to_cart" method="POST">
									@csrf
									<input type="hidden" name="id_produk" value="{{ $produks->id}}">
									<input type="hidden" name="id_user" value="{{ Auth::user()->id}}">
									{{-- TOMBOL increase decrease  --}}
									<div class="quantity">
										<input type="number" value="0" name="quantity" >
									</div><br>
									<button class="btn btn-primary btn-outline btn-lg">Add to Cart</button>
								</form>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="fh5co-tabs animate-box">
                        <ul class="fh5co-tab-nav">
                            <center>
							<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Keterangan Produk</span></a></li>
							<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Deskripsi Produk</span></a></li>
                        </center>
						</ul>

						<!-- Tabs -->
						<div class="fh5co-tab-content-wrap">

							<div class="fh5co-tab-content tab-content active" data-tab-content="1">
								<div class="col-md-10 col-md-offset-1">
									<span class="price">Rp {{ $produks->harga}},00</span>
									<h2>{{ $produks->produk}}</h2>
									<p>{{ $produks->keterangan}}</p>
                                    <div class="row">
										<div class="col-md-6">
											<h2 class="uppercase">Kategori Produk</h2>
											<p>{{$produks->produkkats->kategori}}</p>
										</div>
										<div class="col-md-6">
											<h2 class="uppercase">Nama Brand</h2>
											<p>{{ $produks->brands->brand}}</p>
										</div>
									</div>

								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="2">
								<div class="col-md-10 col-md-offset-1">
									<h3>Deskripsi Produk</h3>
									<ul>
										<li>{!! $produks->deskripsi !!}</li>
										<li>{!! $produks->deskripsi !!}</li>
										<li>{!! $produks->deskripsi !!}</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection

