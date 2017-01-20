<?php
/**
 * The template for displaying all single posts which have default layout.
 *
 * @package AccessPress Mag
 */
 
 global $post;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta clearfix">
            <?php 
                echo get_the_category_list();
                accesspress_mag_posted_on();
		        do_action( 'accesspress_mag_post_meta' );
            ?>
		</div><!-- .entry-meta -->        
	</header><!-- .entry-header -->

	<div class="entry-content">
        <?php 
            $show_featured_image = of_get_option( 'featured_image', '1' );
            $image_id = get_post_thumbnail_id();
            $image_path = wp_get_attachment_image_src( $image_id, 'accesspress-mag-singlepost-default', true );
            $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
            if( has_post_thumbnail() ) {
                if( $show_featured_image == 1 ){
        ?>    
            <div class="post_image">                  
                    <img src="<?php echo esc_url( $image_path[0] ); ?>" alt="<?php echo esc_attr( $image_alt );?>" />                
            </div><!--.post_image-->
        <?php
                }
            }//endif has_post_thumbnail();
        ?>
        <div class="post_content">
            <?php the_content(); ?>
        </div><!-- .post_content -->
        <?php if ( is_active_sidebar( 'accesspress-mag-article-ad' ) ) { ?>
            <div class="article-ad-section">
                <?php dynamic_sidebar( 'accesspress-mag-article-ad' ); ?> 
            </div> 
        <?php } ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'accesspress-mag' ),
				'after'  => '</div>',
			) );
		?>        
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php accesspress_mag_entry_footer(); ?>        
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
