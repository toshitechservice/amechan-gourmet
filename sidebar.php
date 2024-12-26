<div class="col-lg-4 sidebar widgets-container">

  <!-- <div class="widgets-container"> -->

    <?php get_search_form(); ?>

    <!-- Recent Posts Widget -->
    <div class="recent-posts-widget widget-item">

      <h3 class="widget-title">最新投稿</h3>

      <?php
      $args = array(
        'posts_per_page' => 5
      );
      $posts = get_posts($args);
      ?>

      <?php foreach ($posts as $post): setup_postdata($post); ?>
        <div class="post-item">
          <?php if(has_post_thumbnail()):
            the_post_thumbnail(array(80, 80), array('class' => 'flex-shrink-0'));
          ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-landscape-2.jpg" alt="サムネ" class="flex-shrink-0">
          <?php endif; ?>
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0"> -->
          <div>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date('Y/m/d'); ?></time>
          </div>
        </div><!-- End recent post item-->
      <?php endforeach;
      wp_reset_postdata(); ?>


    </div>
    <!--/Recent Posts Widget -->

    <!-- Tags Widget -->
    <!-- <div class="tags-widget widget-item">

    <h3 class="widget-title">Tags</h3>
    <ul>
      <li><a href="#">App</a></li>
      <li><a href="#">IT</a></li>
      <li><a href="#">Business</a></li>
      <li><a href="#">Mac</a></li>
      <li><a href="#">Design</a></li>
      <li><a href="#">Office</a></li>
      <li><a href="#">Creative</a></li>
      <li><a href="#">Studio</a></li>
      <li><a href="#">Smart</a></li>
      <li><a href="#">Tips</a></li>
      <li><a href="#">Marketing</a></li>
    </ul>

    </div> -->
    <!--/Tags Widget -->

  <!-- </div> -->

</div>