@extends('layouts.master')

@section('content')


<div class="container">
 <div class="row">
 	<div class="col-md-12">
 	@if (count($auctions) === 0)
		<p>No auctions found</p>
	@elseif (count($auctions) >= 1)
	    @foreach($auctions as $auction)
	  		<p>{{$auction->title}}</p>
	    @endforeach
	@endif
 	</div>
 </div>
</div>

@stop