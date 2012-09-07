<?php
/**
 * Template Name: Knowledge HomePage Template
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

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="entry-content">
				<h1 class="generictitle">Knowledge Center</h1>

      <!-- Content Goes Here -->
      <div class="content-inner" style="overflow:hidden">  
  
  <div class="content-box-a">
        <ul class="list02">
            <li>
                <div class="title">
                    <h2 class="text">
                        FAQ</h2>
                </div>
                <div class="content">
                    <div class="top">
                        <div class="left">
                        </div>
                        <div class="center">
                        </div>
                        <div class="right">
                        </div>
                    </div>
                    <div class="middle">
                        <div class="content-height">
                            <ul>
                                <li>
                                    <div onClick="location.href='/insurance-faq?openQuestion=q1';" class="nodec">
                                        <ul>
                                            <li class="question"><span class="icon"></span><span class="text">Why is the rating for insurance companies important?</span> </li>
                                            <li class="answer"><span class="icon"></span><span class="text">The rating of your insurance company is important for two reasons. First and most <br/> importantly...<span class="more-button">More<span class="arrow"></span></span></span></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div onClick="location.href='/insurance-faq?openQuestion=q2';" class="nodec">
                                        <ul>
                                            <li class="question"><span class="icon"></span><span class="text">Who are the insurance carriers with BOLT Insurance Agency? </span></li>
                                            <li class="answer"><span class="icon"></span><span class="text">These companies are rated A- or better by A.M. Best Company, a full-service credit rating <br/> organization with more than 100 years' experience that... <span class="more-button">More<span class="arrow"></span></span> </span></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div onClick="location.href='/insurance-faq?openQuestion=q3';" class="nodec">
                                        <ul>
                                            <li class="question"><span class="icon"></span><span class="text">Why do insurance rates seem to go up or down over time? </span></li>
                                            <li class="answer"><span class="icon"></span><span class="text">Like commercial real estate, the insurance industry has cycles. In some years, major <br/> "insurance events," such... <span class="more-button">More<span class="arrow"></span></span></span></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="/insurance-faq"><span class="learn-more">Insurance FAQs<span class="arrow"></span></span></a>
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
            <li class="insurance-talk">
                <div class="title">
                    <h2 class="text">
                        Insurance Talk</h2>
                </div>
                <div class="content">
                    <div class="top">
                        <div class="left">
                        </div>
                        <div class="center">
                        </div>
                        <div class="right">
                        </div>
                    </div>
                    <div class="middle">
                        <div class="content-height">
                            <ul>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pictures/insurance-talk-liability.jpg" alt="" />
                                    <div onClick="location.href='/insurance-glossary?openTerm=t8';" class="nodec">
                                        <h3 class="title" style="padding-right: 30px; padding-bottom: 5px"> Business Liability</h3>
                                        <p>
                                            <br />
                                            <br />
                                            Provides protection for your company in the event that you cause certain injury to others. This could include injury or damage to a person...
                                        </p>
                                        <span class="more-button">More<span class="arrow"></span></span>
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pictures/insurance-talk-coverage.jpg" alt="" />
                                    <div onClick="location.href='/insurance-glossary?openTerm=t29';" class="nodec">
                                        <h3 class="title">
                                            Property Deductible</h3>
                                        <p>
                                            <br />
                                            <br />
                                            Insurance coverage does not apply until the amount of a loss exceeds the value that has been selected as a deductible...
                                        </p>
                                        <span class="more-button">More<span class="arrow"></span></span>
                                    </div>
                                </li>
                                <li class="last">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pictures/insurance-talk-quote.jpg" alt="" />
                                    <div onClick="location.href='/insurance-glossary?openTerm=t37';" class="nodec">
                                        <h3 class="title">
                                            Workers' Comp.</h3>
                                        <p>
                                            <br />
                                            <br />
                                            Workers' Compensation insurance protects employees by providing medical and income benefits for job-related injuries...
                                        </p>
                                        <span class="more-button">More<span class="arrow"></span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="/insurance-glossary"><span class="learn-more">Insurance Glossary<span class="arrow" style="padding: 0px;"></span></span></a>
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
            <li class="articles">
                <div class="title">
                    <h2 class="text" style="text-align: center">
                        Articles</h2>
                </div>
                <div class="content">
                    <div class="top">
                        <div class="left">
                        </div>
                        <div class="center">
                        </div>
                        <div class="right">
                        </div>
                    </div>
                    <div class="middle">
                        <div class="content-height">
						<?php 
						$catIDArr = array(getBusiArticles(), getAutoArticles(), getHomeArticles());
						$posts = get_posts( "category=". implode(',', $catIDArr) ."&numberposts=3" );?>
						<?php if( $posts ) : ?>
                            <ul><?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
                                <li>
                                    <div onClick="location.href='<?php the_permalink(); ?>';" class="nodec">
                                        <span class="arrow"></span><span class="text">
                                            <h3 class="title titleLineHght">
                                                <?php the_title(); ?></h3>
                                            <br />
                                            <?php echo mb_strimwidth(strip_tags($post->post_content),0,200,'...');?></span>
                                    </div>
                                </li>
								<?php endforeach; ?>  
                            </ul>
						<?php endif; ?>
                        </div>
                        <a href="/business-insurance/articles/"><span class="learn-more">Insurance Articles<span class="arrow" style="padding: 0px;"></span></span></a>
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
			</div><!-- .entry-content -->
			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
		</article><!-- #post-<?php the_ID(); ?>-->
	<?php endwhile; // end of the loop. ?>
      
      
      
    </div>
    <?php include("generic_sidebar.php");?>
	</div>
<?php get_footer(); ?>