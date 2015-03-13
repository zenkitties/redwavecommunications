<?php /* Template Name: Services Template */ get_header(); ?>

<main role="main">

    <h3 class="breadcrumbs"><?php the_title(); ?></h3>

    <div class="row">
    <!--==================== services begins ==========================-->

    <!--================= php loop for services begin =================-->

        <?php
            $args = array(
                'post_type'        => 'rw-service',
                'post_status'      => 'publish',
                'order'            => 'ASC',
                'orderby'          => 'date',
                'posts_per_page'   => 3
            );
            $loop = new WP_Query($args);
            $loopItr = 0;
            if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post();
        ?>

        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 200,150 ), false, '' );?>

                <?php
                    $colWidth = $loopItr <=1 ? '7' : '10';
                ?>
    <div id="service">
        <div class="col-md-<?php echo $colWidth; ?> pad"><!-- individual service begin -->
            <div class="service" style="background:url('<?php echo $src[0]; ?>')no-repeat center; background-size: cover;"><!-- service name and photo begin -->
                <span class="bottom-span"><p><h4><?php echo types_render_field('service-name', array('output' => 'html')); ?></h4></p></span>
            </div><!-- photo and service-name end -->
            <div class="servicedesc"><!-- service description start -->
                <p><?php echo types_render_field('service-description', array('output' => 'html')); ?></p><br />

                <b class="red">Services Provided:</b><br/>
                <ul>
                    <li>
                     <?php
                         echo types_render_field('service-list-item', array('output' => 'html', 'separator' => '</li><li>'));
                     ?>
                    </li>
                </ul>
            </div><!-- service-description end -->
        </div><!-- individual service end -->
    </div> <!-- container -->
        <?php $loopItr++; endwhile; endif; ?>
    </div> <!-- service container end -->

   <!--=================== services end =================================-->

</main>

<?php get_footer(); ?>