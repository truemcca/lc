<?php get_header(); ?>
		<div class= "clearfix">
		<section class="main">

			<?php if (have_posts () ) : while (have_posts ()) : the_post(); 
			?>
			<section>
				<!-- GIT TEST! -->
				<a href="<?php the_permalink(); ?>"><h1><?php the_title_attribute(); ?></h1></a>
				<?php the_content();?>
				<!--<p>This Life Clinic Blog will highlight the most cutting edge information and tutorials in the physical therapy industry!</p> -->
				
			</section>
		<?php endwhile; else:?>
		<?php endif; ?>
		</section>
	
	
	</div>
<?php get_footer(); ?>
