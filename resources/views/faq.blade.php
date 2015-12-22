@extends('layouts.master')

@section('content')

	@include('newest-auction-section')
	@include('breadcrumbs')

<div class="container faqs">
	<div class="row">
		<div class="col-md-12">
			<h1>Find what you're looking for?</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="faq-overview">
				 @foreach($faqs as $key => $faq)
					<a href="#">{{$faq->question}}</a>
				 @endforeach
			</div>
		</div>
	</div>
	@foreach($faqs as $faq)
		<div class="row question">
			<div class="col-md-1">
				<h3>Q</h3>
			</div>
			<div class="col-md-11">
				<p>{{$faq->question}}</p>
			</div>
		</div>
		<div class="row answer">
			<div class="col-md-1">
				<h3>A</h3>
			</div>
			<div class="col-md-11">
				<p>{{$faq->answer}}</p>
			</div>
		</div>
		<hr>
	@endforeach

</div>

@stop