@extends('layouts.master')

@section('title', 'My landoretti auctions')

@section('content')

	@include('newest-auction-section')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			{!! Breadcrumbs::render('myAuctions') !!}
		</div>
	</div>
</div>

@if(isset($auctions) &&  $auctions->count() > 0)

<div class="container">
	<div class="my-auctions">
		<div class="row">
			<div class="col-md-10">
				<h1>My auctions</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-9">
				<a href="{{route('createAuction')}}" class="add-button">
					ADD NEW AUCTION<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
		<div class="row">

			<div class="col-md-12">
				<h3>Pending</h3>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
					  <th></th>
					  <th>Auction details</th>
					  <th>Estimated price</th>
					  <th>End date</th>
					  <th>Remaining time</th>
					</tr>
					@foreach($auctions as $auction)
						@if($auction->FK_status_id == 1)
							<tr>
								<td class="img-preview" style="background-image:url('{{$auction->imageArtwork}}');"></td>
								<td>
									<h3>{{$auction->title}}</h3>
									<p class="age">{{$auction->year}}, 
										{{$auction->artist->name}}
									</p>
								</td>
								<td>
									<h3>&euro;{{$auction->minPrice}}</h3>
								</td>
								<td>
									<p class="date"> {{ date('F d, Y', strtotime($auction->enddate)) }}</p>
									<p class="date">{{ date('H:i a (e)', strtotime($auction->enddate)) }}</p>
								</td>
								<td>
									<p>25d 14u 44m</p>
								</td>
							</tr>
						@endif
					@endforeach
				</table>
			</div>

			<div class="col-md-12">
				<h3>Refused</h3>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
					  <th></th>
					  <th>Auction details</th>
					  <th>Estimated price</th>
					  <th>End date</th>
					  <th>Remaining time</th>
					</tr>
					@foreach($auctions as $auction)
						@if($auction->FK_status_id == 2)
							<tr>
								<td class="img-preview" style="background-image:url('{{$auction->imageArtwork}}');"></td>
								<td>
									<h3>{{$auction->title}}</h3>
									<p class="age">{{$auction->year}}, 
										{{$auction->artist->name}}
									</p>
								</td>
								<td>
									<h3>&euro;{{$auction->minPrice}}</h3>
								</td>
								<td>
									<p class="date">{{$auction->enddate}}</p>
									<p class="date">13:00 p.m. (EST)</p>
								</td>
								<td>
									<p>25d 14u 44m</p>
								</td>
							</tr>
						@endif
					@endforeach
				</table>
			</div>
			<div class="col-md-12">
				<h3>Active</h3>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
					  <th></th>
					  <th>Auction details</th>
					  <th>Estimated price</th>
					  <th>End date</th>
					  <th>Remaining time</th>
					</tr>
					@foreach($auctions as $auction)
						@if($auction->FK_status_id == 3)
							<tr>
								<td class="img-preview" style="background-image:url('{{$auction->imageArtwork}}');"></td>
								<td>
									<h3>{{$auction->title}}</h3>
									<p class="age">{{$auction->year}}, 
										{{$auction->artist->name}}
									</p>
								</td>
								<td>
									<h3>&euro;{{$auction->minPrice}}</h3>
								</td>
								<td>
									<p class="date">{{$auction->enddate}}</p>
									<p class="date">13:00 p.m. (EST)</p>
								</td>
								<td>
									<p>25d 14u 44m</p>
								</td>
							</tr>
						@endif
					@endforeach
				</table>
			</div>

			<div class="col-md-12">
				<h3>Expired</h3>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
					  <th></th>
					  <th>Auction details</th>
					  <th>Estimated price</th>
					  <th>End date</th>
					  <th>Remaining time</th>
					</tr>
					@foreach($auctions as $auction)
						@if($auction->FK_status_id == 4)
							<tr>
								<td class="img-preview" style="background-image:url('{{$auction->imageArtwork}}');"></td>
								<td>
									<h3>{{$auction->title}}</h3>
									<p class="age">{{$auction->year}}, 
										{{$auction->artist->name}}
									</p>
								</td>
								<td>
									<h3>&euro;{{$auction->minPrice}}</h3>
								</td>
								<td>
									<p class="date">{{$auction->enddate}}</p>
									<p class="date">13:00 p.m. (EST)</p>
								</td>
								<td>
									<p>25d 14u 44m</p>
								</td>
							</tr>
						@endif
					@endforeach
				</table>
			</div>

			<div class="col-md-12">
				<h3>Sold</h3>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered">
						<tr>
						  <th></th>
						  <th>Auction details</th>
						  <th>Estimated price</th>
						  <th>End date</th>
						  <th>Remaining time</th>
						</tr>
						@foreach($auctions as $auction)
							@if($auction->FK_status_id == 5)
								<tr>
									<td class="img-preview" style="background-image:url('{{$auction->imageArtwork}}');"></td>
									<td>
										<h3>{{$auction->title}}</h3>
										<p class="age">{{$auction->year}}, 
											{{$auction->artist->name}}
										</p>
									</td>
									<td>
										<h3>&euro;{{$auction->minPrice}}</h3>
									</td>
									<td>
										<p class="date">{{$auction->enddate}}</p>
										<p class="date">13:00 p.m. (EST)</p>
									</td>
									<td>
										<p>25d 14u 44m</p>
									</td>
								</tr>
							@endif
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>

@else

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>You currently have no auctions ! </h1>

		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<a href="#" class="add-button">
				ADD NEW AUCTION<i class="fa fa-angle-right"></i>
			</a>
		</div>
	</div>
</div>

@endif


@stop