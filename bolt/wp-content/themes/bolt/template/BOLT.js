// JavaScript Document

// Breadcrumbs
var crumbs=new function() {
	var crumbs=this;
	this.page="";

    this.init=function() {
	  if (!crumbs.page) {
		setTimeout("crumbs.setup()",100);
	  }
	}
	
	this.setup=function() {
	 if ($('#breadcrumbs').size()) {
	  $('#breadcrumbs').html("<ul></ul>");
	  var url=window.location.pathname;
	  // find current page in the nav links
 	  $('#nav a[href!=""]').each(function(i,v){
			var path=$(v).get()[0].pathname;
			if (path && url.indexOf(path)>=0) { crumbs.page=v; }
	  });
	  if (crumbs.page) {
		  // add current page to crumbs
		  $(crumbs.page).parent('li').clone().appendTo('#breadcrumbs>ul').children('a').addClass('blue');
		  // add parent pages from nav including structure
		  var parents=$(crumbs.page).parents('li');
		  for (var x=1;x<parents.length;x++) {
			  $(parents[x]).clone().prependTo('#breadcrumbs>ul');
		  }
		  $('#breadcrumbs ul ul.col2').each(function (i,v) {
			$(v).children('li').appendTo($(this).prev('ul'));
		  }).remove();
		  // remove deep and unneeded levels
		  $('#breadcrumbs ul ul ul').remove();
		  $('#breadcrumbs>ul>li:not(:has(ul))').addClass('empty');
	  }
	  $('#breadcrumbs').append('<div style="clear:left;"></div>');
     }
	}
}

// Provided by logo Scroller
var pScroller=new function() {
	var scroller=this;
	var scrollOn=0;
	
	this.init=function() {
		// left and right arrows
	   $('.scroller .left, .scroller .right').click(function() {
		var img=$(this).siblings('img');
		var p=parseInt(img.attr('data-pos')) || 0;
		if ($(this).hasClass('right')) {
		  p=Math.min(p+1,10);
		} else {
		  p=Math.max(p-1,0);
		}
		img.stop(1,1).attr('data-pos',p).animate({'margin-left':(-p*66)+"px"});
       });
	 
	 // click and drag logos
	 $('.scroller img').mousedown(function(e) {
		e.preventDefault(); scrollOn=1;
    	$(this).attr('data-start',e.pageX-parseInt($(this).css('margin-left')));})
 		.mousemove(function(e) { if (scrollOn) { e.preventDefault();
		var x=Math.max(0,Math.min(700,parseInt($(this).attr('data-start')) - e.pageX));
		$(this).css({'margin-left':-x+"px"}).attr('data-pos',Math.round(x/66));
    	}
  		})
 		.mouseup(function(e) { scrollOn=0;}).mouseleave(function(e) { scrollOn=0;});
	}
}

$(document).ready(function() {
						   
  pScroller.init();
		
 // testimonial selector
 $('.hptestimonials li').each(function(i,v) {
									   $('.hptestimonials').prepend('<a class="btn" data-n="'+i+'"></a>');
									   });
 $('.hptestimonials a.btn:last').addClass('on');
 $('.hptestimonials a.btn').click(function(e){
		e.preventDefault();
		if (!$(this).hasClass('on')) {
		  $('.hptestimonials a.btn.on').removeClass('on');
		  var i=$(this).addClass('on').attr('data-n');
 		  $('.hptestimonials li:visible').hide();
		  $('.hptestimonials li:eq('+i+')').show();
		}
										   });
 
 crumbs.init();
});
