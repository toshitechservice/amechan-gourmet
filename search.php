<?php get_header(); ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title position-relative">
      <div class="container">
        <h1 class="mb-2 mb-lg-0 text-center text-lg-start">
          <?php if (get_search_query()) : ?>
            検索ワード：<?php echo esc_html(get_search_query()); ?>
            <br>
          <?php endif; ?>
          <?php if (!empty($_GET['price'])) : ?>
            価格帯：<?php echo esc_html($_GET['price']); ?>
          <?php endif; ?>
        </h1>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Posts Section -->
          <section id="blog-posts" class="blog-posts section">

            <div class="container">
              <div class="row gy-4">
                <?php if(have_posts()): ?>
                  <?php while(have_posts()): the_post(); ?>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                      <article class="position-relative h-100">

                        <div class="post-img position-relative overflow-hidden">
                          <?php if(has_post_thumbnail()):
                            the_post_thumbnail('full', array('class' => 'img-fluid'));
                          ?>
                          <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="" class="img-fluid">
                          <?php endif; ?>
                          <span class="post-date"><?php echo get_the_date('Y/m/d'); ?></span>
                          <?php
                            $post_tags = get_the_tags();
                            if($post_tags) :
                          ?>
                            <span class="post-tag">
                              <i class="bi bi-pin-map-fill"></i>
                              <?php echo esc_html($post_tags[0]->name); ?>
                            </span>
                          <?php endif; ?>
                        </div>

                        <div class="post-content d-flex flex-column">

                          <h3 class="post-title"><?php the_title(); ?></h3>

                          <p>
                            <?php
                            $content = wp_trim_words( get_the_content() ,  50, '...');
                            echo $content;
                            ?>
                          </p>

                          <hr>

                          <a href="<?php the_permalink(); ?>" class="readmore stretched-link"><span>続きを読む</span><i class="bi bi-arrow-right"></i></a>

                        </div>

                      </article>
                    </div><!-- End post list item -->
                  <?php endwhile; ?>
                <?php else : ?>
                  <p>検索条件に該当する記事がありませんでした。</p>
                <?php endif; ?>

              </div>
            </div>

          </section><!-- /Blog Posts Section -->

          <!-- Blog Pagination Section -->
          <?php
            $big = 999999999; // need an unlikely integer
            $paged = max(get_query_var('paged',1),1);
            $args = array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'total' => $wp_query->max_num_pages /*全ページ数 */ ,
                'current' =>  $paged/*現在のページ数*/,
                'show_all' => FALSE,
                'end_size' => 1,
                'mid_size' => 2,
                'prev_next' => FALSE,
                'type' => 'array',
            );
            $navs = paginate_links($args);
          ?>
          <?php if($navs) : ?>
            <section id="blog-pagination" class="blog-pagination section">
              <div class="container">
                <div class="d-flex justify-content-center">
                  <ul>
                    <?php if($paged > 1) : ?>
                      <li class="pre">
                        <?php previous_posts_link('<i class="bi bi-chevron-left">' . '</i>')?>
                      </li>
                    <?php endif; ?>
                    <?php
                      $i = 1;
                      foreach($navs as $nav) :
                    ?>
                      <?php if($paged == $i): ?>
                        <li>
                          <a class="active">
                            <?php echo $nav; ?>
                          </a>
                        </li>
                      <?php else: ?>
                        <li>
                          <?php echo $nav; ?>
                        </li>
                      <?php endif; ?>
                    <?php $i++; endforeach; ?>  
                    <?php if($paged < $wp_query->max_num_pages) : ?>  
                      <li class="next">
                        <?php next_posts_link('<i class="bi bi-chevron-right">' . '</i>')?>
                      </li>
                    <?php endif; ?>  
                  </ul>
                </div>
              </div>
            </section>
          <?php endif; ?>
          <!-- /Blog Pagination Section -->

        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>

  </main>

<?php get_footer(); ?>