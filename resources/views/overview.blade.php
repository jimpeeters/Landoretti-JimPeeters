@extends('layouts.master')

@section('title', 'Art Overview')

@section('content')

	@include('newest-auction-section')

	<div class="sorting-container">
		<div class="container">

			<div class="basic-sort">
				<span class="sort-by">Sort by:</span> 
				<form id="sort-form" action="{{route('sortBy')}}" method="post">

					<button class="button-clean" type="submit" name="type" value="soonest">ending soonest</button> |
					<button class="button-clean" type="submit" name="type" value="latest">ending latest</button> |
					<button class="button-clean" type="submit" name="type" value="new">new auctions</button> |
					<button class="button-clean" type="submit" name="type" value="popular">popular auctions</button>

					<input type="hidden" value="{{ csrf_token() }}" name="_token">
				</form>
			</div>

			<div class="advanced-sort">
				<a id="btn-advanced-sort" href="#">Advanced Options <span class="arrow"><i class="fa fa-angle-right"></i></span></a>
			</div>

			<div class="advanced-sort-container">
				<div class="row">
					<div class="col-md-3">

						<p>Price</p>
						<ul>
							<form id="sort-form" action="{{route('priceFilter')}}" method="post">
							    <button class="button-clean" type="submit" name="type" value="<5000">Up to 5,000</button>
							    <button class="button-clean" type="submit" name="type" value="<10000">5,000-10,000</button>
							    <button class="button-clean" type="submit" name="type" value="<25000">10,000-25,000</button>
							    <button class="button-clean" type="submit" name="type" value="<50000">25,000-50,000</button>
							    <button class="button-clean" type="submit" name="type" value="<100000">50,000-100,000</button>
							    <button class="button-clean" type="submit" name="type" value=">100000">Above</button>
							    <input type="hidden" value="{{ csrf_token() }}" name="_token">
							</form>
						</ul>

						<p>Ending</p>
						<ul>
							<form id="sort-form" action="{{route('endingFilter')}}" method="post">
								<button class="button-clean" type="submit" name="type" value="thisweek">Ending this Week</button>
								<button class="button-clean" type="submit" name="type" value="newlisted">Newly Listed</button>
								<button class="button-clean" type="submit" name="type" value="purchasenow">Purchase Now</button>
								<input type="hidden" value="{{ csrf_token() }}" name="_token">
							</form>
						</ul>

					</div>

					<div class="col-md-3">

						<p>Era</p>
						<ul>
							<form id="sort-form" action="{{route('eraFilter')}}" method="post">
								<button class="button-clean" type="submit" name="type" value="1">Pre-War</button>
								<button class="button-clean" type="submit" name="type" value="2">1940s-1950s</button>
								<button class="button-clean" type="submit" name="type" value="3">1960s-1980s</button>
								<button class="button-clean" type="submit" name="type" value="4">1990s-Present</button>
								<input type="hidden" value="{{ csrf_token() }}" name="_token">
							</form>
						</ul>

						<p>Media</p>
						<ul>
							<form id="sort-form" action="{{route('categoryFilter')}}" method="post">
								<button class="button-clean" type="submit" name="type" value="1">Design</button>
								<button class="button-clean" type="submit" name="type" value="2">Paintings and Works on Paper</button>
								<button class="button-clean" type="submit" name="type" value="3">Photographs</button>
								<button class="button-clean" type="submit" name="type" value="4">Prints and Multiples</button>
								<button class="button-clean" type="submit" name="type" value="5">Sculpture</button>
								<input type="hidden" value="{{ csrf_token() }}" name="_token">
							</form>
						</ul>

					</div>

					<div class="col-md-3">

						<p>Style</p>
						<ul>
							<form id="sort-form" action="{{route('styleFilter')}}" method="post">
								<button class="button-clean" type="submit" name="type" value="1">Abstract</button>
								<button class="button-clean" type="submit" name="type" value="2">African American</button>
								<button class="button-clean" type="submit" name="type" value="3">Asian Contemporary</button>
								<button class="button-clean" type="submit" name="type" value="4">Conceptual</button>
								<button class="button-clean" type="submit" name="type" value="5">Contemporary</button>
								<button class="button-clean" type="submit" name="type" value="6">Emerging Artists</button>
								<button class="button-clean" type="submit" name="type" value="7">Figurative</button>
								<button class="button-clean" type="submit" name="type" value="8">Middle Eastern Contemporary</button>
								<button class="button-clean" type="submit" name="type" value="9">Minimalism</button>
								<button class="button-clean" type="submit" name="type" value="10">Modern</button>
								<button class="button-clean" type="submit" name="type" value="11">Pop</button>
								<button class="button-clean" type="submit" name="type" value="12">Urban</button>
								<button class="button-clean" type="submit" name="type" value="13">Vintage Photographs</button>
								<input type="hidden" value="{{ csrf_token() }}" name="_token">
							</form>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			{!! Breadcrumbs::render('Auctions') !!}
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			{!! $auctions->render() !!}
		</div>
	</div>
