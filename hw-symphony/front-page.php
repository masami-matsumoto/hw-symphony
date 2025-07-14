<?php get_header(); ?>

  <div id="contents">
  
    <div class="slideWap">
      <ul class="slider01">
        <li><a href="/aboutus/"><img src="<?php src();?>img/main_img01.jpg" alt=""/></a></li>
        <li><a href="/business/"><img src="<?php src();?>img/main_img02.jpg" alt=""/></a></li>
      </ul>
    </div><!-- /slideWap -->
	 
	 
    <section class="introArea">
      <h2 class="titleCatch">日本初を、浜松で。</h2>
      <p class="msgB mgB0">生きていく上で欠かすことのできない「水」。<br>私たちは、水処理のプロフェッショナルとして、<br>浜松市や地元企業と協力し、<br>
市民の皆様により豊かな暮らしと環境を提供します。<br>当社の浜松における下水処理場運営事業は、<br>上下水道分野におけるコンセッション方式*の<br class="tb_none pc_none">国内第一号案件です。<br>浜松から、もっと快適で地球にやさしい暮らしを。
      </p>
      <p class="captxt">＊コンセッション方式とは、公共施設の所有権を公的機関に残したまま、<br class="sp_none">      受託した民間事業者が運営を行う事業スキームを指します。</p>
    </section>
    <section class="quizBanr">
      <div class="banr"><a href="https://hw-symphony.jp/quiz/"><img src="https://hw-symphony.jp/wp/wp-content/uploads/2019/03/quizbnr.jpg" class="fluidimg2" alt=""/></a></div>
    </section>	  
    <section class="menuArea">
      <ul>
        <li class="menuBox">
          <a href="/aboutus/">
            <div class="pic"><img src="<?php src();?>img/top_menu01.jpg" class="fluidimg" alt=""/></div>
            <div class="txt">当社について</div>
          </a>
        </li>
        <li class="menuBox">
          <a href="/business/">
            <div class="pic"><img src="<?php src();?>img/top_menu02.jpg" class="fluidimg" alt=""/></div>
            <div class="txt">事業内容</div>
          </a>
        </li>
        <li class="menuBox"><a href="/bid/">
            <div class="pic"><img src="<?php src();?>img/top_menu03.jpg" class="fluidimg" alt=""/></div>
            <div class="txt">入札・契約情報</div>
          </a>
        </li>
        <li class="menuBox">
          <a href="/csr/">
            <div class="pic"><img src="<?php src();?>img/top_menu04.jpg" class="fluidimg" alt=""/></div>
            <div class="txt">CSR</div>
          </a>
        </li>
      </ul>
    </section>
	
    
    <?php /* 投稿 */ query_posts( array('post_type' => 'post  ','orderby' => 'date','order' => 'DESC','posts_per_page' => 4 )); if ( have_posts() ) : ?>
    <section class="newsArea">
      <h2 class="titleA">新着情報</h2>
      <?php while ( have_posts() ): the_post(); $cat = get_the_category();$cat = $cat[0];?>
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
      <div class="btnA mgB0"><a href="/news/">新着情報一覧</a></div>
    </section>
    <?php wp_reset_query();endif ?>
    <section class="picupArea">
      <h2 class="titleA">ピックアップ</h2>
      <ul class="cf">
        <li class="banr"><a href="/tour/"><img src="<?php src();?>img/pup_banar01.jpg" class="fluidimg" alt=""/></a></li>
        <li class="banr"><a href="/faq/"><img src="<?php src();?>img/pup_banar02.jpg" class="fluidimg" alt=""/></a></li>
      </ul>
    </section>
  
  </div><!-- /contents -->
  
<?php get_footer(); ?>
