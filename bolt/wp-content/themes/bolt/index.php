<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
		
    <div id="subcontent">
      <div id="breadcrumbs"></div>
      
      
      
      
      
    </div>
    <div class="homepage" id="subrightcol">
      <div id="quoteboxsm">
        <form action="https://www.boltinsurance.com/insurance-quotes">
          <p class="gentxt">Get Insurance Quotes Online</p>
          <select id="quoteboxtype">
            <option value="business">Business Insurance</option>
            <option value="auto">Auto Insurance</option>
            <option value="home">Homeowners Insurance</option>
          </select>
          <input alt="Compare Quotes Now" src="<?php echo get_template_directory_uri(); ?>/template/lg-comparequote-btn.png" border="0" height="52" type="image" width="259">
        </form>
      </div>
      <div class="box helpbox">
        <h3>Need Help?</h3>
        <p>Call: <span class="orange">1-800-216-4171</span><br>
          or <a href="">Schedule a Call</a></p>
        <a href=""><img alt="Live Chat" class="chat" src="<?php echo get_template_directory_uri(); ?>/template/sm-chat-btn.jpg" border="0" height="25" width="85"></a></div>
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
      <div id="follow">
        <ul>
          <li>Follow Us: </li>
          <li><a href="http://www.facebook.com/BOLTInsurance"><img alt="facebook" src="<?php echo get_template_directory_uri(); ?>/template/facebook-icon.jpg" border="0" height="30" width="29"></a></li>
          <li><a href="http://twitter.com/boltinsurance"><img alt="twitter" src="<?php echo get_template_directory_uri(); ?>/template/twitter-icon.jpg" border="0" height="30" width="29"></a></li>
          <li><a href="http://www.linkedin.com/company/bolt-insurance-agency"><img alt="linkin" src="<?php echo get_template_directory_uri(); ?>/template/linked-icon.jpg" border="0" height="30" width="29"></a></li>
        </ul>
      </div>
    </div>
		
<?php get_footer(); ?>