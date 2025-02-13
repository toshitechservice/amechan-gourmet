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
															if(has_excerpt()):
																echo get_the_excerpt();
															else:
																echo wp_trim_words( get_the_content() ,  50, '...');
															endif;
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
					<?php get_template_part('template/pagination-tem'); ?>
					<!-- /Blog Pagination Section -->

				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>

	</main>

<?php get_footer(); ?>