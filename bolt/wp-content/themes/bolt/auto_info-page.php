<?php
/**
 * Template Name: Auto Information Template
 * Description: A Page Template that display sub-pages about auto insurance
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div class="autopage" id="subimagearea">
    <div id="subcontent">
      <div id="breadcrumbs"></div>
      <?php while ( have_posts() ) : the_post(); ?>
			<h1 class="autotitle"><?php the_title(); ?></h1>
					<?php get_template_part( 'content', 'infopage' ); ?>


				<?php endwhile; // end of the loop. ?>
      <!-- end of Content -->
      
      
    </div>
    <?php include("auto_sidebar.php")?>
  </div>
<?php get_footer(); ?>