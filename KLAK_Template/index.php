<?php get_header() ?>

<?php query_posts('cat=1'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div id="post-<?php $number = get_post_meta( get_the_ID(), 'number', true); if( ! empty( $number ) ) { echo  $number; } ?>" class="post">
                <div id="video-wrapper<?php $number = get_post_meta( get_the_ID(), 'number', true); if( ! empty( $number ) ) { echo  $number; } ?>" class="video-wrapper">
                    <div class="video">
                        <?php $video = get_post_meta( get_the_ID(), 'video', true); if( ! empty( $video ) ) { echo  $video; } ?>
                    </div>
                </div>
                <h2 class="entry-title">
                    <a id="p<?php $number = get_post_meta( get_the_ID(), 'number', true); if( ! empty( $number ) ) { echo  $number; } ?>" href="#post-<?php $number = get_post_meta( get_the_ID(), 'number', true); if( ! empty( $number ) ) { echo  $number; } ?>">
		    <span class="number">
			<?php $number = get_post_meta( get_the_ID(), 'number', true);
			if( ! empty( $number ) ) { echo  $number; } ?>
		    </span><span class="name"><?php the_title(); ?></span></a>
                </h2>
        </div><!--  .post -->

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

</div><!--  #content-wrapper -->

<?php get_footer() ?>