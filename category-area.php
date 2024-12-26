<?php get_header(); ?>
<main class="main">

  <!-- Culture Category Section -->
  <section id="culture-category" class="culture-category section">

    <?php
    // 表示するタグを指定（不要なら全タグを取得）
    $tags = get_tags(array(
      'slug' => array('nanba', 'umeda', 'tennoji', 'tenma', 'fukushima', 'other-area'), // 取得するタグスラッグを指定
      'orderby' => 'id', // 並び替え基準（例: 'name', 'count', 'id'など）
      'order'   => 'ASC', // 降順
    ));

    // タグごとにループ
    foreach ($tags as $tag) :
      $args = array(
        'tag'            => $tag->slug,     // タグのスラッグを設定
        'posts_per_page' => 3,              // 表示する投稿数を設定
        'post_status'    => 'publish',      // 公開済み投稿のみ
      );
      $posts = get_posts($args);
    ?>

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <div class="section-title-container d-flex align-items-center justify-content-between">
          <h2><?php echo esc_html($tag->name); ?>エリア</h2>
          <p><a href="<?php echo get_tag_link($tag->term_id); ?>">もっと見る</a></p>
        </div>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row">
          <?php foreach ($posts as $post) : setup_postdata($post); ?>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="post-list border-bottom">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('full', array('class' => 'img-fluid'));
                  } else {
                    echo '<img src="' . get_template_directory_uri() . '/assets/img/post-landscape-2.jpg" alt="" class="img-fluid">';
                  }
                  ?>
                </a>
                <div class="post-meta">
                  <span><?php echo get_the_date('Y/m/d'); ?></span>
                </div>
                <h2 class="mb-2">
                  <a href="<?php the_permalink(); ?>">
                    <?php echo wp_trim_words(get_the_title(), 12, '...'); ?>
                  </a>
                </h2>
              </div>
            </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>

    <?php endforeach; ?>

  </section><!-- /Culture Category Section -->Ï

</main>

<?php get_footer(); ?>