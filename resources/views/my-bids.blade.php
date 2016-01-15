@extends('layouts.master')

@section('title', 'My landoretti bids')

@section('content')

	@include('newest-auction-section')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			{!! Breadcrumbs::render('myBids') !!}
		</div>
	</div>

	<div class="row my-bids">
		<div class="col-md-12">
			<h1>My bids</h1>
			@if(count($bids) > 0)
				@foreach($bids as $bid)
				<div class="bid">
					<h4>&euro;{{$bid->bidAmount}}</h4>
					<p>Bid placed on : <a href="{{route('auctionDetails', $bid->auction->slug)}}">{{$bid->auction->title}}</a></p>
					@if($bid->bidAmount < $bid->auction->currentPrice)
						<p class="negative">There is currently a higher bid on this auction!</p>	
					@else
						<p class="positive">You are still the highest bidder on this auction!</p>
					@endif
				</div>
				@endforeach
			@else
				<p>You have not placed anny bids!</p>
			@endif
		</div>
	</div>
</div>


@stop