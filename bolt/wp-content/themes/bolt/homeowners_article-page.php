<?php
/**
 * Template Name: Homeowners Insurance Articles Template
 * Description: A Page Template that display articles list about homeowners insurance
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div id="subimagearea" class="homeownerspage">
	<div id="subcontent">
      <div id="breadcrumbs"></div>
		<?php while ( have_posts() ) : the_post(); ?>
			
		<h1 class="homeownerstitle"><?php the_title(); ?></h1>
		<hr class="line"/>
		<!-- end of the title-->
		
		<?php include("social_media.php");?>
		<!-- end of the social media link.-->
	  
	  <div class="content-inner">
      

			<div class="content-box-a" style="min-height:  650px; *min-height:  720px;">
				<ul class="list02">
					<li class="articles">
						<div class="content">
							<div class="top">
								<div class="left">
								</div>
								<div class="center">
								</div>
								<div class="right">
								</div>
							</div>
							<div class="middle" style="min-height: 650px; *min-height:  720px;">
								<div class="content-height">
								
						<?php 
						$catID = getHomeArticles();
						$posts = get_posts( "category=". $catID ."&numberposts=20" ); ?>
		<?php if( $posts ) : ?>

		<ul><?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
			<li>
				<div >
					<span class="arrow"></span>
					<span class="text">
						<h3 class="title titleLineHght">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<br />
						<?php echo mb_strimwidth(strip_tags($post->post_content),0,200,'...');?>   
					</span>
				</div>
			</li>
				<?php endforeach; ?>                        
		</ul>
		<h3 style="margin-left: 10px">
			<a href="/homeowners-insurance/articles/archive/">More Homeowners Business Insurance Articles</a>
		</h3>					
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
		<!-- end of the article list. -->
                            
                        

				<?php endwhile; // end of the loop. ?>
        

    

    </div>
      
      
      
    </div>
    <?php include("homeowners_sidebar.php")?>

	</div>
<?php get_footer(); ?>