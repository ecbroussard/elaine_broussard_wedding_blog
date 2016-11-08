<?php get_header(); ?>

<!-- Begin Section Container -->
	<section class="row">
		<div class="eight columns">
			<!-- Begin Loop -->
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); ?>
						<div class="post-frame">
							<div class="tags">
								<?php echo get_the_tag_list(); ?>
							</div>
							<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="post-info">
								<span class="date"><?php echo get_the_date(); ?></span>
								<span class="author"><?php echo get_the_author(); ?></span>
								<span class="comments"><?php echo get_comments_number(); ?> comments</span>
							</div>
							<?php 
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('thumbnail');
								}
							?>
							<?php the_excerpt(); ?>
							<a class="morebutton" href="<?php the_permalink(); ?>">Read More</a>
						</div>
						<?php	
					} //end while
				} //end if
			?>
			<!-- Add the pagination functions here. -->
			<div class="row">
				<div class="twelve columns">
					<div class="nav-previous alignleft pagination"><?php next_posts_link( 'Older posts -->>' ); ?></div>
					<div class="nav-next alignright pagination"><?php previous_posts_link( '<<-- Newer posts' ); ?></div>
				</div>
			</div>
			<!-- End Loop -->
		</div>
		<div class="four columns">
			<?php get_sidebar(); ?>
		</div>
	</section>
<!-- End Section Container-->

<?php get_footer(); ?>