$(function() {
	function catalo(){
		if ($('.p_list_projects').length>0) {
			$('.p_project_item_empty').remove();
			if ($(window).width()> 980) el_count = 4;
			if ($(window).width()< 980) el_count = 3;
			if ($(window).width()<=750) el_count = 2;
			if ($(window).width()<=500) el_count = 1;
			count = $('.p_list_projects>div').length%el_count;
			for (var i = 0; i < count; i++) {
				$('.p_list_projects').append("<div class='p_project_item p_project_item_empty'></div>")
			}
		}
	}
	catalo();
	$(window).resize(function(event) {
		catalo();
	});
	$('.js_call_project').click(function(event) {
		$('.js_name_page').val(window.location.href);
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