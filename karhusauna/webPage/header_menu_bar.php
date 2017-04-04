<!DOCTYPE html>
<html>
  <head>

	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <title>Karhusauna</title>

	    <!-- CSS and JavaScript Resources -->

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>﻿
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		<!-- Fonts -->

		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

		<!-- Custom CSS files -->
		<link rel="stylesheet" href="../css/header_menu_bar.css">


		<!-- Languages processing file -->

		<?php include "../languages/common.php" ?>
		<?php include "../sql/connection.php" ?>

  </head>

  <body>

    <div class="container" >

    	<div id="navigation-bar">
    	<!-- Navigation bar -->
      <a class="navbar-brand" id="logo" href="../webPage/homePage.php">Logo</a>
		    <ul class="nav justify-content-end">
		  		<li class="nav-item">
		    		<a class="nav-link active" href="../webPage/aboutus.php"><?php echo $lang['MENU_ABOUT_US']; ?></a>
		  		</li>

		  		<li class="nav-item">
		    		<a class="nav-link" href="../webPage/saunas.php"><?php echo $lang['MENU_SAUNA']; ?></a>
		  		</li>

		  		<li class="nav-item">
		   			<a class="nav-link" href="../webPage/faq.php"><?php echo $lang['MENU_FAQ']; ?></a>
		 		 </li>

		  		<li class="nav-item dropdown">
			    	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
			    		<img src="<?php echo $lang['ACTIVE_LANG_IMG']; ?>" width="30px" height="18px">
			    	</a>

			    	<!-- Dropdown languages menu -->

			    	<div class="dropdown-menu">

				    	<a class="dropdown-item" href="<?php echo $lang['UNACTIVE_LANG_1']; ?>">
				    		<img src="<?php echo $lang['UNACTIVE_LANG_1_IMG']; ?>" width="30px" height="18px">
				    	</a>

		    			<a class="dropdown-item" href="<?php echo $lang['UNACTIVE_LANG_2']; ?>">
		    				<img src="<?php echo $lang['UNACTIVE_LANG_2_IMG']; ?>" width="30px" height="18px">
		    			</a>
	    			</div>
		  		</li>
          <a class="nav-link" href="../webPage/login.php"><?php echo $lang['MENU_LOGIN']; ?></a>
			</ul>
		</div>
