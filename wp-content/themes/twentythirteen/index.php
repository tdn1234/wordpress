<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content">
		<div class="box">
			<div class="box-content">
				<div class="box-product" rel="15">
					<?php if ( have_posts() ) : ?>

						<?php /* The loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php //get_template_part( 'content', get_post_format() ); ?>
							<div>
								<div class="name">
									<a title="<?php echo the_title() ; ?>" href="<?php echo the_permalink(); ?>">
										<?php echo the_title() ; ?>
									</a>
								</div><!--name-->
								<div class="image">
									<a class="product-mask" title="<?php echo the_title() ; ?>" href="<?php echo the_permalink(); ?>">
									<div class="product-mask-inner"></div>
									<div class="product-mask-inner2"></div>
									<div class="product-link">
                                                    <i class="fa fa-search"></i>
                                                </div>
										<div class="product-thumb">
											<?php the_post_thumbnail(); ?>
										</div>
									</a>
								</div><!--image-->
								<div class="price"><?php echo get_post_meta(get_the_ID(), 'price', true); ?></div>
								<div class="pdac">
									<a class="buy" title="add this product to cart" href="<?php echo the_permalink() ?>">ADD TO CART</a>
									<a class="detail" title="<?php the_title() ?>" href="<?php echo the_permalink() ?>">DETAILS</a>
								</div><!--pdac-->
							</div>
						<?php endwhile; ?>

						<?php twentythirteen_paging_nav(); ?>

					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div><!--box-product-->
			</div><!--box-content-->
		</div><!--box-->
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
