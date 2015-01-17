<ul class="nav navbar-nav navbar-right">
	<li><a href="register.php"> Register </a></li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
		<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login <span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
			<form action="login.php" method="post" role="form">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">@</span>
					<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"> <strong>**</strong></span>
					<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password">
				</div>
				<button type="submit" class="btn btn-default">
					 Submit
				</button>
			</form>
		</ul>
	</li>
</ul>