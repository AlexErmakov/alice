$(function() {

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