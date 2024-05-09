<!DOCTYPE html>
<html lang="US-EN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="114x114" href="https://bbglow-academy.com/wp-content/uploads/2020/11/Favicon_BBGlow.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="https://bbglow-academy.com/wp-content/uploads/2020/11/Favicon_BBGlow.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="https://bbglow-academy.com/wp-content/uploads/2020/11/Favicon_BBGlow.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://bbglow-academy.com/wp-content/uploads/2020/11/Favicon_BBGlow.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://bbglow-academy.com/wp-content/uploads/2020/11/Favicon_BBGlow.png">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://bbglow-academy.com/wp-content/uploads/2020/11/Favicon_BBGlow.png">
  <link rel="shortcut icon" href="https://bbglow-academy.com/wp-content/uploads/2020/11/Favicon_BBGlow.png" />
  <link rel="icon" type="image/vnd.microsoft.icon" href="https://bbglow-academy.com/wp-content/uploads/2020/11/Favicon_BBGlow.png" />
  <link rel="icon" type="image/png" href="https://bbglow-academy.com/wp-content/uploads/2020/11/Favicon_BBGlow.png" />
  <link rel="canonical" href="http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>


<!-- Global site tag (gtag.js) - Google Ads: 436559872 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-436559872"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-436559872');
</script>

<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-436559872/iQAqCKfbmfMBEIDAldAB'});
</script>

  	<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '208075774143235');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=208075774143235&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
				<!-- Global site tag (gtag.js) - Google Ads: 436559872 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-436559872"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-436559872');
</script>

<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-436559872/iQAqCKfbmfMBEIDAldAB'});
</script>
  <title><?php bloginfo('name');?> <?php wp_title('|'); ?></title>
</head>
<?php wp_head();?>
<body <?php body_class();?>>
  <header>
    <?php 
    $icon_url = get_stylesheet_directory_uri() . '/dist/img';
    $cart_count = WC()->cart->get_cart_contents_count();
    ?>
    <div class="header_strip">
      <div class='header_strip_content'>
      <a class="hidden md:block" href="/shop/">Easy Online Shoppging</a>
      <a class="font-poppins" href="tel:+16179555006">Feel free to give us a call ! +1 617 955-5006</a>
      <nav class="media_nav">
        <a class="media-icon" href="https://www.facebook.com/bbglowacademy/"><img src="<?= $icon_url .'/facebook.svg'?>" alt="facebook's link"></a>
        <a class="media-icon" href="https://www.instagram.com/bbglow_academy/"><img src="<?= $icon_url .'/instagram.svg'?>" alt="instagram's link"></a>
        <a class="media-icon" href="https://www.youtube.com/watch?v=1BlyQUnB-V0"><img src="<?= $icon_url .'/youtube.svg'?>" alt="youtube's link"></a>
      </nav>
      </div>
    </div>
    <div class="header_main">
      <a class="menu_mobile-btn">Menu</a>
      <a href="/" class='logo_header'><img src="<?= $icon_url . '/logo-header.png' ?>" alt="logo"></a>
      <?php
        wp_nav_menu([
        'menu'=> 'header',
        'container' => 'nav',
        'container_class' => 'header_nav hidden lg:flex ',
        ]);
      ?>
      <div class="header_cart">
      <a id="cart_link"  href="/cart" ><img src="<?=$icon_url . '/cart.svg'?>" alt=""><p>My cart</p></a>
        <?php if($cart_count) { ?>
          <span class='header_cart-count'><?= $cart_count; ?></span>
        <?php };?>
      </div>
    </div>
  </header>