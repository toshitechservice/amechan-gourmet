<?php
function setup_theme()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');



function modify_search_query($query)
{
  if ($query->is_search && $query->is_main_query()) {
    // 検索キーワード
    if (!empty($_GET['s'])) {
      $query->set('s', sanitize_text_field($_GET['s']));
    }

    // メタクエリ
    if (!empty($_GET['price'])) {
      $meta_query = array(
        array(
          'key' => 'price',
          'value' => sanitize_text_field($_GET['price']),
          'compare' => 'LIKE',
        ),
      );
      $query->set('meta_query', $meta_query);
    }

    // 投稿タイプを post のみに制限
    $query->set('post_type', 'post');
  }
}
add_action('pre_get_posts', 'modify_search_query');
