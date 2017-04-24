{
    $(document).ready(function() {
    	$("body").fadeIn(1000);
        $("#letter-container p a").lettering();
    	if (!navigator.cookieEnabled) {
    		$("main").css("display","none");
    		$("#cookie").css("display","block");
    	}
	});
}
