<?php
/**
 * Template Name: Generic Information Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div id="subimagearea" class="genericpage">
	<div id="subcontent">
      <div id="breadcrumbs"></div>
      
      <?php while ( have_posts() ) : the_post(); ?>
				<h1 class="generictitle"><?php the_title(); ?></h1>
					<?php get_template_part( 'content', 'infopage' ); ?>


				<?php endwhile; // end of the loop. ?>
      
      
      
    </div>
	<?php include("generic_sidebar.php");?>
	</div>
<?php get_footer(); ?>