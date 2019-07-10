

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
@include('partials._head')
	<body>


    @include('partials._nav')

		<main role="main">

			@include('partials._messages')
      <!-- include section -->
      @yield('content')

      <!-- include section -->


			<div class="fh5co-spacer fh5co-spacer-md"></div>

      <!-- Call to action -->
      <div class="fh5co-call-to-action text-center">
        <div class="container">
          <div class="fh5co-call-to-action-wrap">
            <div class="fh5co-call-to-action-inner text-center">
              <h3 class="fh5co-call-to-action-text">We’d love to chat about your business.</h3>
              <a href="contact" class="btn btn-outline btn-sm">Get Started</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Call to action -->
			<div class="fh5co-spacer fh5co-spacer-sm"></div>

      <!-- What we work with -->
      <div class="fh5co-what-we-work-with text-center">
        <div class="container">

        </div>
      </div>
      <!-- What we work with -->
			<div class="fh5co-spacer fh5co-spacer-sm"></div>

		</main>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-push-6 col-md-6">
						<ul class="fh5co-footer-social">
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Tumblr</a></li>
							<li><a href="#">Instagram</a></li>
						</ul>
						<p class="fh5co-copyright">
							<small>(c) 2015 <a href="index.html">Vanniks</a>. All Rights Reserved. <br>
Designed by: <a href="http://hpvk.com/">hpvk.com</a> Images: <a href="http://plmd.me/" target="_blank">plmd.me</a> &amp; <a href="http://unsplash.com/" target="_blank">Unsplash</a> </small>
						</p>
			        @if (Route::has('login'))
			            <div>
			                @auth
			                    <a href="{{ url('/home') }}">Home</a>
			                @else
			                    <a href="{{ route('login') }}">Login</a>

			                    @if (Route::has('register'))
			                        <a href="{{ route('register') }}">Register</a>
			                    @endif
			                @endauth
			            </div>
			        @endif

					</div>

				</div>
			</div>
		</footer>

		<!-- Go To Top -->
		<a href="#" class="fh5co-gotop"><i class="ti-shift-left"></i></a>


		<!-- jQuery -->
		<!-- jQuery Easing -->
		<script src="/js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="/js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="/js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="/js/jquery.magnific-popup.min.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="/js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="/js/fastclick.js"></script>
		<!-- Velocity -->
		<script src="/js/velocity.min.js"></script>

		<!-- Main JS -->
		<script src="/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/typeit@6/dist/typeit.min.js" ></script>

    @yield('scripts')
	</body>
</html>
