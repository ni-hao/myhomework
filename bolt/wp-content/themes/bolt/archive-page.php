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
function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;  Prev</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>Next  &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}
?>

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

		<div class="<?php echo $className ?>" id="subimagearea">
    <div id="subcontent">
      <div id="breadcrumbs"></div>

				<h1 class="<?php echo $titleClass ?>"><?php the_title(); ?></h1>
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
                        <div class="content-height" style="float:left; width:100%; height:auto;" >
						<?php 
						$wp_query = new WP_Query("cat=". $cat_ID. "&paged=".$paged."&posts_per_page=20");
						?>
                        <ul>
							<li>
                                <div >
									<span class="arrow2"></span><span class="text">
									<h3 class="title">View our latest
										<a href="<?php echo $linkSrc?>"> insurance articles</a>
									</h3> </span>
                                </div>
                             </li>

            <?php while ( have_posts() ) : the_post(); ?>
                            <li>
                                <div >
                                        <span class="arrow2"></span><span class="text">
                                            <h3 class="title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3> </span>
                                    </div>
                             </li>
			<?php endwhile; // end of the loop. ?>
                        </ul>
                        </div>
						<div id="page" style="float:left;">
						    <?php kriesi_pagination($wp_query->max_num_pages); 
							?>
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
      <!-- end of Content -->
     </div>
    <?php include($sidebarName)?>
<?php get_footer(); ?>