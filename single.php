<?php get_header(); ?>

<!-- Begin Section Container -->
	<section class="row">
		<div class="twelve columns post-page">
			<!-- Begin Loop -->
			<?php
				if (have_posts() ) {
					while (have_posts()) {
						the_post();
						
						if ( has_post_thumbnail() ) { ?>
							<div class="post-thumbnail">
								<?php the_post_thumbnail('large'); ?>
							</div>
						<?php } ?>

						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
				
					<?php	
					} //end while
				} //end if
			?>
			<!-- End Loop -->
		</div>
	</section>
<!-- End Section Container-->

<?php get_footer(); ?>