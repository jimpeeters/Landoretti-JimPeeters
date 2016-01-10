@extends('layouts.master')

@section('title', 'Your Landoretti profile')

@section('content')

	@include('newest-auction-section')


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				{!! Breadcrumbs::render('myProfile') !!}
			</div>
		</div>
	</div>

	<div class="container">
		
		<h1>Profile</h1>

		<div class="panel panel-default panel-profile">
			<div class="panel-body">
				<h2>{{$user->name}}</h2>
				<p class="email"><i class="fa fa-envelope-o"></i> <a href="mailto:{{$user->email}}">{{$user->email}}</a></p>
				<p class="phone"><i class="fa fa-phone"></i>{{$user->number}}</p>
				
				<br>
				
				<p class="address">{{$user->address}}</p>
				<p class="city">{{$user->city}}</p>
			</div>
		</div>

		<h2>Active auctions</h2>

		<div class="row">
			<div class="col-md-12 active-auctions-slider">

				@foreach($user->auctions as $auction)

				<div class="auction-preview">
					<a href="#" class="auction-image" style="background-image:url('{{$auction->imageArtwork}}');"><span class="overlay"><i class="fa fa-search"></i></span></a>

					<div class="auction-info">
						<span class="artist">{{$auction->artist->name}}</span>
						<span class="title">{{$auction->title}}</span>
						<span class="price">
							@if($auction->currentPrice != null)
								&euro; {{$auction->currentPrice}}
							@else
								&euro; {{$auction->minPrice}}
							@endif
						</span>

						<div class="call-to-action clearfix">
							<span class="timeleft">25d 14u 44m</span>

							<a href="#" class="btn btn-visit-auction">Visit Auction ></a>
						</div>
					</div>
				</div>

				@endforeach


			</div>
		</div>

	</div>

@stop

@section('scripts')
	<script>
		(function() {
			$('.active-auctions-slider').slick({
				arrows: true,
				infinite: true,
				slidesToShow: 4,
				adaptiveHeight: true,
				prevArrow: '<div class="slider-prev"><i class="fa fa-chevron-left"></i></div>',
				nextArrow: '<div class="slider-next"><i class="fa fa-chevron-right"></i></div>'
			});
		})()
	</script>
@stop