<?php get_header(); ?>
<main class="main">

  <!-- Page Title -->
  <div class="page-title">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0"><?php the_title(); ?></h1>
    </div>
  </div><!-- End Page Title -->

  <div class="container">
    <div class="row">

      <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
          <div class="col-lg-8">

            <!-- Blog Details Section -->
            <section id="blog-details" class="blog-details section"> <!-- 枠つける時はコメントアウト解除 -->
              <div class="container">

                <article class="article">

                  <div class="post-img">
                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                  </div>

                  <div class="content">
                    <?php the_content(); ?>
                  </div><!-- End post content -->

                </article>

              </div>
            </section>
            <!-- /Blog Details Section -->

          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php get_sidebar(); ?>

    </div>
  </div>

</main>

<?php get_footer(); ?>