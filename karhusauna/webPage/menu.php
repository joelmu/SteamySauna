<head>
  <title>Karhusauna</title>
  <?php
  include_once("../languages/lang.php"); ?>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="languages">
  <button class="dropbtn"><?php echo htmlspecialchars($lang['language']); ?></button>
  <div class="dropdown-content">

    <a href="homePage.php?lang=en">english</a>
    <a href="homePage.php?lang=fi">finnish</a>
    <a href="homePage.php?lang=es">spanish</a>
  </div> 

</div>
<ul id="nav">
 <li><a id="home" href="homePage.php" class="active"><?php echo htmlspecialchars($lang['home']); ?></a></li>
 <li><a id="menu" href="aboutUs.php"><?php echo htmlspecialchars($lang['aboutus']); ?></a></li>
 <li><a id="menu" href="#"><?php echo htmlspecialchars($lang['saunas']); ?></a></li>
 <li><a id="menu" href="#"><?php echo htmlspecialchars($lang['faq']); ?></a></li>
 <li><a id="menu" href="#"><?php echo htmlspecialchars($lang['login']); ?></a></li>
</ul>
