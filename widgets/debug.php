<!-- Create a debug window with variables and other infromation -->
<div id="console-debug"> 
	<?php 
		$all_vars = get_defined_vars();
	?>
	<h1> GET Array </h1>
	<pre> 
		<?php
		 	print_r($_GET); ?>
	</pre>
	<h1> POST Array </h1>
	<pre> 
		<?php
		 	print_r($_POST); ?>
	</pre>
	<h1>All Variables</h1>
	<pre> 
		<?php
		 	print_r($all_vars); ?>
	</pre>
	<h1>Page Array</h1>
	<pre>	
		<?php
		 	print_r($page);
		 ?> 
	</pre>

</div>