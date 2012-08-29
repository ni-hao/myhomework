<?php
/**
 * Template Name: Homeowners Information Template
 * Description: A Page Template that display sub-pages about homeowners insurance
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div class="homeownerspage" id="subimagearea">
    <div id="subcontent">
      <div id="breadcrumbs"></div>
      <?php while ( have_posts() ) : the_post(); ?>

			<h1 class="homeownerstitle"><?php the_title(); ?></h1>
					<?php get_template_part( 'content', 'infopage' ); ?>


				<?php endwhile; // end of the loop. ?>
      
      <!-- end of Content -->
      
      
    </div>
    <?php include("homeowners_sidebar.php");?>
  </div>
<?php get_footer(); ?>