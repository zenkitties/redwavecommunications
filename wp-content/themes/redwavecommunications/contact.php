<?php /* Template Name: Contact Us Template */ get_header(); ?>

    <main role="main">
        <h1 class="breadcrumbs red"><?php the_title(); ?></h1>

<!--==================== contact start =======================-->
<div class="contact-container">

        <!-- Contact us form information -->
        <div class="col-md-3" id="contact-info">
            <?php
                $args = array(
                'post_type'        => 'rw-contact-us',
                'post_status'      => 'publish',
                'order'            => 'ASC',
                'orderby'          => 'date',
                'posts_per_page'   => 2
                );

                $loop = new WP_Query($args);
                    $loopItr = 0;
                    if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post();
                    ?>

            <div class="contactadd">
                <b><?php echo types_render_field('rw-location', array('output' => 'HTML')); ?></b><br />
                <?php echo types_render_field('rw-address', array('output' => 'HTML', 'separator' => '<br />')); ?>
            </div><!-- closing div-->

                <?php $loopItr++; endwhile; endif; ?>

                <p><a href="mailto:info@redwavecomm.com">info@redwavecomm.com</a></p>
        </div>
        <div class="col-md-19">
            <div class="col-md-10">
                <?php echo do_shortcode('[ninja_forms_display_form id=2]'); ?>
            </div><!-- ninja form -->
            <div class="col-md-11"></div>

        </div><!-- form container -->

</div><!-- overall container -->
    <!--============================== contact us end code ===============================-->

    </main>

<?php get_footer(); ?>