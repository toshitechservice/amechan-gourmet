<?php get_header(); ?>
<main class="main">

  <!-- Slider Section -->
  <section id="mainvisual">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="amechan-visual">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mainvisual.png" alt="">
        </div>

      </div>

    </section>
  <!-- /Slider Section -->

  <!-- Trending Category Section -->
  <section id="trending-category" class="trending-category section">

    <div class="container">

      <div class="container" data-aos="fade-up">
        <div class="row g-5">

          <div class="col-lg-4">
            <?php
            $cat = get_the_category();
            $catname = $cat[0]->cat_name;
            ?>
            <div class="post-entry lg">
              <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()):
                  the_post_thumbnail('full', array('class' => 'img-fluid'));
                ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="サムネ" class="img-fluid">
                <?php endif; ?>
              </a>
              <div class="post-meta">
                <span class="date post-tag-amechan"><?php echo esc_html($catname); ?></span>
                <?php if(has_tag()): ?>
                  <?php
                  $tags = get_the_tags();
                  foreach($tags as $tag):
                  ?>
                  <span class="post-tag-amechan"><i class="bi bi-pin-map-fill"></i><?php echo $tag->name; ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
                <span class="post-date-amechan"><?php echo get_the_date('Y/m/d'); ?></span>
              </div>
              <?php the_post(); ?>
              <h2><?php the_title(); ?></h2>
              <!-- <p class="mb-4 d-block"><?php the_content(); ?></p> -->
            </div>
          </div>

          <div class="col-lg-5">
            <div class="row g-5">
              <?php for ($i = 0; $i < 2; $i++): ?>
                <div class="col-lg-6 border-start custom-border">
                  <?php for ($j = 0; $j < 2; $j++): the_post(); ?>
                    <?php
                    $cat = get_the_category();
                    $catname = $cat[0]->cat_name;
                    ?>
                    <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                      <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()):
                          the_post_thumbnail('full', array('class' => 'img-fluid'));
                        ?>
                        <?php else: ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="" class="img-fluid">
                        <?php endif; ?>
                      </a>
                      <div class="post-meta">
                        <span class="date post-tag-amechan"><?php echo esc_html($catname); ?></span>
                        <?php if(has_tag()): ?>
                          <?php
                          $tags = get_the_tags();
                          foreach($tags as $tag):
                          ?>
                          <span class="post-tag-amechan"><i class="bi bi-pin-map-fill"></i><span><?php echo $tag->name; ?></span></span>
                          <?php endforeach; ?>
                        <?php endif; ?>
                        <span class="post-date-amechan"><?php echo get_the_date('Y/m/d'); ?></span>
                      </div>
                      <h2 class="mb-2">
                        <a href="<?php the_permalink(); ?>">
                          <?php
                          $content = wp_trim_words(get_the_title(),  10, '...');
                          echo $content;
                          ?>
                        </a>
                      </h2>
                    </div>
                  <?php endfor; ?>
                </div>
              <?php endfor; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </div>

          <div class="col-lg-3">
            <?php get_search_form(); ?>
          </div>

        </div> <!-- End .row -->
      </div>

    </div>

  </section>
  <!-- /Trending Category Section -->

  <!-- Culture Category Section -->
  <section id="culture-category" class="culture-category section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <div class="section-title-container d-flex align-items-center justify-content-between">
        <h2>おすすめ記事</h2>
        <p><a href="<?php echo esc_url(home_url('/')); ?>/category/recommend">もっと見る</a></p>
      </div>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <?php
        $args = array(
          'post_type' => 'post',
          'category_name' => 'recommend',
          'posts_per_page' => 4,
        );
        $posts = get_posts($args);
        ?>
        <?php foreach ($posts as $post): ?>
          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
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
                <span><?php echo get_the_date('Y/m/d'); ?></span>
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