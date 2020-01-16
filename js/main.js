$(function() {
    const mobile_width = 600;
    $(window).resize(()=>{
        menu_size();
    })
    function menu_size() { 
        if ($(window).width()>mobile_width)
            $('.js_header_menu_list').css('display','flex')

        if ($('.js_header_menu_list').is(':visible'))
            if ($(window).width()<mobile_width)
                $('.js_header_menu_list').css('display','none')
            
     }
    $(".js_btn_main_menu").click(function(event) {
        
        $('.js_header_menu_list').fadeToggle('slow');
        

    });
    
	$('.js_form').submit(function( event ) {
        if ($(this)[0].checkValidity()) {
            formx = $(this).serialize();    
            formxa = $(this).serializeArray(); 
            $.ajax({
                type: "POST",
                url:  themePath+"/obr.php",
                data: formx,
                success: function(msg) {
                    $.fancybox.close();
                    $.fancybox.open({src  : '#modal_success'})
                }
            });
        }
    });
	
});