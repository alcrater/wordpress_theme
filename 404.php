<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package uppercase
 */


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'OH NO!!! Where did the page go?', 'uppercase' ); ?></h1>
					
				</header><!-- .page-header -->
				<div>
            <img src="/acrater31/wordpress/wp-content/themes/wordpress_theme/assets/images/southpark-error-pages-reload" alt="myPic" />
        </div>
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'uppercase' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					
					<?php
					/* translators: %1$s: smiley */
					$uppercase_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'uppercase' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$uppercase_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
