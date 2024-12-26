<?php get_header(); ?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">404 NOT FOUND</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title">
        <div class="section-title-container d-flex align-items-center justify-content-between">
          <h2>404 NOT FOUND</h2>
        </div>
      </div><!-- End Section Title -->

      <div class="container">
        <p>お探しのページは見つかりませんでした。URLをご確認ください。</p>
        <a href="<?php echo esc_url(home_url('/')); ?>">→トップページへ</a>
      </div>

    </section><!-- /Starter Section Section -->

  </main>

<?php get_footer(); ?>