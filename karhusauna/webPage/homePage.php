<head>
  <title>Karhusauna</title>
  <?php
  include_once("../languages/lang.php"); ?>

</head>
<body>
<a href="homePage.php?lang=en">english</a>
<a href="homePage.php?lang=fi">finnish</a>
<a href="homePage.php?lang=es">spanish</a>
<ul>
 <li><a href="#"><?php echo htmlspecialchars($lang['home']); ?></a></li>
 <li><a href="#"><?php echo htmlspecialchars($lang['services']); ?></a></li>
 <li><a href="#"><?php echo htmlspecialchars($lang['aboutus']); ?></a></li>
 <li><a href="#"><?php echo htmlspecialchars($lang['contacts']); ?></a></li>
</ul>
</body>
