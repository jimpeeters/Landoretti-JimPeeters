@extends('layouts.master')

@section('title', 'Landoretti')


@section('content')

<div class="container">
    @if (session()->has('success'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            </div>
        </div>
    @endif
</div>

<div class="container-full">
         <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                @foreach($recentAuctions as $key => $recentAuction)
                @if($key == 1)
                    <div class="item active">
                @else
                    <div class="item">
                @endif
                    <div class="fill" style="background-image:url('{{$recentAuction->imageArtwork}}');"></div>
                    <div class="carousel-caption">
                    	<img class="icon-slider" src="/images/icon-slider.png" alt="decorative circle to give attention to the artwork details.">
                        <p><a href="{{route('auctionDetails', $recentAuction->id)}}">{{$recentAuction->descriptionEnglish}}</a></p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </header>
</div>

<div class="container">
    <div class="row">
    	<div class="info-home col-md-12">
    		<h1>How does it work?</h1>
    		<div class="col-md-4">
    			<img src="images/icon-pencil.png" alt="an icon shaped as a pencil">
    			<h3>Sign up</h3>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt debitis excepturi.</p>
    		</div>
    		<div class="col-md-4">
    			<img src="images/icon-check.png" alt="an icon shaped as a check mark">
    			<h3>Make deals</h3>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt debitis excepturi.</p>
    		</div>
    		<div class="col-md-4">
    			<img src="images/icon-smiley.png" alt="an icon shaped as a smiley">
    			<h3>Everyone happy!</h3>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt debitis excepturi.</p>
    		</div>
    	</div>
    </div>
</div> 
<div class="section-popular">
    <div class="container">
        <div class="row">
        	<div class="popular-home col-md-12">
        		<h1>Most popular this week</h1>
        		<div class="col-md-4 popular-left">
                @foreach($popularAuctions as $key => $auction)
                    @if($key == 1)
                        <a href="{{route('auctionDetails', $auction->id)}}" class="popular-image" style="background-image:url('{{$auction->imageArtwork}}');"><span class="overlay"><i class="fa fa-search"></i></span></a>
                    @endif

                    @if($key == 2)
        			    <a href="{{route('auctionDetails', $auction->id)}}" class="popular-image" style="background-image:url('{{$auction->imageArtwork}}');"><span class="overlay"><i class="fa fa-search"></i></span></a>
                    @endif
                @endforeach
        		</div>
        		<div class="col-md-8 popular-right">
                @foreach($popularAuctions as $key => $auction)
                    @if($key == 0)
                        <a href="{{route('auctionDetails', $auction->id)}}" class="popular-image" style="background-image:url('{{$auction->imageArtwork}}');"><span class="overlay"><i class="fa fa-search"></i></span></a>
                    @endif
                @endforeach
        		</div>
        	</div>
        </div>
    </div>
</div>

@endsection