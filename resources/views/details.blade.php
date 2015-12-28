@extends('layouts.master')

@section('content')

	@include('newest-auction-section')

<div class="container">
	<div class="details">
		<div class="row">
			<div class="col-md-10">
				<h1>{{$auction->title}}</h1>
				<p class="top-details">25d 14u 44m <a href="#">(7 bids)</a>  <i class="fa fa-bars"></i></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="col-md-12 big-image" style="background-image:url('{{$auction->imageArtwork}}');"></div>
				<div class="col-md-12 small-images">
					<div  class="small-image" style="background-image:url('{{$auction->imageArtwork}}');">
					</div>
					<div  class="small-image" style="background-image:url('{{$auction->imageSignature}}');">
					</div>
					@if($auction->imageOptional != null)
					<div  class="small-image" style="background-image:url('{{$auction->imageOptional}}');">
					@else
					<div  class="small-image" style="background-image:url('{{$auction->imageArtwork}}');">
					@endif
					</div>
				</div>
			</div> 
			<div class="short-details col-md-4">
					<h3>{{$auction->title}}</h3>
					<p class="age">{{$auction->year}}, {{$auction->artist->name}}</p>
					<hr>
					<p class="time-left">25d 14u 44m left</p>
					<p class="date">{{$auction->enddate}}</p>
					<hr>
					<p class="text">{{ str_limit($auction->descriptionEnglish, $limit = 100, $end = '...') }}</p>
					<a class="more" href="#">more</a>
					<div class="bid-now">
						<h5>Estimated Price: </h5>
						<h3>&euro; {{$auction->minPrice}} - {{$auction->maxPrice}}</h3>
						<a class="buy-now" href="#">Buy now for &euro; {{$auction->buyoutPrice}}</a>
						<p>bids: 7 </p>
						<div class="bid-now-sub">
							<p><input>BID NOW<i class="fa fa-angle-right"></i></p>
						</div>
						<p class="add-watchlist"><a href="#"><i class="fa fa-bars"></i>add to my watchlist</a></p>
					</div>
			</div>
		</div>
		<div class="row description-auction">
			<div class="col-md-8 description-left">
				<h6>Description</h6>
				<p>{{$auction->descriptionEnglish}}</p>
				<h6>Condition</h6>
				<p>{{$auction->conditionEnglish}}</p>
			</div>
			<div class="col-md-4 description-right">
				<h6>Artist</h6>
				<p>{{$auction->artist->name}}</p>
				<p>{{$auction->artist->origin}}</p>
				<p>{{$auction->artist->age}}</p>
				<h6>Dimensions</h6>
				<p>{{$auction->width}} x {{$auction->height}}
					@if($auction->depth != null)
					 x {{$auction->depth}}
					@endif
				</p>
				<h6>Color</h6>
				<p>{{$auction->color->colorEnglish}}</p>
				<div>
					<p>ASK A QUESTION</p>
					<p>ABOUT THIS AUCTION</p>
				</div>
			</div>
		</div>

	</div>
</div>
<div class="section-related">
	<div class="container">
		<div class="related-items">
			<div class="row">
				<div class="col-md-12">
					<h3>Related items</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="auction-preview">
						<a href="#" class="auction-image" style="background-image:url('http://lorempixel.com/400/400/');"><span class="overlay"><i class="fa fa-search"></i></span></a>

						<div class="auction-info">
							<span class="artist">1979, Salvador Dali</span>
							<span class="title">Dance of Time III</span>
							<span class="price">&euro; 8.900</span>

							<div class="call-to-action clearfix">
								<span class="timeleft">25d 14u 44m</span>

								<a href="#" class="btn btn-visit-auction">Visit Auction ></a>
							</div>
						</div>
					</div>
					<div class="auction-preview">
						<a href="#" class="auction-image" style="background-image:url('http://lorempixel.com/400/400/');"><span class="overlay"><i class="fa fa-search"></i></span></a>

						<div class="auction-info">
							<span class="artist">1979, Salvador Dali</span>
							<span class="title">Dance of Time III</span>
							<span class="price">&euro; 8.900</span>

							<div class="call-to-action clearfix">
								<span class="timeleft">25d 14u 44m</span>

								<a href="#" class="btn btn-visit-auction">Visit Auction ></a>
							</div>
						</div>
					</div>
					<div class="auction-preview">
						<a href="#" class="auction-image" style="background-image:url('http://lorempixel.com/400/400/');"><span class="overlay"><i class="fa fa-search"></i></span></a>

						<div class="auction-info">
							<span class="artist">1979, Salvador Dali</span>
							<span class="title">Dance of Time III</span>
							<span class="price">&euro; 8.900</span>

							<div class="call-to-action clearfix">
								<span class="timeleft">25d 14u 44m</span>

								<a href="#" class="btn btn-visit-auction">Visit Auction ></a>
							</div>
						</div>
					</div>
					<div class="auction-preview">
						<a href="#" class="auction-image" style="background-image:url('http://lorempixel.com/400/400/');"><span class="overlay"><i class="fa fa-search"></i></span></a>

						<div class="auction-info">
							<span class="artist">1979, Salvador Dali</span>
							<span class="title">Dance of Time III</span>
							<span class="price">&euro; 8.900</span>

							<div class="call-to-action clearfix">
								<span class="timeleft">25d 14u 44m</span>

								<a href="#" class="btn btn-visit-auction">Visit Auction ></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@stop