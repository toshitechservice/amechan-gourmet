<?php get_header(); ?>
<main class="main">

  <!-- Culture Category Section -->
  <section id="culture-category" class="culture-category section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <div class="section-title-container d-flex align-items-center justify-content-between">
        <h2>麺類</h2>
        <p><a href="<?php echo home_url(); ?>/category/noodle">もっと見る</a></p>
      </div>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'noodle',
          'posts_per_page' => 3,
        );
        $posts = get_posts($args);
        ?>
        <?php foreach ($posts as $post): ?>
          <?php
          $cat = get_the_category();
          $catname = $cat[0]->cat_name;
          ?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="post-list">
              <div class="top-img-wrap overflow-hidden">
                <a href="<?php the_permalink(); ?>">
                  <?php if(has_post_thumbnail()):
                    the_post_thumbnail('full', array('class' => 'img-fluid  area-post-img'));
                  ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="" class="img-fluid  area-post-img">
                  <?php endif; ?>
                </a>
                <div class="post-meta">
                  <?php if(has_tag()): ?>
                    <?php
                    $tags = get_the_tags();
                    foreach($tags as $tag):
                    ?>
                    <span class="post-tag-amechan"><i class="bi bi-pin-map-fill"></i><?php echo $tag->name; ?></span>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  <span><?php echo get_the_date('Y年m月d日'); ?></span>
                </div>
              </div>
              <div class="area-post-info-wrap">
                  <h2><?php the_title(); ?></h2>
                  <p class="top-excerpt">
                    <?php
                      if(has_excerpt()):
                        echo get_the_excerpt();
                      else:
                        echo wp_trim_words( get_the_content() ,  50, '...');
                      endif;
                    ?>
                  </p>

                  <hr class="top-post-hr">

                  <a href="<?php the_permalink(); ?>" class="top-readmore stretched-link"><span>続きを読む</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

    </div>


    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <div class="section-title-container d-flex align-items-center justify-content-between">
        <h2>肉系</h2>
        <p><a href="<?php echo home_url(); ?>/category/meat">もっと見る</a></p>
      </div>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'meat',
          'posts_per_page' => 3,
        );
        $posts = get_posts($args);
        ?>
        <?php foreach ($posts as $post): ?>
          <?php
          $cat = get_the_category();
          $catname = $cat[0]->cat_name;
          ?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="post-list">
              <div class="top-img-wrap overflow-hidden">
                <a href="<?php the_permalink(); ?>">
                  <?php if(has_post_thumbnail()):
                    the_post_thumbnail('full', array('class' => 'img-fluid  area-post-img'));
                  ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="" class="img-fluid  area-post-img">
                  <?php endif; ?>
                </a>
                <div class="post-meta">
                  <?php if(has_tag()): ?>
                    <?php
                    $tags = get_the_tags();
                    foreach($tags as $tag):
                    ?>
                    <span class="post-tag-amechan"><i class="bi bi-pin-map-fill"></i><?php echo $tag->name; ?></span>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  <span><?php echo get_the_date('Y年m月d日'); ?></span>
                </div>
              </div>
              <div class="area-post-info-wrap">
                  <h2><?php the_title(); ?></h2>
                  <p class="top-excerpt">
                    <?php
                      if(has_excerpt()):
                        echo get_the_excerpt();
                      else:
                        echo wp_trim_words( get_the_content() ,  50, '...');
                      endif;
                    ?>
                  </p>

                  <hr class="top-post-hr">

                  <a href="<?php the_permalink(); ?>" class="top-readmore stretched-link"><span>続きを読む</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

    </div>


    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <div class="section-title-container d-flex align-items-center justify-content-between">
        <h2>洋食</h2>
        <p><a href="<?php echo home_url(); ?>/category/yoshoku">もっと見る</a></p>
      </div>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'yoshoku',
          'posts_per_page' => 3,
        );
        $posts = get_posts($args);
        ?>
        <?php foreach ($posts as $post): ?>
          <?php
          $cat = get_the_category();
          $catname = $cat[0]->cat_name;
          ?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="post-list">
              <div class="top-img-wrap overflow-hidden">
                <a href="<?php the_permalink(); ?>">
                  <?php if(has_post_thumbnail()):
                    the_post_thumbnail('full', array('class' => 'img-fluid  area-post-img'));
                  ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="" class="img-fluid  area-post-img">
                  <?php endif; ?>
                </a>
                <div class="post-meta">
                  <?php if(has_tag()): ?>
                    <?php
                    $tags = get_the_tags();
                    foreach($tags as $tag):
                    ?>
                    <span class="post-tag-amechan"><i class="bi bi-pin-map-fill"></i><?php echo $tag->name; ?></span>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  <span><?php echo get_the_date('Y年m月d日'); ?></span>
                </div>
              </div>
              <div class="area-post-info-wrap">
                <h2><?php the_title(); ?></h2>
                <p class="top-excerpt">
                  <?php
                    if(has_excerpt()):
                      echo get_the_excerpt();
                    else:
                      echo wp_trim_words( get_the_content() ,  50, '...');
                    endif;
                  ?>
                </p>

                <hr class="top-post-hr">

                <a href="<?php the_permalink(); ?>" class="top-readmore stretched-link"><span>続きを読む</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

    </div>


    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <div class="section-title-container d-flex align-items-center justify-content-between">
        <h2>その他</h2>
        <p><a href="<?php echo home_url(); ?>/category/other">もっと見る</a></p>
      </div>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'other',
          'posts_per_page' => 3,
        );
        $posts = get_posts($args);
        ?>
        <?php foreach ($posts as $post): ?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="post-list">
              <div class="top-img-wrap overflow-hidden">
                <a href="<?php the_permalink(); ?>">
                  <?php if(has_post_thumbnail()):
                    the_post_thumbnail('full', array('class' => 'img-fluid  area-post-img'));
                  ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="" class="img-fluid  area-post-img">
                  <?php endif; ?>
                </a>
                <div class="post-meta">
                  <?php if(has_tag()): ?>
                    <?php
                    $tags = get_the_tags();
                    foreach($tags as $tag):
                    ?>
                    <span class="post-tag-amechan"><i class="bi bi-pin-map-fill"></i><?php echo $tag->name; ?></span>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  <span><?php echo get_the_date('Y年m月d日'); ?></span>
                </div>
              </div>
              <div class="area-post-info-wrap">
                <h2><?php the_title(); ?></h2>
                <p class="top-excerpt">
                  <?php
                    if(has_excerpt()):
                      echo get_the_excerpt();
                    else:
                      echo wp_trim_words( get_the_content() ,  50, '...');
                    endif;
                  ?>
                </p>

                <hr class="top-post-hr">

                <a href="<?php the_permalink(); ?>" class="top-readmore stretched-link"><span>続きを読む</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

    </div>

  </section><!-- /Culture Category Section -->

</main>

<?php get_footer(); ?>