<div class="section-footer">
	<div class="container">
		<div class="footer row">
				<div class="col-md-3">
					<h4>HELP</h4>
					<a href="#">{{trans('footer.login')}}</a>
					<a href="#">{{trans('footer.register')}}</a>
					<br>
					<h4>HELP</h4>
					<a href="#">{{trans('footer.tos')}}</a>
					<a href="#">{{trans('footer.privacy')}}</a>
					<a href="{{route('faq')}}">{{trans('footer.faq')}}</a>
					<a href="#">{{trans('footer.contact')}}</a>
					<a href="#">{{trans('footer.about')}}</a>
					<br>
					<h4>{{trans('footer.languages')}}</h4>
					<a href="/nl">{{trans('footer.dutch')}}</a>
					<a href="/en">{{trans('footer.english')}}</a>
				</div>
				<div class="col-md-3">
					<h4>{{trans('footer.style')}}</h4>
						<form id="sort-form" action="{{route('styleFilter')}}" method="post">
							<button class="button-clean" type="submit" name="type" value="1">{{trans('footer.abstract')}}</button>
							<button class="button-clean" type="submit" name="type" value="2">{{trans('footer.africana')}}</button>
							<button class="button-clean" type="submit" name="type" value="3">{{trans('footer.asianc')}}</button>
							<button class="button-clean" type="submit" name="type" value="4">{{trans('footer.conceptual')}}</button>
							<button class="button-clean" type="submit" name="type" value="5">{{trans('footer.contemporary')}}</button>
							<button class="button-clean" type="submit" name="type" value="6">{{trans('footer.emerginga')}}</button>
							<button class="button-clean" type="submit" name="type" value="7">{{trans('footer.figurative')}}</button>
							<button class="button-clean" type="submit" name="type" value="8">{{trans('footer.middleec')}}</button>
							<button class="button-clean" type="submit" name="type" value="9">{{trans('footer.minimalism')}}</button>
							<button class="button-clean" type="submit" name="type" value="10">{{trans('footer.modern')}}</button>
							<button class="button-clean" type="submit" name="type" value="11">{{trans('footer.pop')}}</button>
							<button class="button-clean" type="submit" name="type" value="12">{{trans('footer.urban')}}</button>
							<button class="button-clean" type="submit" name="type" value="13">{{trans('footer.vintage')}}</button>
							<input type="hidden" value="{{ csrf_token() }}" name="_token">
						</form>
					<h4>{{trans('footer.media')}}</h4>
						<form id="sort-form" action="{{route('categoryFilter')}}" method="post">
							<button class="button-clean" type="submit" name="type" value="1">{{trans('footer.design')}}</button>
							<button class="button-clean" type="submit" name="type" value="2">{{trans('footer.paintings')}}</button>
							<button class="button-clean" type="submit" name="type" value="3">{{trans('footer.photographs')}}</button>
							<button class="button-clean" type="submit" name="type" value="4">{{trans('footer.prints')}}</button>
							<button class="button-clean" type="submit" name="type" value="5">{{trans('footer.sculpture')}}</button>
							<input type="hidden" value="{{ csrf_token() }}" name="_token">
						</form>
				</div>
				<div class="col-md-3">
					<h4>{{trans('footer.price')}}</h4>
						<form id="sort-form" action="{{route('priceFilter')}}" method="post">
						    <button class="button-clean" type="submit" name="type" value="<5000">{{trans('footer.upto')}} 5,000</button>
						    <button class="button-clean" type="submit" name="type" value="<10000">5,000-10,000</button>
						    <button class="button-clean" type="submit" name="type" value="<25000">10,000-25,000</button>
						    <button class="button-clean" type="submit" name="type" value="<50000">25,000-50,000</button>
						    <button class="button-clean" type="submit" name="type" value="<100000">50,000-100,000</button>
						    <button class="button-clean" type="submit" name="type" value=">100000">{{trans('footer.above')}}</button>
						    <input type="hidden" value="{{ csrf_token() }}" name="_token">
						</form>
					<br>
					<h4>{{trans('footer.era')}}</h4>
						<form id="sort-form" action="{{route('eraFilter')}}" method="post">
							<button class="button-clean" type="submit" name="type" value="1">{{trans('footer.prewar')}}</button>
							<button class="button-clean" type="submit" name="type" value="2">1940s-1950s</button>
							<button class="button-clean" type="submit" name="type" value="3">1960s-1980s</button>
							<button class="button-clean" type="submit" name="type" value="4">{{trans('footer.present')}}</button>
							<input type="hidden" value="{{ csrf_token() }}" name="_token">
						</form>
					<br>
					<h4>{{trans('footer.endings')}}</h4>
						<form id="sort-form" action="{{route('endingFilter')}}" method="post">
							<button class="button-clean" type="submit" name="type" value="thisweek">{{trans('footer.endingtw')}}</button>
							<button class="button-clean" type="submit" name="type" value="newlisted">{{trans('footer.new')}}</button>
							<button class="button-clean" type="submit" name="type" value="purchasenow">{{trans('footer.purchasen')}}</button>
							<input type="hidden" value="{{ csrf_token() }}" name="_token">
						</form>
				</div>
				<div class="left-border col-md-3">
					<h4>{{trans('footer.find')}}</h4>
					<input class="search-field" placeholder="Search">
					<i class="fa fa-search"></i>
					<br>
					<br>
					<h4>{{trans('footer.contact')}}</h4>
					<p>Landoretti ART</p>
					<p>Landorettilaan xxx</p>
					<p>xxxx, Oostende</p>
					<br>
					<p><i class="fa fa-phone"></i> +xx (0)x xxx xx xx</p>
					<p><i class="fa fa-envelope-o"></i> <a class="email-link" href="#">info&amp;landorettiart.com</a>
					<p class="social-logos">
						<img src="/images/icon-facebook.png" alt="facebook icon">
						<img src="/images/icon-twitter.png" alt="facebook icon">
						<img src="/images/icon-youtube.png" alt="facebook icon">
						<img src="/images/icon-google.png" alt="facebook icon">
					</p>
					<p class="copyright-text">&copy; 2013 Studio6, Inc. All rights reserved</p>
				</div>
		</div>
	</div>
</div>

<div class="section-subnav section-footer-subnav">
	<div class="container">
		<div class="sub-navigation row">
			<img id="footer-logo" src="/images/logo.png" alt="Landoretti ART logo">
			<div class="col-md-6 col-md-offset-2">
				<a href="{{route('home')}}">{{trans('footer.home')}}</a>
				<a href="{{route('auctions')}}">{{trans('footer.art')}}</a>
				<a href="{{route('myAuctions')}}">{{trans('footer.myauctions')}}</a>
				<a href="{{route('myBids')}}">{{trans('footer.mybids')}}</a>
				<a href="{{route('contact')}}t">{{trans('footer.contact')}}</a>
			</div>
			<div class="col-md-2 col-md-offset-2">
				<a class="pull-right language-link" href="#">NL</a>
				<a class="pull-right language-link" href="#">EN</a>
			</div>
		</div>
	</div>
</div>