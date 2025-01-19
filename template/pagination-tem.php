<?php
$big = 999999999; // need an unlikely integer
$paged = max(get_query_var('paged', 1), 1);
$args = array(
	'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
	'total' => $wp_query->max_num_pages /*全ページ数 */,
	'current' =>  $paged/*現在のページ数*/,
	'show_all' => FALSE,
	'end_size' => 1,
	'mid_size' => 2,
	'prev_next' => FALSE,
	'type' => 'array',
);
$navs = paginate_links($args);
?>
<?php if ($navs) : ?>
	<section id="blog-pagination" class="blog-pagination section">
		<div class="container">
			<div class="d-flex justify-content-center">
				<ul>
					<?php if ($paged > 1) : ?>
						<li class="pre">
							<?php previous_posts_link('<i class="bi bi-chevron-left">' . '</i>') ?>
						</li>
					<?php endif; ?>
					<?php
					$i = 1;
					foreach ($navs as $nav) :
					?>
						<?php if ($paged == $i): ?>
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
					<?php $i++;
					endforeach; ?>
					<?php if ($paged < $wp_query->max_num_pages) : ?>
						<li class="next">
							<?php next_posts_link('<i class="bi bi-chevron-right">' . '</i>') ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</section>
<?php endif; ?>