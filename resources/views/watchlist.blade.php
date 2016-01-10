@extends('layouts.master')

@section('title', 'Your landoretti watchlist')

@section('content')

	@include('newest-auction-section')


	
<div class="container">

	@if(isset($success))
	   	<div class="row infoBlock">
	   		<div class="col-md-12">
				<div class="alert alert-success">{{$success}}</div>
			</div>
		</div>
	@endif
	@if (isset($warning))
	   	<div class="row infoBlock">
	   		<div class="col-md-12">
				<div class="alert alert-warning">{{$warning}}</div>
			</div>
		</div>
	@endif

	<div class="row">
		<div class="col-md-12">
			{!! Breadcrumbs::render('myWatchlist') !!}
		</div>
	</div>

	<div class="my-watchlist">
		<div class="row">
			<div class="col-md-12">
				<h1>My watchlist</h1>
			</div>
		</div>

	@if(count($watchlist) > 0)

		<div class="row">
			<div class="col-md-3 col-md-offset-6">
				<a href="#" class="add-button">
					DELETE SELECTED<i class="fa fa-angle-right"></i>
				</a>
			</div>
			<div class="col-md-3">
				<a href="#" class="add-button">
					CLEAR WATCHLIST<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
		<div class="row">

			<div class="col-md-12">
				<div class="filter">
					<a class="active" href="#">all(11)</a> |
					<a href="#">active(8)</a> |
					<a href="#">ended(3)</a>
				</div>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
					  <th></th>
					  <th></th>
					  <th>Auction details</th>
					  <th>Estimated price</th>
					  <th>End date</th>
					  <th>Remaining time</th>
					</tr>
					@foreach($watchlist as $item)
					<tr>
						<td><input type="checkbox" name="checkbox"></td>
						<td class="img-preview" style="background-image:url('{{$item->auction->imageArtwork}}');"></td>
						<td>
							<h3>{{$item->auction->title}}</h3>
							<p class="age">{{$item->auction->artist->age}}, {{$item->auction->artist->name}}</p>
						</td>
						<td>
							<h3>&euro; {{$item->auction->currentPrice}}</h3>
						</td>
						<td>
							<p class="date"> {{ date('F d, Y', strtotime($item->auction->enddate)) }}</p>
							<p class="date">{{ date('H:i a (e)', strtotime($item->auction->enddate)) }}</p>
						</td>
						<td>
							<p>25d 14u 44m</p>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	@else
		<h3>You don't have a watchlist !</h3>

	@endif
	</div>
</div>

@stop