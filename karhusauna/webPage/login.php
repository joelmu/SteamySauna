
<?php include "header_menu_bar.php" ?>
<form class="" action="login.php" method="post">
  <table>
    <tr>
      <td>Username</td><td><input type="text" name="user" value="" required=""></td>
    </tr>
    <tr>
      <td>Password</td><td><input type="password" name="" value="" required=""></td>
    </tr>
    <td></td><td><input type="submit" name="btnlogin" value="Login"></td>
  </table>
</form>
<?php
session_start();
$btn=$_POST['btnlogin'];
if (isset($btn)) {
  $_SESSION['username']=$_POST['user'];
  echo 'Hello '.$_POST ['user'];
}
 ?>
<footer>
<?php include "footer.php" ?>
</footer>
