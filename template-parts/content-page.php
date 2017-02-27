<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package om17
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <div class="split">
            <div class="image-section split-section">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail(array(600, 600));
                } else {
                    ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/om17-logo1.jpg">

                    <?php
                }
                ?>
            </div>
            <div class="divider-bar"></div>
            <div class="content-section split-section">
                <div class="scroll-container">
                    <!--				<header class="entry-header">-->
                    <!--					--><?php //the_title('<h1 class="entry-title">', '</h1>'); ?>
                    <!--				</header><!-- .entry-header -->

                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'om17'),
                        'after' => '</div>',
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
