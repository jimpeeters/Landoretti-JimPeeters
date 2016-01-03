@extends('layouts.master')

@section('content')

	@include('newest-auction-section')

	<div class="sorting-container">
		<div class="container">

			<div class="basic-sort">
				<span class="sort-by">Sort by:</span> <a href="#">ending soonest</a> | <a href="#">ending latest</a> | <a href="#">new auctions</a> | <a href="#">popular auctions</a>
			</div>

			<div class="advanced-sort">
				<a id="btn-advanced-sort" href="#">Advanced Options <span class="arrow"><i class="fa fa-angle-right"></i></span></a>
			</div>

			<div class="advanced-sort-container">
				<div class="row">
					<div class="col-md-3">

						<p>Price</p>
						<ul>
							<form action="/priceFilter" method="post">
							    <button type="submit" name="type" value="<5000">Up to 5,000</button>
							    <button type="submit" name="type" value="<10000">5,000-10,000</button>
							    <button type="submit" name="type" value="<25000">10,000-25,000</button>
							    <button type="submit" name="type" value="<50000">25,000-50,000</button>
							    <button type="submit" name="type" value="<100000">50,000-100,000</button>
							    <button type="submit" name="type" value=">100000">Above</button>
							    <input type="hidden" value="{{ csrf_token() }}" name="_token">
							</form>
						</ul>

						<p>Ending</p>
						<ul>
							<li>Ending this Week</li>
							<li>Newly Listed</li>
							<li>Purchase Now</li>
						</ul>

					</div>

					<div class="col-md-3">

						<p>Era</p>
						<ul>
							<li>Pre-War</li>
							<li>1940s-1950s</li>
							<li>1960s-1980s</li>
							<li>1990s-Present</li>
						</ul>

						<p>Media</p>
						<ul>
							<li>Design</li>
							<li>paintings and Works on Paper</li>
							<li>Photographs</li>
							<li>Prints and Multiples</li>
							<li>Sculpture</li>
						</ul>

					</div>

					<div class="col-md-3">

						<p>Style</p>
						<ul>
							<li>Abstract</li>
							<li>African American</li>
							<li>Asian Contemporary</li>
							<li>Conceptual</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
							<li>test</li>
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
					<div class="big-preview">
						<a href="/auction/{{$auction->id}}" class="big-image" style="background-image:url('{{$auction->imageArtwork}}');">
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
						<div class="auction-preview">
							<a href="/auction/{{$auction->id}}" class="auction-image" style="background-image:url('{{$auction->imageArtwork}}');"><span class="overlay"><i class="fa fa-search"></i></span></a>

							<div class="auction-info">
								<span class="artist">{{$auction->year}}, {{$auction->artist->name}}</span>
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

									<a href="/auction/{{$auction->id}}" class="btn btn-visit-auction">Visit Auction <i class="fa fa-angle-right"></i></a>
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
						<div class="auction-preview">
							<a href="/auction/{{$auction->id}}" class="auction-image" style="background-image:url('{{$auction->imageArtwork}}');"><span class="overlay"><i class="fa fa-search"></i></span></a>

							<div class="auction-info">
								<span class="artist">{{$auction->year}}, {{$auction->artist->name}}</span>
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

									<a href="/auction/{{$auction->id}}" class="btn btn-visit-auction">Visit Auction <i class="fa fa-angle-right"></i></a>
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