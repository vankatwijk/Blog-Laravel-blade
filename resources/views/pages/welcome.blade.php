@extends('main')

@section('title','Home')
@section('homeSelect','fh5co-active')

@section('content')
			<style>

			#fh5co-main-nav ul > li.fh5co-active a {
			    color: #ffffff;
			}

			#fh5co-main-nav ul > li > a {
			    color: #ffffff;
			}
			#billboard {
			    background-image: url(https://images.unsplash.com/photo-1552404777-2db2c7943e09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1401&q=80);
			    background-repeat: no-repeat;
			    position: absolute;
			    top: 0px;
			    left: 0px;
			    right: 0px;
			    height: 700px;
			    background-attachment: fixed;
			    background-position: center top;
					background-size: cover;
			    z-index: -2;
			}

			</style>
			<div id="billboard"></div>

			<!-- Start Intro -->
			<div id="fh5co-intro">
				<div class="container">
					<h1 id='tagline' >Digital solutions </h1>
						<div class="row">
							<div class="col-md-6 col-md-push-6 fh5co-intro-sub" style="padding: 15px;background: black;color: white;">
								<p>We are a team of specialists with valid expertise from several aspects of information technology and marketing areas. From meeting the client to design, application development, programming, and marketing, we have the right people to make it happen on time and according to plan and budget.</p>
							</div>
						</div>
				</div>
			</div>
			<!-- End Intro -->



      <!-- Tabs -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h2 class="fh5co-uppercase-heading-sm text-center">What we offer</h2>

              <div class="fh5co-spacer fh5co-spacer-xs"></div>

              <!-- Center Tabs -->
              <div id="fh5co-tab-feature-center" class="fh5co-tab text-center">
                <ul class="resp-tabs-list hor_1">
                  <li><i class="fh5co-tab-menu-icon ti-ruler-pencil"></i>Web development</li>
                  <li><i class="fh5co-tab-menu-icon ti-paint-bucket"></i> Mobile</li>
                  <li><i class="fh5co-tab-menu-icon ti-shopping-cart"></i> Marketing</li>
                </ul>
                <div class="resp-tabs-container hor_1">
                  <div>
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="h3">Web developer</h2>
                      </div>
                      <div class="col-md-6">
                        <p>The best thing about bespoke software development is that we are able to produce the tools you need while making sure that these tools grow alongside your team and changing business requirements. This is our primary expertise as we pride ourselves in creating awesome software.</p>
                      </div>
                      <div class="col-md-6">
                        <p><strong>What we can do for you: </strong>
                          <ul>
                            <li>build a customer relations system(crm)</li>
                            <li>Content managment systems(cms)</li>
                            <li>Asterix callcenter software</li>
                          </ul>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="h3">Mobile</h2>
                      </div>
                      <div class="col-md-6">
                        <p>We create native apps for Android and webbased apps for IOS. Build an app to facilitate workload for your team or engage with customers through their smartphones. Our expertise in interface design, usability and robust software ensure the results you need.</p>
                      </div>
                      <div class="col-md-6">
                        <p><strong>What we can do for you: </strong>
                          <ul>
                            <li>Native android apps</li>
                            <li>Web based IOS android apps</li>
                          </ul>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="h3">Marketing</h2>
                      </div>
                      <div class="col-md-6">
                        <p>First impressions matter. Our industry experience and marketing strategies ensure that your message is heard loud and clear and reach your target audience. We’ll craft a smart effective marketing campaign for your brand.</p>
                      </div>
                      <div class="col-md-6">
                        <p><strong>What we can do for you: </strong>
                          <ul>
                            <li>Branding</li>
                          </ul>
                          <li>Online marketing</li>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Center Tabs -->
            </div>
          </div>
        </div>



			<!-- Start Work -->
			<div id="fh5co-work">
				<div class="container">
					<div class="row">

						@foreach($posts as $post)
								<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
									<a href="" class="fh5co-work-item js-fh5co-work-item">
										<img src="/images/work_1.jpg" alt="Image" class="img-responsive">
										<div class="fh5co-overlay-bg js-fh5co-overlay-bg" style=""></div>
										<div class="fh5co-overlay-text" style="opacity: 1;">
											<h2>{{$post->title}}</h2>
											<ul class="fh5co-categories">
												<li>Web Design</li>
												<li>Identity</li>
												<li>Packaging</li>
											</ul>
										</div>
									</a>
								</div>
			      @endforeach

					</div>

					<!-- Start More Works -->
					<div class="row">
						<div class="col-md-12 fh5co-more-works js-fh5co-more-works">
							<div class="row">
									<!--here goes the hidden post-->
									@foreach($hiddenPosts as $hiddenPost)
											<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
												<a href="" class="fh5co-work-item js-fh5co-work-item">
													<img src="/images/work_1.jpg" alt="Image" class="img-responsive">
													<div class="fh5co-overlay-bg js-fh5co-overlay-bg" style=""></div>
													<div class="fh5co-overlay-text" style="opacity: 1;">
														<h2>{{$hiddenPost->title}}</h2>
														<ul class="fh5co-categories">
															<li>Web Design</li>
															<li>Identity</li>
															<li>Packaging</li>
														</ul>
													</div>
												</a>
											</div>
									@endforeach
							</div>
						</div>
						<div class="col-md-12 text-center">
						<a href="#" class="fh5co-view js-fh5co-view"><span class="fh5co-icon-view"><i class="ti-plus"></i></span> <span class="js-fh5co-view-text">View All</span></a>
						</div>
					</div>
					<!-- End More Works -->


				</div>
			</div>
			<!-- End Work -->

@stop

@section('scripts')
  <script>
  new TypeIt('#tagline', {
    speed: 100,
    startDelay: 900,
    waitUntilVisible: true,
    breakLines: false
  })
  .type("<h3>Let's make something from developm</h3>")
  .pause(500)
  .options({speed: 100, deleteSpeed: 75})
  .delete(8)
  .pause(750)
  .type('<h3>nothing.</h3>')
  .go();
  </script>
@stop
