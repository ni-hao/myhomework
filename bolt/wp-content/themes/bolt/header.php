<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<html>
<!--<![endif]-->
<head>
<title></title>
	<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<?php include("global.php"); ?>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600">
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/template/ContentInfo.css">
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/template/BOLTwebsite.css">
<link href="<?php echo get_template_directory_uri(); ?>/template/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/template/extraStyle.css" type="text/css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/template/BOLT.js" type="text/javascript"></script>
</head>

<body>
<div id="wrapper">
	
	<div id="header"><a href="/"><img alt="BOLT Insurance Agency" src="<?php echo get_template_directory_uri(); ?>/template/BOLTlogo.png" align="top" border="0" height="45" width="178"></a>
    <div class="right">
      <ul>
        <li><a href="">Login</a></li>
        <li><a href="">Return to a saved quote</a></li>
      </ul>
      <form name="search"  action="/search">
        <input title="Search" name="search" type="text">
        <input title="Search" value="" type="submit">
      </form>
      <div class="phonenum">Call Us: <span class="orange">1-800-216-4171</span></div>
    </div>
  </div>
			
  <div id="nav">
    <ul class="nav1">
      <li><a href="/">Home</a></li>
      <li class="menu"><a>Get Quotes</a>
        <ul class="nav2">
          <li><a href="">Business Insurance</a></li>
          <li><a href="">Auto / Home Insurance</a></li>
        </ul>
      </li>
      <li class="menu"><a href="/business-insurance/solutions/">Insurance Solutions</a>
        <ul class="nav2 wide">
          <li><a href="/business-insurance/solutions/">Business Insurance</a>
            <ul class="nav3">
              <li><a href="">Get a Quote</a></li>
              <li><a href="/business-insurance/solutions/">Solutions</a></li>
              <li><a href="/business-insurance/articles/">Articles</a></li>
              <li><a href="/business-insurance/local/">Local</a></li>
              <li><a href="/business-insurance/solutions/auto/">Commercial Auto</a></li>
              <li><a href="/business-insurance/solutions/officers-directors/">Directors &amp; Officers</a></li>
              <li><a href="/business-insurance/solutions/employment-practices-liability">Employment Practices</a></li>
              <li><a href="/business-insurance/solutions/errors-omissions">Errors &amp; Omisssions</a></li>
              <li><a href="/business-insurance/solutions/flood-protection">Flood Protection</a></li>
            </ul>
            <ul class="nav3 col2">
              <li><a href="/business-insurance/solutions/general-liability">Liability & Property</a></li>
              <li><a href="/business-insurance/solutions/umbrella-insurance">Umbrealla</a></li>
              <li><a href="/business-insurance/solutions/workers-compensation">Workers' Compensation</a></li>
              <li><a href="/business-insurance/solutions/small-business-insurance">Types of Small Business Insurance</a></li>
              <li><a href="/business-insurance/solutions/janitorial-cleaning-insurance">Janitorial Insurance</a></li>
              <li><a href="/business-insurance/solutions/lawn-care-landscaping-insurance">Lawn Care Insurance</a></li>
              <li><a href="/business-insurance/solutions/consultant-insurance">Consultant Insurance</a></li>
              <li><a href="/business-insurance/solutions/office-insurance">Office Insurance</a></li>
            </ul>
          </li>
          <li><a href="/auto-insurance/solutions/">Auto Insurance</a>
            <ul class="nav3">
              <li><a href="">Get a Quote</a></li>
              <li><a href="/auto-insurance/solutions/">Solutions</a></li>
              <li><a href="/auto-insurance/solutions/auto-insurance">Auto</a></li>
            </ul>
            <ul class="nav3 col2">
              <li><a href="/auto-insurance/solutions/motorcycle-insurance">Motorcycle</a></li>
              <li><a href="/auto-insurance/solutions/rv-insurance">RV</a></li>
              <li><a href="/auto-insurance/solutions/atv-insurance">ATV</a></li>
            </ul>
          </li>
          <li><a href="/homeowners-insurance/solutions/">Homeowners Insurance</a>
            <ul class="nav3">
              <li><a href="">Get a Quote</a></li>
              <li><a href="/homeowners-insurance/solutions/">Solutions</a></li>
              <li><a href="/homeowners-insurance/solutions/homeowners-insurance">Homeowners</a></li>
            </ul>
            <ul class="nav3 col2">
              <li><a href="/homeowners-insurance/solutions/condo-insurance">Condo</a></li>
              <li><a href="/homeowners-insurance/solutions/renters-insurance">Renters</a></li>
              <li><a href="/homeowners-insurance/solutions/mobile-home-insurance">Mobile home</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="menu"><a href="/insurance-wiki">Knowledge Center</a>
        <ul class="nav2">
          <li><a href="/insurance-faq">FAQs</a></li>
          <li><a href="/insurance-glossary">Insurance Talk</a></li>
          <li><a href="http://info.boltinsurance.com/blog">Blog</a></li>
          <li><a href="/articles">Articles</a>
            <ul class="nav3">
              <li><a href="/business-insurance/articles/">Business Insurance</a></li>
              <li><a href="/auto-insurance/articles/">Auto Insurance</a></li>
              <li><a href="/homeowners-insurance/articles/">Homeowners Insurance</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="menu"><a href="/about">About BOLT</a>
        <ul class="nav2">
          <li><a href="/about/bolt-insurance-agency">Our Company</a></li>
          <li><a href="/about/advantages">Why BOLT</a></li>
          <li><a href="/about/news">News</a></li>
          <li><a href="/about/careers">Careers</a></li>
          <li><a href="/about/service-center">Service Center</a></li>
          <li><a href="/about/testimonials">Testimonials</a></li>
          <li><a href="/about/insurance-providers">Trusted Providers</a></li>
          <li><a href="/about/bolt-management-team">BOLT Management</a></li>
        </ul>
      </li>
      <li><a href="/contact">Contact Us</a></li>
      <li class="chat"><a href=""><img alt="Live Chat Online" src="<?php echo get_template_directory_uri(); ?>/template/lg-chat-btn.jpg" border="0" height="26" width="144"></a></li>
    </ul>
  </div>

  
