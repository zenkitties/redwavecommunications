<?php /* Template Name: Systmes Template */ get_header(); ?>

<main role="main">


    <!--===================== Systems Section Begin ==================-->


    <div class="syscontainer col-md-24">
        <div class="description">
            <h3 class="breadcrumbs"><?php the_title(); ?></h3>
            <p class="breadcrumbs">We are partnered with leading technology manufacturers to customize the right solution.</p>
        </div><!--description div-->

        <?php
        $args = array(
            'post_type'        => 'rw-system',
            'post_status'      => 'publish',
            'order'            => 'ASC',
            'orderby'          => 'title',
            'posts_per_page'   => -1
        );
        $loop = new WP_Query($args);
        $loopItr = 0;
        if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post(); ?>

            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 200,150 ), false, '' );?>


        <div class="products">
            <div class="imgdesc">
                <?php echo types_render_field('system-name', array('output' => 'html')); ?>
            </div>
            <div class="image" style="background:url('<?php echo $src[0]; ?>') center no-repeat; background-size: cover;">

            </div><!--Images in side products-->

        </div><!--products div-->

        <?php $loopItr++; endwhile; endif; ?>
        <!--=================== Systems Section End ======================-->

        <div class="products">
            <p>Structured Cabling</p>
            <div class="image">
                <p>Image Goes Here</p>
            </div><!--Images inside products-->
            <div class="infocontainer info">
                <div class="col-md-14">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div><!--info section-->
                <div class="col-md-10">
                    <ul>
                        <li>Egan Teamboard ></li>
                        <li>Milestone AV ></li>
                        <li>SP Control ></li>
                        <li>Frontrow ></li>
                        <li>Extron Electronics ></li>
                    </ul>
                </div> <!--list section-->
            </div> <!-- Info Container -->
        </div><!--products div-->

  <!--=================================== systems endings ==================================-->

</main>

<?php get_footer(); ?>