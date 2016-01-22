@extends('layouts.master')

@section('title', 'Auction search')

@section('content')


<div class="container">
 <div class="row">
 	<p style="margin-top:15px; margin-left: 15px;">Search query = {{$query}}</p>

 	@if (count($auctions) === 0)
 	 	<div class="col-md-6" style="margin-top:15px;">
			<p>Nothing found</p>
		</div>
	@elseif (count($auctions) >= 1)
	    @foreach($auctions as $auction)
	    <div class="col-md-12" style="margin-top:15px;">
	  		<a href="{{route('auctionDetails', $auction->slug)}}">{{$auction->title}}</a>
	  		<p> {{$auction->descriptionEnglish}} </p>
	  	</div>
	    @endforeach
	@endif

 </div>
</div>

@stop