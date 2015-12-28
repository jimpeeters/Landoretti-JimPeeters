@extends('layouts.master')

@section('title', 'Landoretti')


@section('content')
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
                    	<img class="icon-slider" src="images/icon-slider.png" alt="decorative circle to give attention to the artwork details.">
                        <p><a href="/auction/{{$recentAuction->id}}">{{$recentAuction->descriptionEnglish}}</a></p>
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
        			<div class="popular-image" style="background-image:url('http://lorempixel.com/400/200/');"></div>
        			<div class="popular-image" style="background-image:url('http://lorempixel.com/400/200/');"></div>
        		</div>
        		<div class="col-md-8 popular-right">
        			<div class="popular-image-big" style="background-image:url('http://lorempixel.com/400/200/');"></div>
        		</div>
        	</div>
        </div>
    </div>
</div>

@endsection