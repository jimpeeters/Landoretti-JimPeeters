@extends('layouts.master')

@section('title', 'Auction search')

@section('content')


<div class="container">
 <div class="row">
 	<p>Search query = {{$last_query}}</p>

 	@if (count($auctions) === 0)
 	 	<div class="col-md-6">
			<p>Nothing found</p>
		</div>
	@elseif (count($auctions) >= 1)
	    @foreach($auctions as $auction)
	    <div class="col-md-12">
	  		<a href="{{route('auctionDetails', $auction->id)}}">{{$auction->title}}</a>
	  		<p> {{$auction->descriptionEnglish}} </p>
	  	</div>
	    @endforeach
	@endif

 </div>
</div>

@stop