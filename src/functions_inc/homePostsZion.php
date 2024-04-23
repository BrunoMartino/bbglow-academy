<?php

function format_posts ($posts, $img_size = 'large') {
  $posts_final = [];
  foreach($posts as $post) {
    $formatted_date = !empty($post['blogpost_date']) ? date('j F Y', strtotime($post['blogpost_date'])) : '';
    $posts_final[] = [
      'name' => $post['blogpost_title'],
      'link' => $post['blogpost_link'],
      'date' => $formatted_date,
      'img' => $post['blogpost_img']
    ];
  }
  return $posts_final;
}
?>
<?php 
function bbglow_post_list($posts) {
?>
<nav class="posts_nav">
 <ul class="posts_list">
  <?php foreach($posts as $post) { ?>
    <li class="posts_list-item">
      <a href="<?= $post['link'] ?>">
        <div>
          <img src="<?= $post['img'] ?>" alt="<?= $post['name'] ?>">
        </div>
        <div class="posts_info">
          <h4 class="font-2-m"><?= $post['name'] ?></h4>
          <?php if ($post['date']) { ?>
          <p class="font-2-xs"><?= $post['date'] ?></p>
          <?php } ?>
        </div>
      </a>
    </li>
    <?php } ?>
  </ul>
  </nav>
<?php } ?>