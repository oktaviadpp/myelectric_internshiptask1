@extends('layouts.user')
@section('title')
    About Us
@endsection
@section('content')
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
                @foreach ($about_us as $a)
                    
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>{{$a->judul}}</h2>
				</div>
                <p>{!! $a->isi !!}</p>
                @endforeach
			</div>
		</div>
	</div>
@endsection