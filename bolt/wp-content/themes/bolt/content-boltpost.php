<?php
/**
 * The template for displaying content in the articles or news post template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<?php
    $category = get_the_category();   
    $cat_id = $category[0]->cat_ID;
	$linkSrc = esc_url( get_home_url() );
	if($cat_id == getBusiArticles())
	{
		$titleClass="businesstitle";
		$linkName = "Business Insurance Articles";
		$linkSrc = $linkSrc."/business-insurance/articles/";
	}elseif ($cat_id == getAutoArticles())
	{
		$titleClass="autotitle";
		$linkName = "Auto Insurance Articles";
		$linkSrc = $linkSrc."/auto-insurance/articles/";
	
	}elseif($cat_id == getHomeArticles())
	{
		$titleClass="homeownerstitle";
		$linkName = "Homeowners Insurance Articles";
		$linkSrc = $linkSrc."/homeowners-insurance/articles/";
	
	}elseif($cat_id == getNews())
	{
		$titleClass="generictitle";
		$linkName = "News";
		$linkSrc = $linkSrc."/about/news/";
		
	}
		?>
		
	<h1 class="<?php echo $titleClass?>"><?php the_title(); ?></h1>
		<hr class="line" />
		<?php include("social_media.php")?>
		
	<div class="content-inner">

	<div class="content-box-a articleBodyFix" style="*height: 1150px !important">
	<?php the_content(); ?>
	<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>

	<!-- end of content -->

	<br/>
	<br/>
	
	<?php 
	$utility_text = __( 'Return to <a href="%1$s">%2$s</a>', 'twentyeleven' );

			printf(
				$utility_text,
				$linkSrc,
				$linkName
			);?>
		<!-- end of return link -->
		</div>
		
			
		
	</div>
