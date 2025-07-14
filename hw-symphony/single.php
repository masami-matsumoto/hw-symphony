<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="contents">
    <?php $cat = get_the_category(); ?>
    <div class="pagettl"><h2 class="pttl"><?php echo $cat[0]->cat_name;?></h2></div>
    
    
    <div class="contsinnr articleArea">

      <h3 class="titleC"><?php the_title();?></h3>
      <?php the_content(); ?>
      <p><i class="fa fa-caret-right mgR05" aria-hidden="true"></i><a href="<?php echo get_category_link($cat[0]->cat_ID);?>">一覧に戻る</a></p>
    </div><!-- /contsinnr -->

    <!-- Content / End -->
<?php endwhile; ?>
<?php get_footer(); ?>