</div>

	<div class="art-page container">

		<div class="row">
			<div class="col-md-12">
				@foreach($auctions as $key => $auction)
					@if($key == 0)
					<div class="big-preview" title="{{$auction->title}}">
						<a href="{{route('auctionDetails', $auction->slug)}}" class="big-image" style="background-image:url('{{$auction->imageArtwork}}');">
							<span class="overlay">
								<span class="overlay-content">
									<h2>&ldquo;{{ str_limit($auction->title, $limit = 20, $end = '...') }}&rdquo;</h2>
									<p>{{ str_limit($auction->descriptionEnglish, $limit = 200, $end = '...') }}</p>
								</span>
							</span>
						</a>
					</div>
					@endif
				@endforeach
				<div class="small-previews">
				@foreach($auctions as $key => $auction)
					@if($key > 0 && $key <= 4)
						<div class="auction-preview" title="{{$auction->title}}">
							<a href="{{route('auctionDetails', $auction->slug)}}" class="auction-image" style="background-image:url('{{$auction->imageArtwork}}');"><span class="overlay"><i class="fa fa-search"></i></span></a>

							<div class="auction-info">
								<span class="artist">{{$auction->artist->age}}, {{$auction->artist->name}}</span>
								<span class="title">{{$auction->title}}</span>
								<span class="price">&euro;
									@if($auction->currentPrice == null)
										{{$auction->minPrice}}
									@else
										{{$auction->currentPrice}}
									@endif
								</span>

								<div class="call-to-action clearfix">
									<span class="timeleft">25d 14u 44m</span>

									<a href="{{route('auctionDetails', $auction->slug)}}" class="btn btn-visit-auction">Visit Auction <i class="fa fa-angle-right"></i></a>
								</div>
							</div>
						</div>
					@endif
				@endforeach
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				@foreach($auctions as $key => $auction)
					@if($key > 4 && $key <= 8)
						<div class="auction-preview" title="{{$auction->title}}">
							<a href="{{route('auctionDetails', $auction->slug)}}" class="auction-image" style="background-image:url('{{$auction->imageArtwork}}');"><span class="overlay"><i class="fa fa-search"></i></span></a>

							<div class="auction-info">
								<span class="artist">{{$auction->artist->age}}, {{$auction->artist->name}}</span>
								<span class="title">{{$auction->title}}</span>
								<span class="price">&euro;
									@if($auction->currentPrice == null)
										{{$auction->minPrice}}
									@else
										{{$auction->currentPrice}}
									@endif
								</span>

								<div class="call-to-action clearfix">
									<span class="timeleft">25d 14u 44m</span>

									<a href="{{route('auctionDetails', $auction->slug)}}" class="btn btn-visit-auction">Visit Auction <i class="fa fa-angle-right"></i></a>
								</div>
							</div>
						</div>
					@endif
				@endforeach
			</div>
		</div>

	</div>
	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			{!! $auctions->render() !!}
		</div>
	</div>
</div>

@stop

@section('scripts')
	<script>
		(function ($) {

			$('#btn-advanced-sort').click(function (e) {
				e.preventDefault();

				$(this).find('.fa').toggleClass('fa-angle-right');
				$(this).find('.fa').toggleClass('fa-angle-down');

				$('.advanced-sort-container').toggleClass('active');
			});

		})(jQuery);
	</script>
@stop