<body <?php body_class(); ?>>

	<header class="p-topbar" role="banner">

		<div class="wrapper">

			<div class="p-logo">
				<?php if (is_front_page()) { ?>
					<img src="http://placehold.it/130x50/9ab384/fff&text=logo">
					<span class="visuallyhidden">Wow!</span>
				<?php } else { ?>
					<a href="<?php bloginfo('url'); ?>">
						<img src="http://placehold.it/130x50/9ab384/fff&text=logo">
						<span class="visuallyhidden">Wow!</span>
					</a>
				<?php } ?>
			</div><!--

			--><nav class="p-nav">
				<ul class="nav">
					<li><a href="#">Courses</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Item 1</a></li>
					<li><a href="#">Item 2</a></li>
				</ul>
			</nav>

		</div><!--/.wrapper -->

	</header>