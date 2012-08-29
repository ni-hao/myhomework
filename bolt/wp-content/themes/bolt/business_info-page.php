<?php
/**
 * Template Name: Business Information Template
 * Description: A Page Template that display pages about business.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div class="businesspage" id="subimagearea">
    <div id="subcontent">
      <div id="breadcrumbs"></div>
            <?php while ( have_posts() ) : the_post(); ?>
				<h1 class="businesstitle"><?php the_title(); ?></h1>
					<?php get_template_part( 'content', 'infopage' ); ?>


				<?php endwhile; // end of the loop. ?>
      <!-- end of Content -->
     </div>
    <?php include("business_sidebar.php") ?>
  </div>
<?php get_footer(); ?>