<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="keywords" content=",">
<!-- <meta name="description" content=""> -->
<?php if ( is_front_page() && is_home() ) : ?>
<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
<meta property="og:title" content="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" />
<?php else : ?>
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?>" />
<?php endif ?>

<!-- viewport -->
<meta name="viewport" content="width=device-width">

<!-- favicon -->
<link rel="icon" href="<?php src();?>img/favicon.ico">

<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php src();?>common/font/font-awesome/css/font-awesome.min.css" >
<link rel="stylesheet" type="text/css" href="<?php src();?>common/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>common/css/layout.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>common/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>css/index.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>css/business.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>css/aboutus.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>css/recruit.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>css/csr.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>css/news.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>css/sitemap.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>css/article.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>css/access.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>css/form.css">
<link rel="stylesheet" type="text/css" href="<?php src();?>css/bid.css">

<!-- script -->
<script type="text/javascript" src="<?php src();?>common/js/lib/jquery.js"></script>
<script type="text/javascript" src="<?php src();?>common/js/gnavi.js"></script>
<script type="text/javascript" src="<?php src();?>common/js/gotop.js"></script>
<script type="text/javascript" src="<?php src();?>common/js/jquery.matchHeight.js"></script>

<!-- bxSlider -->
<script type="text/javascript" src="<?php src();?>common/js/lib/bxSlider/jquery.bxslider.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php src();?>common/js/lib/bxSlider/jquery.bxslider.css" media="all">
<script type="text/javascript">
$(document).ready(function(){
  $('.slider01').bxSlider({
	auto:'ture',
	pause: 6000,
	moveSlides:1,
	useCSS:false
	});
});
</script>

<!--[if lt IE 9]>
<script src="<?php src();?>common/js/lib/html5shiv.min.js"></script>
<script src="<?php src();?>common/js/lib/css3-mediaqueries.js"></script>
<![endif]-->


<script>

  
$(function(){
  //4つのメニューの箇所
  $('.menuBox').matchHeight();
  //フッダーナビ
  $('#footer .footnav li').matchHeight();
  //ページ下部メニュー
  $('.pageMenuArea .pgmenu a').matchHeight();
  //ボックスメニュー
  $('.menuBox .txt').matchHeight();
});
</script>




<?php wp_head(); ?>

</head>

<body id="<?php the_field('body_id');?>">

<div id="wapper">
  <header id="header">
    <div id="headerinnr">
      <h1 id="logo"><a href="/"><img src="<?php src();?>common/img/logo.png" class="fluidimg2" alt="浜松ウォーターシンフォニー株式会社"/></a></h1>
      <nav class="pcSubNavi">
        <ul>
          <li><a href="/news/category/news2/">ニュースリリース</a></li><li><a href="/sitemap/">サイトマップ</a></li><li><a href="/access/">アクセスマップ</a></li><!-- <li><a href="/inquiry/">お問い合わせ</a></li> -->
        </ul>
      </nav>
      <nav class="pcGloNavi">
        <ul>
          <li class="gnav1"><a href="/"><i class="fa fa-home mgR05" aria-hidden="true"></i>HOME</a></li>
          <li class="gnav2"><a href="/aboutus/"><i class="fa fa-building mgR05" aria-hidden="true"></i>当社について</a></li>
          <li class="gnav3"><a href="/business/"><i class="fa fa-tint mgR05" aria-hidden="true"></i>事業内容</a></li>
          <li class="gnav4"><a href="/bid/"><i class="fa fa-sticky-note mgR05" aria-hidden="true"></i>入札・契約情報</a></li>
          <li class="gnav5"><a href="/csr/"><i class="fa fa-globe mgR05" aria-hidden="true"></i>CSR</a></li>
        </ul>
      </nav>
      
    </div>
  </header>
  <div class="btnWap">
     <div class="menu">
              <div class="menu1"></div>
              <div class="menu2"></div>
              <div class="menu3"></div>
     </div>
  </div>
  
  <nav class="gNavi">
    <ul>
      <li class="gnav1"><a href="/"><i class="fa fa-home mgR05" aria-hidden="true"></i>HOME</a></li>
      <li class="gnav2"><a href="/aboutus/"><i class="fa fa-building mgR05" aria-hidden="true"></i>当社について</a></li>
      <li class="gnav3"><a href="/business/"><i class="fa fa-tint mgR05" aria-hidden="true"></i>事業内容</a></li>
      <li class="gnav4"><a href="/bid/"><i class="fa fa-sticky-note mgR05" aria-hidden="true"></i>入札・契約情報</a></li>
      <li class="gnav5"><a href="/csr/"><i class="fa fa-globe mgR05" aria-hidden="true"></i>CSR</a></li>
    </ul>
  </nav>