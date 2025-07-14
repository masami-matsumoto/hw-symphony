<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <!-- Content -->
    <div id="content">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 push-lg-1">
                      <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Content / End -->
<?php endwhile; ?>
<?php get_footer(); ?>
