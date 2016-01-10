@extends('layouts.master')

@section('title', 'Thank you!')

@section('content')

	@include('newest-auction-section')

<div class="container">
	<div class="row" style="margin: 50px 0px;">
		<div class="col-md-12">
				<h1>You have successfully bought this auction! </h1>
				<p>We want to thank you for purchasing this artwork.</p>
		</div>
	</div>
</div>

@stop