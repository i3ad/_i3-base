/**
 * Here goes all the JS Code you need in your child theme buddy!
 */
(function($) {

    /*
 * tooltipv2 script 
 * powered by jQuery (http://www.jquery.com)
 * 
 * written by Alen Grakalic (http://cssglobe.com)
 * 
 * for more info visit http://cssglobe.com/post/1695/easiest-tooltipv2-and-image-preview-using-jquery
 *
 */
 
this.tooltipv2 = function(){  
    /* CONFIG */        
        xOffset = 10;
        yOffset = 20;       
        // these 2 variable determine popup's distance from the cursor
        // you might want to adjust to get the right result     
    /* END CONFIG */        
    $("span.tooltipv2").hover(function(e){                                             
        this.t = this.title;
        this.title = "";                                      
        $("body").append("<p id='tooltipv2'>"+ this.t +"</p>");
        $("#tooltipv2")
            .css("top",(e.pageY - xOffset) + "px")
            .css("left",(e.pageX + yOffset) + "px")
            .fadeIn("fast");        
    },
    function(){
        this.title = this.t;        
        $("#tooltipv2").remove();
    }); 
    $("span.tooltipv2").mousemove(function(e){
        $("#tooltipv2")
            .css("top",(e.pageY - xOffset) + "px")
            .css("left",(e.pageX + yOffset) + "px");
    });         
};



// starting the script on page load
$(document).ready(function(){
    tooltipv2();
});


$(document).ready(function() {
   
    $('a#to-top').click(function(){
        $('html, body').animate({scrollTop:0}, 'fast');
        return false;
    });

});



// Tabs
// http://justintadlock.com/archives/2007/11/07/how-to-create-tabs-using-jquery
// ==========================================================================
$(document).ready(function() {
    // setting the tabs in the sidebar hide and show, setting the current tab
        $('div.tabbed div').hide();
        $('div.t1').show();
        $('div.tabbed ul.tabs li.t1 a').addClass('tab-current');

    	// sidebar tabs
    	$('div.tabbed ul li a').click(function(){
            var thisClass = this.className.slice(0,2);
        	$('div.tabbed div').hide();
        	$('div.' + thisClass).show();
        	$('div.tabbed ul.tabs li a').removeClass('tab-current');
        	$(this).addClass('tab-current');
        });
});


// Alert-Box
// ==========================================================================
$(document).ready(function() {
  $('.alert-box .close').click(function(e) {
     $(this).parent('.alert-box').fadeOut('slow,function(){$(this).remove();}');
     e.preventDefault();
  });
});

// Dropdown Button
// ==========================================================================
$(document).ready(function() {
  $('.dropdown-btn .btn').click(function(e) {
  	$(this).toggleClass('pressed').next('ul').slideToggle('fast'); 
    e.preventDefault();
  });
});

}(jQuery)); // END noConflict wrapper