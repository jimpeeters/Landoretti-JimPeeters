@extends('layouts.master')

@section('title', 'Faq search')

@section('content')


<div class="container">
 <div class="row">
 	<p style="margin-top:15px; margin-left: 15px;">Search query = {{$query}}</p>

	@if (count($faqs) != 0)
		@foreach($faqs as $faq)
			<div class="col-md-12" style="margin-top:15px;">
				<h2>{{$faq->question}}</h2>
				<p>{{$faq->answer}}</p>
			</div>
		@endforeach
	@else
	
	<p style="margin-top:15px;">No FAQ found !</p>
	
	@endif

 </div>
</div>

@stop