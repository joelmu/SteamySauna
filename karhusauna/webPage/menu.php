<head>
  <title>Karhusauna</title>
  <?php
  include_once("../languages/lang.php"); ?>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="script.js">

</script>
</head>
<body>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><?php echo htmlspecialchars($lang['language']); ?></button>
  <div id="myDropdown" class="dropdown-content">

    <a href="?lang=en">English</a>
    <a href="?lang=fi">Finnish</a>
    <a href="?lang=es">Spanish</a>
  </div>

</div>

<ul id="nav" class="nav">
 <li class="active"><a id="home" href="homePage.php"><?php echo htmlspecialchars($lang['home']); ?></a></li>
 <li><a id="menu" href="aboutUs.php"><?php echo htmlspecialchars($lang['aboutus']); ?></a></li>
 <li><a id="menu" href="saunas.php"><?php echo htmlspecialchars($lang['saunas']); ?></a></li>
 <li><a id="menu" href="faq.php"><?php echo htmlspecialchars($lang['faq']); ?></a></li>
 <li><a id="menu" href="#"><?php echo htmlspecialchars($lang['login']); ?></a></li>
</ul>
