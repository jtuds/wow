<?php get_header(); ?>

	<main role="main">

		<div class="p-hero-banner">
			<div class="p-cta-wrap">
				<div class="p-cta-wrap-inner">
					<div class="p-cta">
						<h1>Short tagline</h1>
						<h2>Search for events coming up near you</h2>
					</div>
					<form>
						<input class="form__input form__input--light" type="text" placeholder="Postcode">
						<input class="form__input form__input--light" type="text" placeholder="dd/mm/yy">
						<input class="btn btn--background-secondary-tri-one p-cta-btn" type="submit" value="Search events">
					</form>
				</div>
			</div>
		</div>

		<div class="panel panel--half">
			<div class="wrapper">
				<div class="p-featured-events">
					<div class="grid">
						<div class="grid__item">
							<h1 class="p-featured-events-heading">Featured events</h1>
						</div><!--/.grid__item -->
						<div class="grid__item one-third">
							<div class="p-featured-event">
								<img class="p-featured-event-img" src="<?php getImagePath(); ?>/course-1.jpg">
								<div class="p-featured-event-info">
									<h2 class="p-featured-event-title">St Andrews</h2>
									<p class="p-event-price">£33 <span>per person</span></p>
								</div><!--
								--><div class="p-event-cta">
									<a href="#" class="btn btn--background-secondary-tri-one p-cta-btn p-event-view">View event</a>
								</div>
							</div>
						</div><!--/.grid__item -->
						<div class="grid__item one-third">
							<div class="p-featured-event">
								<img class="p-featured-event-img" src="<?php getImagePath(); ?>/course-2.jpg">
								<div class="p-featured-event-info">
									<h2 class="p-featured-event-title">Augusta</h2>
									<p class="p-event-price">£40 <span>per person</span></p>
								</div><!--
								--><div class="p-event-cta">
									<a href="#" class="btn btn--background-secondary-tri-one p-cta-btn p-event-view">View event</a>
								</div>
							</div>
						</div><!--/.grid__item -->
						<div class="grid__item one-third">
							<div class="p-featured-event">
								<img class="p-featured-event-img" src="<?php getImagePath(); ?>/course-3.jpg">
								<div class="p-featured-event-info">
									<h2 class="p-featured-event-title">Pine Valley</h2>
									<p class="p-event-price">£25 <span>per person</span></p>
								</div><!--
								--><div class="p-event-cta">
									<a href="#" class="btn btn--background-secondary-tri-one p-cta-btn p-event-view">View event</a>
								</div>
							</div>
						</div><!--/.grid__item -->
					</div><!--/.grid -->
				</div><!--/.p-featured-events -->
			</div><!--/.wrapper -->
		</div><!--/.panel -->

		<div class="panel panel--half">
			<div class="wrapper">
				<div class="p-featured-blogs">
					<h1 class="p-featured-blogs-heading">Featured articles</h1>
					<div class="grid">
						<div class="grid__item one-third">
							<div class="p-featured-blog">
								<h3 class="p-featured-blog-heading">Ian Poulter</h3>
								<p class="p-featured-blog-blurb">Ian Poulter moves second at the Crowne Plaza Invitational as he looks to respond to criticism from PGA Tour professionals...</p>
								<a href="#" class="p-featured-blog-view btn btn--small btn--background-secondary-tri-two">Read more</a>
							</div>
						</div><!--/.grid__item -->
						<div class="grid__item one-third">
							<div class="p-featured-blog">
								<h3 class="p-featured-blog-heading">Rory McIlroy</h3>
								<p class="p-featured-blog-blurb">World number one Rory McIlroy misses the cut in the BMW PGA Championship at Wentworth after a second round of 78...</p>
								<a href="#" class="p-featured-blog-view btn btn--small btn--background-secondary-tri-two">Read more</a>
							</div>
						</div><!--/.grid__item -->
						<div class="grid__item one-third">
							<div class="p-featured-blog p-featured-blog--last">
								<h3 class="p-featured-blog-heading">Latest positions</h3>
								<p class="p-featured-blog-blurb">Latest positions from the European Tour event at Wentworth, where Francesco Molinari is among the contenders...</p>
								<a href="#" class="p-featured-blog-view btn btn--small btn--background-secondary-tri-two">Read more</a>
							</div>
						</div><!--/.grid__item -->
					</div><!--/.grid -->
					<div class="p-featured-blogs-view-all">
						<a href="#" class=" btn btn--background-secondary-tri-two">View all</a>
					</div>
				</div>
			</div><!--/.wrapper -->
		</div><!--/.panel -->

	</main>

<?php get_footer(); ?>
