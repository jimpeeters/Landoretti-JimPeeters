@extends('layouts.master')

@section('title', 'Faq search')

@section('content')


<div class="container">
 <div class="row">
 	<p>Search query = {{$last_query->query}}</p>

	@if (count($faqs) != 0)
		@foreach($faqs as $faq)
			<div class="col-md-12">
				<h2>{{$faq->question}}</h2>
				<p>{{$faq->answer}}</p>
			</div>
		@endforeach
	@else

 </div>
</div>

@stop