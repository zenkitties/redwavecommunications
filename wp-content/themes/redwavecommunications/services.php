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
                'posts_per_page'   => 4
            );
            $loop = new WP_Query($args);
            $loopItr = 0;
            if ($loop->have_posts()): while($loop->have_posts()): $loop->the_post();
        ?>

        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 200,150 ), false, '' );?>

                <?php
                    $colWidth = $loopItr <=2 ? '4' : '12';
                ?>

        <div class="col-md-<?php echo $colWidth; ?> pad"><!-- individual service begin -->
            <div class="service" style="background:url('<?php echo $src[0]; ?>') center no-repeat; background-size: cover;"><!-- service name and photo begin -->
                <span class="bottom-span"><p><h4><?php echo types_render_field('service-name', array('output' => 'html')); ?></h4></p></span>
            </div><!-- photo and service-name end -->
            <div class="servicedesc"><!-- service description start -->
                <p><?php echo types_render_field('service-description', array('output' => 'html')); ?></p><br />

                <b>Services Provided:</b><br/>
                <ul>
                    <li>
                     <?php
                         echo types_render_field('service-list-item', array('output' => 'html', 'separator' => '</li><li>'));
                     ?>
                    </li>
                </ul>
            </div><!-- service-description end -->
        </div><!-- individual service end -->

        <?php $loopItr++; endwhile; endif; ?>


<!--        <div class="col-md-12">-->
<!--            <div class="service">-->
<!--                <span class="bottom-span"><p><h4>Service & Maintanence</h4></p></span>-->
<!--            </div><!--construction & installation-->
<!--            <div class="servicedesc">-->
<!--                <p>Red Wave Comm's service department maintains and-->
<!--                    inspects some of the largest facilities in the State of California.-->
<!--                    We can provide your business with recurring service for-->
<!--                    all of your communications, data, fire and sprinkler alarm-->
<!--                    testing, inspections, and monitoring needs.</p>-->
<!---->
<!--                <p>We offer the most experienced and efficient technicians-->
<!--                    who have received training in all aspects of the installation-->
<!--                    process. Our technicians are provided with the latest tools-->
<!--                    and technology to improve the identification and repair of-->
<!--                    nearly all types of communications and low voltage needs.</p><br />-->
<!---->
<!--                <b>Services Provided:</b><br/>-->
<!--                <ul>-->
<!--                    <li>Data, Phone and Fax Line Repair</li>-->
<!--                    <li>Relocating and replacing existing equipment and lines</li>-->
<!--                    <li>Diagnosis and Repair of fire panels, sound equipment,-->
<!--                        cameras, A/V, data, access control systems, CCTV, automation-->
<!--                        and more</li>-->
<!--                    <li>System Network Integration</li>-->
<!--                    <li>Fire Alarm Inspections with Reports</li>-->
<!--                </ul><!--Service Include list-->
<!--            </div><!--Service Descrtiption-->
<!---->
<!---->
<!--        </div><!--Service and Maintanence-->
    </div> <!-- service container end -->

   <!--=================== services end =================================-->

</main>

<?php get_footer(); ?>