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
            <div class="post-list border-bottom">
              <a href="blog-details.html">
                <?php if(has_post_thumbnail()):
                  the_post_thumbnail('full', array('class' => 'img-fluid'));
                ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="" class="img-fluid">
                <?php endif; ?>
              </a>
              <div class="post-meta">
                <!-- <span class="date"><?php echo $catname; ?></span>
                  <span class="mx-1">•</span> -->
                <span><?php echo get_the_date('Y年m月d日'); ?></span>
              </div>
              <h2 class="mb-2">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  $content = wp_trim_words(get_the_title(),  12, '...');
                  echo $content;
                  ?>
                </a>
              </h2>
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
            <div class="post-list border-bottom">
              <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()):
                  the_post_thumbnail('full', array('class' => 'img-fluid'));
                ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="" class="img-fluid">
                <?php endif; ?>
              </a>
              <div class="post-meta">
                <!-- <span class="date"><?php echo $catname; ?></span>
                  <span class="mx-1">•</span> -->
                <span><?php echo get_the_date('Y年m月d日'); ?></span>
              </div>
              <h2 class="mb-2">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  $content = wp_trim_words(get_the_title(),  12, '...');
                  echo $content;
                  ?>
                </a>
              </h2>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

    </div>


    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <div class="section-title-container d-flex align-items-center justify-content-between">
        <h2>中華</h2>
        <p><a href="<?php echo home_url(); ?>/category/chinese-food">もっと見る</a></p>
      </div>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'chinese-food',
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
            <div class="post-list border-bottom">
              <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()):
                  the_post_thumbnail('full', array('class' => 'img-fluid'));
                ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="" class="img-fluid">
                <?php endif; ?>
              </a>
              <div class="post-meta">
                <!-- <span class="date"><?php echo $catname; ?></span>
                <span class="mx-1">•</span> -->
                <span><?php echo get_the_date('Y年m月d日'); ?></span>
              </div>
              <h2 class="mb-2">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  $content = wp_trim_words(get_the_title(),  12, '...');
                  echo $content;
                  ?>
                </a>
              </h2>
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
            <div class="post-list border-bottom">
              <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()):
                  the_post_thumbnail('full', array('class' => 'img-fluid'));
                ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="" class="img-fluid">
                <?php endif; ?>
              </a>
              <div class="post-meta">
                <span><?php echo get_the_date('Y年m月d日'); ?></span>
              </div>
              <h2 class="mb-2">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  $content = wp_trim_words(get_the_title(),  12, '...');
                  echo $content;
                  ?>
                </a>
              </h2>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

    </div>

  </section><!-- /Culture Category Section -->

</main>

<?php get_footer(); ?>