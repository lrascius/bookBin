<?php
/* CSS */



?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- jQuery CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">

<!-- FontAwesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<style>

	html,
	body {
		height: 100%;
		/* The html and body elements cannot have any padding or margin. */
	}
	
	/* Wrapper for page content to push down footer */
	#wrap {
		min-height: 100%;
		height: auto;
		/* Negative indent footer by its height */
		margin: 0 auto -60px;
		/* Pad bottom by footer height */
		padding: 0 0 60px;
	}
	
	#footer {
		height: 60px;
		background-color: #f5f5f5;
	}
	
	#btn-debug {
		/*position: absolute;*/
	}
	
	#console-debug {
		/*position: absolute;
		top: 50px;
		left: 0px;
		background: #ffffff;*/
	}
	h2 {
		text-align: center
	}
	
	.input-group {
		text-align: center
	}
	.navbar {
		margin: 0;
	}
	.sidebar {
		left: 0;
		padding: 0;
		top: 90px;
		text-align: center;
		/*border: 2px;
    	border-radius: 25px; 
		border: 4px solid;*/
		/*position: fixed;
		top: 51px;
		bottom: 0;
		left: 0;
		z-index: 1000;
		display: block;
		padding: 20px;
		overflow-x: hidden;
		overflow-y: auto;
		background-color: #f5f5f5;
		border-right: 1px solid #eee;*/
	}
	.nav-sidebar {
		background-color: #f5f5f5 ;
	}
	.navbar-inverse {
		color: #777;
	}
	.labels {
		background-color: #0099FF;
		/*border: 3px solid;
    	border-radius: 100px;*/ 
	}
	#bookCollumns {
		margin: 0;
	}
	#myCarousel {
		top: 200px;
	}
	#footer {
	   position:absolute;
	   top: 1000px;
	   width:100%;
	   height:60px;   /* Height of the footer */
   }

/*!
 * Start Bootstrap - Simple Sidebar HTML Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

/* Toggle Styles */

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}


/*
body {
  padding-top: 51px; 
  color: #f9f9f9;
}
a {
  color:#efefef;
}


#sidebar {
  float: left;
  height: 100%;
  padding-right: 0;
  padding-top: 20px;
  background: #1E1E1E;
}


#sidebar li a:hover {
  background-color:#222222;
  color:#ffffff;
}*/

</style>