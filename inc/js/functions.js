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

// Navtest
// ==========================================================================
$(document).ready(function(){
    var pagebody = $("body");
    var topbar   = $("#mobile-nav-container");
    var viewport = {
        width  : $(window).width(),
        height : $(window).height()
    };
    // retrieve variables as 
    // viewport.width / viewport.height
    
    function openme() { 
        $(function () {
            topbar.animate({
               left: "0px" // slide the nav container to left:0px
            }, { duration: 300, queue: false });
            pagebody.animate({
               left: "300px" // slide the body left:300px
            }, { duration: 300, queue: false });
        });
    }
    
    function closeme() {
        var closeme = $(function() {
            topbar.animate({
                left: "-100%" // slide the nav container back to left:-100%
            }, { duration: 180, queue: false });
            pagebody.animate({
                left: "0px"// slide the body back to left:0px
            }, { duration: 180, queue: false });
        });
    }

    // checking whether to open or close nav menu
    $("#toggle-mobile-nav").live("click", function(e){
        e.preventDefault();
        var leftval = pagebody.css('left');
        
        if(leftval == "0px") {
            openme();
            $(this).addClass('pressed');
        }
        else { 
            closeme();
            $(this).removeClass('pressed');
        }
    });
    $("#mobile-nav-container .close").live("click", function(e){        
        e.preventDefault();
        closeme();
        $("#toggle-mobile-nav").removeClass('pressed');
    });
    $("#mobile-nav-container a").live("click", function(e){        
        closeme();
        $("#toggle-mobile-nav").removeClass('pressed');
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

// Popover
// ==========================================================================
$(document).ready(function() {
  $('.popover .btn').click(function(e) {
  	$(this).toggleClass('pressed').prev('div.popover-content').fadeToggle('fast'); 
	$('div.popover-content').click(function(e) {
		$(this).fadeOut('fast').next('.btn').removeClass('pressed');
	});
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