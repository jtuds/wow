<?php get_header(); ?>

	<main role="main">

		<div class="p-hero-banner">
			<div class="p-cta-wrap">
				<div class="p-cta-wrap-inner">
					<div class="p-cta">
						<h1>Short tagline</h1>
						<h2>Search for competitions coming up near you</h2>
					</div>
					<form>
						<input class="form__input form__input--light" type="text" placeholder="Postcode">
						<input class="form__input form__input--light" type="text" placeholder="dd/mm/yy">
						<input class="btn btn--background-secondary-tri-one p-cta-btn" type="submit" value="Search courses">
					</form>
				</div>
			</div>
		</div>

		<div class="panel panel--half">
			<div class="wrapper">
				<div class="p-featured-courses">
					<div class="grid">
						<div class="grid__item">
							<h1>Featured courses</h1>
						</div><!--/.grid__item -->
						<div class="grid__item one-third">
							<div class="p-featured-course">
								<img class="p-featured-course-img" src="<?php getImagePath(); ?>/course-1.jpg">
								<div class="p-featured-course-info">
									<h2 class="p-featured-course-title">St Andrews</h2>
									<p class="p-course-price">£33 <span>per person</span></p>
								</div><!--
								--><div class="p-course-cta">
									<a href="#" class="btn btn--background-secondary-tri-one p-cta-btn p-course-view">View competitions</a>
								</div>
							</div>
						</div><!--/.grid__item -->
						<div class="grid__item one-third">
							<div class="p-featured-course">
								<img class="p-featured-course-img" src="<?php getImagePath(); ?>/course-2.jpg">
								<div class="p-featured-course-info">
									<h2 class="p-featured-course-title">Augusta</h2>
									<p class="p-course-price">£40 <span>per person</span></p>
								</div><!--
								--><div class="p-course-cta">
									<a href="#" class="btn btn--background-secondary-tri-one p-cta-btn p-course-view">View competitions</a>
								</div>
							</div>
						</div><!--/.grid__item -->
						<div class="grid__item one-third">
							<div class="p-featured-course">
								<img class="p-featured-course-img" src="<?php getImagePath(); ?>/course-3.jpg">
								<div class="p-featured-course-info">
									<h2 class="p-featured-course-title">Pine Valley</h2>
									<p class="p-course-price">£25 <span>per person</span></p>
								</div><!--
								--><div class="p-course-cta">
									<a href="#" class="btn btn--background-secondary-tri-one p-cta-btn p-course-view">View competitions</a>
								</div>
							</div>
						</div><!--/.grid__item -->
					</div><!--/.grid -->
				</div><!--/.p-featured-courses -->
			</div><!--/.wrapper -->
		</div><!--/.panel -->

		<div class="p-featured-blogs">
			<h2>Blog/articles</h2>
			<div class="p-featured-blog">
				<h3 class="p-featured-blog-heading">Heading</h3>
				<p class="p-featured-blog-blurb">Lorem ipsum dolor sit amet serunt mollit anim id est laborum.</p>
				<a href="#" class="p-featured-blog-view">Read</a>
			</div>
			<div class="p-featured-blog">
				<h3 class="p-featured-blog-heading">Heading</h3>
				<p class="p-featured-blog-blurb">Lorem ipsum dolor sit amet serunt mollit anim id est laborum.</p>
				<a href="#" class="p-featured-blog-view">Read</a>
			</div>
			<div class="p-featured-blog">
				<h3 class="p-featured-blog-heading">Heading</h3>
				<p class="p-featured-blog-blurb">Lorem ipsum dolor sit amet serunt mollit anim id est laborum.</p>
				<a href="#" class="p-featured-blog-view">Read</a>
			</div>
		</div>

	</main>

<?php get_footer(); ?>
