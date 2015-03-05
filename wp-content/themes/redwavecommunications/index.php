<?php get_header(); ?>
		<!-- section -->

		<?php
			$args = array(
			'post_type'        => 'rw-home-page',
			'post_status'      => 'publish',
			'order'            => 'ASC',
			'orderby'          => 'title',
			'posts_per_page'   => -1
			);
			$loop = new WP_Query($args);
			$loopItr = 0;
			if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post(); ?>

			<!--==================== main content start =======================-->

			<div class="col-md-24">
				<div class="col-md-12" id="left">
					<h4 class="red"><?php echo the_title(); ?></h4>


					<ul>
						<li><?php echo types_render_field('rw-page-links', array('output' => 'html', 'separator' => '</li><li>')); ?></li>
					</ul>
				</div><!-- left side column -->


				<div class="col-md-12" id="right">
					<h4 class="red"><?php echo the_title(); ?></h4>

					<ul>
						<li><?php echo types_render_field('rw-page-links', array('output' => 'html', 'separator' => '</li><li>')); ?></li>

					</ul>
				</div><!-- right side column -->
			</div>
			<div id="getestimate">
				<p>Get an Estimate.</p>
			</div>
			<!--=================main content end ==========================-->
		<!-- /section -->
				<?php $loopItr++; endwhile; endif; ?>


<?php get_footer(); ?>
