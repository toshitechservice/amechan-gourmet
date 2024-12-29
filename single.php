<?php get_header(); ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title position-relative">
      <div class="container">
        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        $catslug = $cat[0]->slug;
        ?>
        <h1 class="mb-2 mb-lg-0 text-center text-lg-start"><?php the_title(); ?></h1>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Posts Section -->
          <section id="blog-details" class="blog-details section">

            <div class="container">
            <article class="article">

              <div class="content">
                <?php the_content(); ?>
              </div>
            </article>
            </div>

          </section><!-- /Blog Posts Section -->

        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>

  </main>

<?php get_footer(); ?>