<?php get_header(); ?>
  <div id="contents">
  
    <?php
if ( is_category() ) {
    $cat_slug = get_query_var('category_name');
    $cat = get_category_by_slug( $cat_slug );
    $cat_name = ( $cat && $cat->cat_name ) ? $cat->cat_name : '新着情報一覧';
} else {
    $cat_name = '新着情報一覧';
}
?>
<div class="pagettl"><h2 class="pttl"><?php echo esc_html($cat_name); ?></h2></div>
    
    <div class="contsinnr">

      <section class="newsArea2">

        <?php while ( have_posts() ): the_post();$cat = get_the_category();$cat = $cat[0];?>
        <dl class="cf">
          <dt class="<?php echo $cat->category_nicename;?>"><i class="fa fa-arrow-circle-right mgR05" aria-hidden="true"></i><?php the_time('Y/m/d'); ?></dt>
            <?php $type = get_field('type');?>
            <dd <?php if($type == 'pdf') echo 'class="pdf"';?>>
            <?php if( $type == 'title') : ?>
            <?php the_title();?>
            <?php elseif( $type == 'link') : $link = get_field('link');?>
            <a href="<?php echo $link['url'];?>" target="<?php echo $link['target'];?>"><?php the_title();?></a>
            <?php elseif( $type == 'pdf') : ?>
            <a href="<?php the_field('pdf'); ?>" target="_blank"><?php the_title();?></a>
            <?php else : ?>
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
            <?php endif;?>
          </dd>
        </dl>
        <?php endwhile ?>
        <div class="taC"><?php wp_pagenavi(); ?></div>
      </section>
      
    </div><!-- /contsinnr -->
  
  
  </div><!-- /contents -->
<?php get_footer(); ?>