<?php
/**
 * Template Name: Search Information Template
 * Description: A Page Template that appear searching result
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div class="genericpage" id="subimagearea">
    <div id="subcontent">
      <div id="breadcrumbs"></div>
      <?php while ( have_posts() ) : the_post(); ?>

					  
  <div id="cse" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en', style : google.loader.themes.V2_DEFAULT});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
      '003852609525218172122:9iqvcn26ylq', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.draw('cse');
	customSearchControl.execute("<?php echo get_query_var("search")?>");
  }, true);
</script>
	<?php endwhile; // end of the loop. ?>
      <!-- end of Content -->
      
      
    </div>
    <?php include("generic_sidebar.php")?>
  </div>
<?php get_footer(); ?>