<?php
/* JavaScript */

?>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>		

<script>
	/* Toggle Debug Console off and on */
	$(document).ready(function() {
		
		$("#console-debug").hide();
		$("#btn-debug").click(function(){
			
			$("#console-debug").toggle();
			
		});
	});
	
	
</script>

<!-- Stop the navigation drop down from closing upon a click -->
<script type="text/javascript">
    $('.dropdown-menu input, .dropdown-menu label').click(function(e) {
        e.stopPropagation();
    });
</script>
