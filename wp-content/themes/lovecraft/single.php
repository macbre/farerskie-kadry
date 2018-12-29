<?php get_header(); ?>

<div class="wrapper section">

	<div class="section-inner">

		<div class="content">

			<?php

			if ( have_posts() ) :

				while ( have_posts() ) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class( 'single' ); ?>>

						<div class="post-inner" itemscope itemtype="http://schema.org/Article">

							<div class="post-header">

								<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="name"><?php the_title(); ?></a></h1>

								<div class="post-meta">
									<p class="post-author" itemprop="author" itemscope itemtype="http://schema.org/Person"><span>
										<a href="mailto:<?= htmlspecialchars(get_the_author_meta('user_email')) ?>" itemprop="name" content="<?= htmlspecialchars(get_the_author()) ?>">
											<?= get_avatar(get_the_author_meta('ID'), 64) ?>
											<?= get_the_author() ?>
										</a>
									</span></p>

									<p class="post-date"><!--<span><?php _e( 'On', 'lovecraft' ); ?> </span>--><time datetime="<?= the_time('r') ?>" itemprop="datePublished"><a href="<?php the_permalink(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a></time></p>

									<?php if ( has_category() ) : ?>
										<p class="post-categories" itemprop="genre"><?php the_category( ', ' ); ?></p>
									<?php endif; ?>

									<?php edit_post_link( __( 'Edit'), '<p>', '</p>' ); ?>

									<?php echo do_shortcode("[mashshare]"); ?>

									<meta itemprop="publisher" content="farerskiekadry.pl">
								</div>

							</div><!-- .post-header -->

							<?php if ( get_the_content() ) : ?>

								<div class="post-content">

									<?php

									the_content();

									$args = array(
										'before'		=> '<div class="clear"></div><p class="page-links"><span class="title">' . __( 'Pages:', 'lovecraft' ) . '</span>',
										'after'			=> '</p>',
										'link_before'	=> '<span>',
										'link_after'	=> '</span>',
										'separator'		=> '',
										'pagelink'		=> '%',
										'echo'			=> 1,
									);

									wp_link_pages( $args );
									?>

								</div>

								<div class="clear"></div>

							<?php endif; ?>

							<?php if ( has_tag() ) : ?>

								<div class="post-tags">

									<?php the_tags( '', '' ); ?>

								</div>

							<?php endif; ?>

						</div><!-- .post-inner -->

						<div class="post-navigation">

							<div class="post-navigation-inner">

								<?php

								$prev_post = get_previous_post();
								$next_post = get_next_post();

								if ( $prev_post ) : ?>

									<div class="post-nav-prev">
										<p><?php _e( 'Previous' ); ?></p>
										<?php /* Translators: %s = the title of the previous post */ ?>
										<h4><a href="<?php echo get_permalink( $prev_post->ID ); ?>" title="<?php printf( _x( 'Previous post: %s', 'Translators: %s = the title of the previous post', 'lovecraft' ), esc_attr( get_the_title( $prev_post ) ) ); ?>"><?php echo get_the_title( $prev_post ); ?></a></h4>
									</div>

								<?php endif; ?>

								<?php if ( $next_post ) : ?>

									<div class="post-nav-next">
										<p><?php _e( 'Next' ); ?></p>
										<?php /* Translators: %s = the title of the next post */ ?>
										<h4><a title="<?php printf( _x( 'Next post: %s', 'Translators: %s = the title of the next post', 'lovecraft' ), esc_attr( get_the_title( $next_post ) ) ); ?>" href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title( $next_post ); ?></a></h4>
									</div>

								<?php endif; ?>

								<div class="clear"></div>

							</div><!-- .post-navigation-inner -->

						</div><!-- .post-navigation -->

						<?php comments_template( '', true ); ?>

					</div><!-- .post -->

					<?php
				endwhile;
			endif;
			?>

		</div><!-- .content -->

		<?php get_sidebar(); ?>

		<div class="clear"></div>

	</div><!-- .section-inner -->

</div><!-- .wrapper -->

<?php get_footer(); ?>
