<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<?php
    $category = get_the_category();   
    $cat_id = $category[0]->cat_ID;
	if($cat_id == getBusiArticles())
	{
		$className="businesspage";
		$sidebarName = "business_sidebar.php";
	}elseif ($cat_id == getAutoArticles())
	{
		$className="autopage";
		$sidebarName = "auto_sidebar.php";
	
	}elseif($cat_id == getHomeArticles())
	{
		$className="homeownerspage";
		$sidebarName = "homeowners_sidebar.php";
	}elseif($cat_id == getNews())
	{
		$className="genericpage";
		$sidebarName = "generic_sidebar.php";
	}
?>

		<div class="<?php echo $className ?>" id="subimagearea">
    <div id="subcontent">
      <div id="breadcrumbs"></div>
            <?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'boltpost' ); ?>


				<?php endwhile; // end of the loop. ?>
      <!-- end of Content -->
     </div>
	
    <?php include($sidebarName);?>
<?php get_footer(); ?>