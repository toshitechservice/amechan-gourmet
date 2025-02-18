<?php get_header(); ?>
<main class="main">

	<!-- Slider Section -->
	<section id="mainvisual">

			<div class="container">

				<div class="amechan-visual">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mainvisual.png" alt="">
				</div>

			</div>

		</section>
	<!-- /Slider Section -->

	<!-- Section Title -->
	<div class="container section-title d-none d-lg-block" data-aos="fade-up">
		<div class="section-title-container d-flex align-items-center justify-content-between">
			<h2>NEW</h2>
			<p><a href="https://amechan-gourmet.com/?s=&price=">最新投稿をもっと見る</a></p>
		</div>
	</div><!-- End Section Title -->


	<!-- Trending Category Section -->
	<section id="trending-category" class="trending-category section">

		<div class="container">

			<div class="container" data-aos="fade-up">
				<div class="row g-5">

					<div class="col-lg-4 sm-order2">
						<?php
						$cat = get_the_category();
						$catname = $cat[0]->cat_name;
						?>
						<div class="post-entry">
							<div class="top-img-wrap overflow-hidden">
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
							</div>
							<div class="top-post-info-wrap">
								<?php the_post(); ?>
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

					<div class="col-lg-5 sm-order3">
						<div class="row g-5">
							<?php for ($i = 0; $i < 2; $i++): ?>
								<div class="col-lg-6 border-start custom-border">
									<?php for ($j = 0; $j < 2; $j++): the_post(); ?>
										<?php
										$cat = get_the_category();
										$catname = $cat[0]->cat_name;
										?>
										<div class="post-entry" data-aos="fade-up" data-aos-delay="100">
											<div class="top-img-wrap  overflow-hidden">
												<a href="<?php the_permalink(); ?>">
													<?php if(has_post_thumbnail()):
														the_post_thumbnail('full', array('class' => 'img-fluid'));
													?>
													<?php else: ?>
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/person-7.jpg" alt="" class="img-fluid">
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
											</div>
											<div class="top-post-info-wrap">
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
									<?php endfor; ?>
								</div>
							<?php endfor; ?>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>

					<div class="col-lg-3 sm-order1">
						<?php get_search_form(); ?>
					</div>

				</div> <!-- End .row -->
			</div>

		</div>

	</section>
	<!-- /Trending Category Section -->

	<div class="new-post">
		<a href="https://amechan-gourmet.com/?s=&price=">最新投稿一覧</a>
	</div>

</main>

<?php get_footer(); ?>