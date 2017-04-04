<?php
include "../sql/connection.php";
$id=$_POST['id'];
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$ad=$_POST['ad'];
$pn=$_POST['pn'];
$ob=$_POST['ob'];
//calculate the amount of rows
$rows=0;
foreach ($id as $row) {
  $rows++;
}
//update the data
for($x=0; $x<=$rows; $x++) {
  $add=$db->prepare("UPDATE customers SET firstname=:fn,lastname=:ln,streetaddress=:ad,phonenumber=:pn,dayofbirth=:ob WHERE id_customers=:id");
  $add->bindParam(':fn',$fn[$x]);
  $add->bindParam(':ln',$ln[$x]);
  $add->bindParam(':ad',$ad[$x]);
  $add->bindParam(':pn',$pn[$x]);
  $add->bindParam(':ob',$ob[$x]);
  $add->bindParam(':id',$id[$x]);
  $add->execute();
}
header('Location: customer.php');
 ?>
