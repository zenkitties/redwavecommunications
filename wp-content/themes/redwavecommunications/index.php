<?php get_header(); ?>
		<!-- section -->
		<?php $query = rw_homepage_residential_links(); ?>

			<!--==================== main content start =======================-->

			<div class="col-md-24">
				<div class="col-md-12" id="left">
					<h4 class="red">RESIDENTIAL<br />SOLUTIONS</h4>


					<ul>
						<?php if ($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
						<li><?php the_title(); ?> ></li>
						<? endwhile; endif; ?>
					</ul>
				</div><!-- left side column -->

		<?php $query = rw_homepage_business_links(); ?>
				<div class="col-md-12" id="right">
					<h4 class="red">BUSINESS<br /> SOLUTIONS</h4>

					<ul class="buspad">
						<?php if ($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
						<li><?php the_title(); ?> ></li>
						<? endwhile; endif; ?>
					</ul>
				</div><!-- right side column -->
			</div>
			<div id="getestimate">
				<p><a href="contact-us" target="_self">Get an Estimate</a></p>
			</div>
			<!--=================main content end ==========================-->
		<!-- /section -->


<?php get_footer(); ?>
