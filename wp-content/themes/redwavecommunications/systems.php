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
            <div class="infocontainer info">
                <div class="col-md-14">
                    <p><?php echo types_render_field('system-description', array('output'=>'html')); ?></p>
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

        <?php $loopItr++; endwhile; endif; ?>
        <!--=================== Systems Section End ======================-->


</main>

<?php get_footer(); ?>