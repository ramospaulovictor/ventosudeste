 jQuery(document).ready(function($) {
                
       /*-------------Toogle for slider posts option ----------------------*/
       if( $(".slider_type input[type='radio']:checked").val() !=='cat' ){
            $('#section-homepage_slider_category').hide();
       }
        $(".slider_type input[type='radio']").on('change',function(){
            $('#section-homepage_slider_category').fadeToggle('slow');
        });
        
        $('.radio-post-template-wrapper').click(function(event){
           var available = $(this).attr('available');
           if(available=='pro'){
                event.preventDefault();
           }
        });
        
        $('.radio-post-template-wrapper').hover(function(){
             var available = $(this).attr('available');
             if(available=='pro'){
                $('.pro-tmp-msg').show();
             }
        },function(){
            $('.pro-tmp-msg').hide();
        });
        
        $(".section h4.group-heading").click(function() {
			$(this).next('.group-content').toggle();
            var attr_arrow = $(this).find('.heading-arrow').hasClass('side');
            if(attr_arrow==true){
                $(this).find('.heading-arrow').removeClass('side');
                $(this).find('.heading-arrow').addClass('down');
                $(this).find('.fa').removeClass('fa-angle-right');
                $(this).find('.fa').addClass('fa-angle-down');
            }
            else if(attr_arrow==false)
            {
                $(this).find('.heading-arrow').removeClass('down');
                $(this).find('.heading-arrow').addClass('side');                    
                $(this).find('.fa').removeClass('fa-angle-down');
                $(this).find('.fa').addClass('fa-angle-right');
            }                
		});                
       
});
