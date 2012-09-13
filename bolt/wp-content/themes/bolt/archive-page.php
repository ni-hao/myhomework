<?php
/**
 * Template Name: Articles Archive Template
 * Description: A Page Template that displays articles archive of related category
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
get_header(); ?>
<?php
	$curUrl =  get_page_link();
	$isBusiness = strpos($curUrl, "business-insurance");
	$isAuto = strpos($curUrl, "auto-insurance");
	$isHomeowners = strpos($curUrl, "homeowners-insurance");
	if($isBusiness !== false)
	{
		$titleClass = "businesstitle";
		$className="businesspage";
		$sidebarName = "business_sidebar.php";
		$linkSrc = $linkSrc."/business-insurance/articles/";
		$cat_ID = getBusiArticles();
	}elseif ($isAuto !== false)
	{
		$titleClass = "autotitle";
		$className="autopage";
		$sidebarName = "auto_sidebar.php";
		$linkSrc = $linkSrc."/auto-insurance/articles/";
		$cat_ID = getAutoArticles();
	
	}elseif($isHomeowners !== false)
	{
		$titleClass = "homeownerstitle";
		$className="homeownerspage";
		$sidebarName = "homeowners_sidebar.php";
		$linkSrc = $linkSrc."/homeowners-insurance/articles/";
		$cat_ID = getHomeArticles();
	}
?>

		<div class="<?=$className ?>" id="subimagearea">
    <div id="subcontent">
      <div id="breadcrumbs"></div>
            <?php while ( have_posts() ) : the_post(); ?>

				<h1 class="<?= $titleClass ?>"><?php the_title(); ?></h1>
				<?php include("social_media.php")?>
				<div class="content-inner">
					<div class="content-box-a ProductBodyFix content-inner">
						<ul class="list02">
            <li class="articles" style="height:auto">
                <div class="content" style="height:auto">
                    <div class="top">
                        <div class="left">
                        </div>
                        <div class="center">
                        </div>
                        <div class="right">
                        </div>
                    </div>
                    <div class="middle" style = "width:571px;float:left; height:auto;">
                        <div class="content-height" >
						<?php 
						$posts = get_posts( "category=". $cat_ID."&numberposts=100"); ?>
						<?php if( $posts ) : ?>
                        <ul>
							<li>
                                <div >
									<span class="arrow2"></span><span class="text">
									<h3 class="title">View our latest
										<a href="<?=$linkSrc?>"> insurance articles</a>
									</h3> </span>
                                </div>
                             </li>

							 <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
                            <li>
                                <div >
                                        <span class="arrow2"></span><span class="text">
                                            <h3 class="title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3> </span>
                                    </div>
                             </li>
							<?php endforeach; ?>  
                        </ul>
						<?php endif; ?>
                        </div>
                    </div> 
                    <div class="bottom">
                        <div class="left">
                        </div>
                        <div class="center">
                        </div>
                        <div class="right">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>
      <!-- end of Content -->
     </div>
    <?php include($sidebarName)?>
<?php get_footer(); ?>