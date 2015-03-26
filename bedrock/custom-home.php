<?php
/*
Template Name: Custom Homepage
*/
?>


<?php get_header(); ?>

<div class="main-content">
    <!-- Row for main content area -->
    <div class="row">


                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php //get_template_part( 'content','page' ); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>


      </div>
    <!--end main content row-->

<!--
    <div class="row">
        <div class="small-12 columns">
            <?php// get_sidebar(); ?>
        </div>
    </div>
-->
    <!--end sidebar row-->

</div>
<!--end .main-content-->

<?php get_footer(); ?>
