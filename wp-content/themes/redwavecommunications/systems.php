<?php /* Template Name: Systmes Template */ get_header(); ?>

<main role="main">


    <!--===================== Systems Section Begin ==================-->
<div>

    <div class="syscontainer">
        <div class="description col-md-4 col-sm-24 col-xs-24">
            <h1 class="breadcrumbs"><?php the_title(); ?></h1>
            <p class="headpad">We are partnered with leading technology manufacturers to customize the right solution.</p>
        </div><!--description div -->

            <?php
                $args = array(
                'post_type'        => 'rw-system',
                'post_status'      => 'publish',
                'order'            => 'ASC',
                'orderby'          => 'title',
                'posts_per_page'   => -1
                    );
                $loop = new WP_Query($args);
                $loopItr = 1;
                if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post(); ?>

            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 200,150 ), false, '' );?>


<div class="row">
        <div class="products col-md-4 col-sm-24 col-xs-24">
            <div class="image" style="background:url('<?php echo $src[0]; ?>') center no-repeat; background-size: cover;"></div><!--Images in side products-->
            <div class="imgdesc">
                <?php echo types_render_field('system-name', array('output' => 'html')); ?>
            </div><!-- image description -->





            <div class="infocontainer infolist row">
                <img id="tool-tip" src="<?php echo get_template_directory_uri() ?>/img/tool-tip.png" />
                <div class="col-md-14">
                    <p><?php echo types_render_field('system-description', array('output'=>'html')); ?></p>
                </div><!--info section-->
                <div class="col-md-10">
                    <h5><strong>BRANDS</strong></h5>
                    <ul class="bulletlist">
                        <li>
                            <?php
                            echo types_render_field('system-list', array('output' => 'html', 'separator' => '</li><li>'));
                            ?>
                        </li>
                    </ul>
                </div> <!--list section-->
            </div> <!-- Info Container -->

        </div><!--products div-->

      <?php
                    if ($loopItr === 3):
        ?>
</div><div class="row">
        <?php $loopItr=0; endif; ?>



        <?php $loopItr++; endwhile; endif; ?>

        <!--=================== Systems Section End ======================-->
        </div>

    </div><!-- systems container -->
</div>

</main>
<div class="clearfix"></div>

    <?php get_footer(); ?>


