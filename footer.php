<footer>
  <?php
      $icon_url = get_stylesheet_directory_uri() . '/dist/img';
  ?>
<div class='footer_cta'>  
  <img class='footer_cta-img' src="<?=$icon_url . '/logo-footer.png' ?>" alt="logo-footer">
<div>
  <h3 >
  Shop conveniently and confidently for professional-grade beauty essentials.
  </h3>
  <a  href="">Contact Our Team</a>
</div>

</div>
<div class="footer_links">
 <div class="footer_links-block">
  <h4>Categories</h4>
  <?php
        wp_nav_menu([
        'menu'=> 'categories',
        'container' => 'nav',
        'container_class' => 'catetories_footer-nav',
        ]);
      ?>
 </div> 
 <div class="footer_links-block">
  <h4>Support</h4>
      <a class="font-2-xs" href="/minha-conta">My Account</a>
      <a class="font-2-xs" href="tel:+16179555006">Contact Us</a>
 </div> 
 <div class="footer_links-block">
  <h4>Company</h4>
      <a class="font-2-xs" href="/about-us/">About us</a>
 </div> 
 <div class="footer_links-block">
  <h4>Get in touch</h4>
      <a href="mailto:bbglowacademy@gmail.com">bbglowacademy@gmail.com</a>
      <a href="tel:+16179555006">+1 (617) 955-5006 (Ivan Bulmaga)</a>
 </div> 
</div>
<div class="footer-end">
      <div class="footer_c-rights">
        <img src="<?=$icon_url . '/footer-c-right.png' ?>" alt="footer copyrigths">
        <p>Copyright © 2024 BB Glow Academy, All rights reserved. <a href="https://www.zioncomunicacao.com/">Powered by ZION.</a></p>
      </div>
      <div class="footer_utility-pages">
        <a  href="/terms-and-conditions/">Terms of Use</a>
        <a href="/privacy-policy/">Privacy Policy</a>
        <a href="/refund_returns/">Refunds Policy</a>
      </div>
</div>
</footer>
<?php wp_footer();?>
<script src="<?= get_stylesheet_directory_uri(); ?>/dist/js/main/main.js"></script>
</body>
</html>