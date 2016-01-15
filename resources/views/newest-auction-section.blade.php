<div class="section-newest" style="background-image:url('{{$newestAuction->imageArtwork}}');">
	<div class="container">
		<div class="row">
			<div class="auction-caption col-md-4 col-md-offset-8">
				<img class="icon-slider" src="/images/icon-slider.png" alt="decorative circle to give attention to the artwork details.">
				<h3>{{$newestAuction->title}}</h3>
				<hr>
				<p>{{$newestAuction->descriptionEnglish}}</p>
				<p>Price: &euro; 
					@if($newestAuction->currentPrice != null)
						{{$newestAuction->currentPrice}}
					@else
						{{$newestAuction->minPrice}}
					@endif
				</p>
				<div class="visit-auction">
					<a href="{{route('auctionDetails', $newestAuction->slug)}}">VISIT AUCTION<i class="fa fa-angle-right"></i></a>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</div>
</div>