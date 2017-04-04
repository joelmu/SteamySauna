<?php
include "../sql/connection.php";
  $add=$db->prepare("INSERT INTO customers (firstname,lastname,streetaddress,phonenumber,dayofbirth) VALUES(:fn,:ln,:ad,:pn,:ob)");
  $add->bindParam(':fn',$fn);
  $add->bindParam(':ln',$ln);
  $add->bindParam(':ad',$ad);
  $add->bindParam(':pn',$pn);
  $add->bindParam(':ob',$ob);
  $fn=$_POST['fn'];
  $ln=$_POST['ln'];
  $ad=$_POST['ad'];
  $pn=$_POST['pn'];
  $ob=$_POST['ob'];
  $add->execute();
header('Location: customer.php');
 ?>
