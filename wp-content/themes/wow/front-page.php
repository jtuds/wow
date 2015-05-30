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

						<?php 
						$query = new WP_Query( array('post_type'=>'tribe_events','posts_per_page'         => '3') );
						if($query->have_posts()):

							$temp_img_counter = 1;

							$html = '';

							while($query->have_posts()): $query->the_post();

							$event_name = $post->post_title;
							$post_link = get_the_permalink($post->ID);
							$event_cost = tribe_get_cost( null, true );

							$html .= '<div class="grid__item one-third">';
							$html .= '<div class="p-featured-event">';
							$html .= '<img class="p-featured-event-img" src="' . getImagePath(true) . '/course-' . $temp_img_counter . '.jpg">';
							$html .= '<div class="p-featured-event-info">';
							$html .= '<h2 class="p-featured-event-title">' . $event_name . '</h2>';
							$html .= '<p class="p-event-price">' . $event_cost . ' <span>per person</span></p>';
							$html .= '</div>';
							$html .= '<div class="p-event-cta">';
							$html .= '<a href="' . $post_link . '" class="btn btn--background-secondary-tri-one p-cta-btn p-event-view">View event</a>';
							$html .= '</div>';
							$html .= '</div>';
							$html .= '</div>';

							$temp_img_counter++; endwhile;

							echo $html;

						endif;
						?>

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
