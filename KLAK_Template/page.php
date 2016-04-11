<?php get_header() ?>

<?php the_post() ?>

	<div class="post">
                <h2 class="entry-title-single">
				<span class="number">
				    <img class="footer-icon" src="<?php bloginfo('template_url') ?>/images/<?php $icon = get_post_meta( get_the_ID(), 'icon', true);
				    if( ! empty( $icon ) ) { echo  $icon; } ?>
				</span>
				<span class="name">
					<?php the_title(); ?>
				</span>
		</h2>
	
		<div id="pagecontent">
			<?php the_content() ?>
		</div>
                
        </div><!--  .post -->

<?php wp_reset_query(); ?>

<div id="backtoklak">
	<a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home">
	<span class="number">
		<b><<</b>
	</span>
	<span class="name">Zu den Interviews</span></a>
</div>

</div><!--  #content-wrapper -->

<?php get_footer() ?>