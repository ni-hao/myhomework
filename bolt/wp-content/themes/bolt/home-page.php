<?php
/**
 * Template Name: HomePage Template
 * Description: A Page Template that display homepage
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div class="homepage" id="hpimagearea">
    <h1>Great Coverage. <span class="lblue">Great Price.</span> <span class="orange">3 Steps.</span></h1>
    <div id="quotebox">
      <p class="title">I want to compare quotes for:</p>
      <form action="https://www.boltinsurance.com/insurance-quotes" name="getquote">
        <select id="typefield" name="insurancetype">
          <option value="Business Insurance">Business Insurance</option>
          <option value="Auto Insurance">Auto Insurance</option>
          <option value="Homeowner Insurance">Homeowners Insurance</option>
        </select>
        <input name="submitquote" value="" type="submit">
      </form>
      <div class="blue left">
        <p class="help">Need Help?</p>
        <a href=""><img alt="Live Chat" class="chat" src="<?php echo get_template_directory_uri(); ?>/template/sm-chat-btn.jpg" align="top" border="0" height="25" width="85"></a> </div>
      <div class="right">
        <p class="phone">1-800-216-4171</p>
        or <a href="">Schedule a Call</a> </div>
    </div>
  </div>
  <div class="homepage" id="content">
    <div class="solutions business">
      <h4>Business</h4>
      <h5>Insurance Solutions</h5>
      <div class="rspace"></div>
      <p>Get the right Business Insurance solution for both new and existing businesses: </p>
      <ul>
        <li> <a href="/business-insurance/solutions/general-liability">General Liability &amp; Business Property</a></li>
        <li> <a href="/business-insurance/solutions/workers-compensation">Workers' Compensation</a></li>
        <li> <a href="/business-insurance/solutions/auto/">Commercial Auto</a></li>
        <li> <a href="/business-insurance/solutions/errors-omissions">Errors &amp; Omissions</a></li>
      </ul>
      <p class="blue viewall"><a href="/business-insurance/solutions/">View All</a> &gt;</p>
    </div>
    <div class="solutions auto">
      <h4>Auto</h4>
      <h5>Insurance Solutions</h5>
      <div class="rspace"></div>
      <p>The right Auto Insurance solution will help protect you if you are in an accident or incur vehicle damage. </p>
      <ul>
        <li> <a href="/auto-insurance/solutions/auto-insurance">Auto</a></li>
        <li> <a href="/auto-insurance/solutions/motorcycle-insurance">Motorcycle</a></li>
        <li> <a href="/auto-insurance/solutions/rv-insurance">RV</a></li>
        <li> <a href="/auto-insurance/solutions/atv-insurance">ATV</a></li>
      </ul>
      <p class="blue viewall"><a href="/auto-insurance/solutions/">View All</a> &gt;</p>
    </div>
    <div class="solutions home">
      <h4>Homeowners</h4>
      <h5>Insurance Solutions</h5>
      <div class="rspace"></div>
      <p>Protect your home and its contents with the right Homeowners Insurance solution:</p>
      <ul>
        <li> <a href="/homeowners-insurance/solutions/homeowners-insurance">Homeowners</a></li>
        <li> <a href="/homeowners-insurance/solutions/renters-insurance">Renters</a></li>
        <li> <a href="/homeowners-insurance/solutions/condo-insurance">Condo</a></li>
        <li> <a href="/homeowners-insurance/solutions/mobile-home-insurance">Mobile Home </a></li>
      </ul>
      <p class="blue viewall"><a href="/homeowners-insurance/solutions/">View All</a> &gt;</p>
    </div>
    <div style="clear:left;"></div>
    <div class="knowledge">
      <h2>Knowledge Center</h2>
	  
      <?php 
				
		$catIDArr = array(getBusiArticles(), getAutoArticles(), getHomeArticles());
		$articlesNum = 0;
		$posts = get_posts( "category=". implode(',', $catIDArr) ."&numberposts=20" ); ?>
<?php if( $posts ) : ?>
      <ul>
	  
	<?php foreach( $posts as $post ) : setup_postdata( $post ); 
		if($articlesNum >5){
			break;
		}
		$articlesNum +=1;
	?>
		<li> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
 <?php endforeach; ?>   
      </ul>
	  			
<?php endif;?>
      <a class="morecontent" href="/articles">Insurance Articles &gt;</a> 
	  </div>
    <div id="newsarea">
      <div class="infographic"> <a style="float:left; margin-right:10px;" href=""><img alt="So you want to start a business" src="<?php echo get_template_directory_uri(); ?>/template/infographic.jpg" align="top" border="0" height="96" width="80"></a>
        <div style="float: left; width: 270px;">
          <h2>Latest Infographic</h2>
          <p><a href="http://info.boltinsurance.com/start-a-business-infographic/">So You Want to Start A Business</a></p>
          <a class="morecontent" href="http://info.boltinsurance.com/blog">More &gt;</a> </div>
        <div style="clear:left;"></div>
      </div>
      <div class="hpnews">
        <h2>News</h2>
		<?php 
				$catID = get_cat_ID( "news");
				$posts = get_posts( "category=". $catID ."&numberposts=10" ); ?>
		<?php if( $posts ) : ?>
		<?php $newsNum = 0;?>
			  <ul>
			  
		<?php foreach( $posts as $post ) : setup_postdata( $post ); 
			if($newsNum >1){
				break;
			}
			$newsNum +=1;
		?>

        <li><?php the_date("m/d/Y");?><br>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
 <?php endforeach; ?>   
      </ul>	  			
<?php endif; ?>
        <a class="morecontent" href="/about/news">More News &gt;</a> 
		</div>
    </div>
  </div>
  <div class="homepage" id="rightcol">
    <div class="box hpproviders">
      <h3>Quotes provided by:</h3>
      <div class="scroller"><img src="<?php echo get_template_directory_uri(); ?>/template/provider-logos.gif">
        <div class="left"></div>
        <div class="right"></div>
        <div style="clear:left"></div>
      </div>
      <p class="viewall blue"><a href="/about/insurance-providers">More Trusted Providers</a> &gt;</p>
    </div>
    <div class="box hptestimonials">
      <h3>Testimonials</h3>
      <ul>
        <li>
          <p><b>Computer Programmer</b></p>
          <p><i>"Again, thank you for your patience in this and thank you for your quick responses via email. I will definitely refer your company, and especially you personally. You have been the best insurance person I have dealt with ever..."</i></p>
          <p>R. Pader</p>
        </li>
        <li>
          <p><b>Product Retailer</b></p>
          <p><i>"Thank you so very very much, you just don't know how much this really means to me.
            You all have been so very very pleasant and extremely professional.
            Please forward this to your supervisor for the customer service that you've provided was nothing less than A+.Keep up the good job."</i></p>
          <p>R. Bolling </p>
        </li>
        <li>
          <p><b>Commercial Property Inspector</b></p>
          <p><i>"You have worked exceptionally hard and I appreciate it. Thank you very much, you are a life saver.
            By the way your competition said it would be at least week for proof.
            You have my business."</i></p>
          <p>B. Castile (Washington)</p>
        </li>
      </ul>
      <p class="viewall blue"><a href="/about/testimonials">View All</a> &gt;</p>
    </div>
    <div class="box hpawards" style="display:none;">
      <h3>Awards</h3>
    </div>
    <div id="follow">
      <ul>
        <li>Follow Us: </li>
        <li><a href="http://www.facebook.com/BOLTInsurance"><img alt="facebook" src="<?php echo get_template_directory_uri(); ?>/template/facebook-icon.jpg" border="0" height="30" width="29"></a></li>
        <li><a href="http://twitter.com/boltinsurance"><img alt="twitter" src="<?php echo get_template_directory_uri(); ?>/template/twitter-icon.jpg" border="0" height="30" width="29"></a></li>
        <li><a href="http://www.linkedin.com/company/bolt-insurance-agency"><img alt="linkedin" src="<?php echo get_template_directory_uri(); ?>/template/linked-icon.jpg" border="0" height="30" width="29"></a></li>
      </ul>
    </div>
  </div>
<?php get_footer(); ?>