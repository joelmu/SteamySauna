<?php
if (isset($_POST['btnAdd'])){
  $add=$db->prepare("INSERT INTO customers (firstname,lastname,streetaddress,phonenumber,dayofbirth) VALUES(:fn,:ln,:ad,:pn,:dob)");
  $add->bindParam(':fn',$fn);
  $add->bindParam(':ln',$ln);
  $add->bindParam(':ad',$ad);
  $add->bindParam(':pn',$pn);
  $add->bindParam(':dob',$dob);
  $fn=$_POST['fn'];
  $ln=$_POST['ln'];
  $ad=$_POST['ad'];
  $ad=$_POST['pn'];
  $ad=$_POST['dob'];
  $add->execute();
}
if (isset($_POST['btnEdit'])){
  $add=$db->prepare("UPDATE customers SET firstname=:fn,lastname=:ln,streetaddress=:ad,pn=phonenumber,dob=dayofbirth WHERE id_customers=:id");
  $add->bindParam(':fn',$fn);
  $add->bindParam(':ln',$ln);
  $add->bindParam(':ad',$ad);
  $add->bindParam(':pn',$pn);
  $add->bindParam(':dob',$dob);
  $add->bindParam(':id',$id);
  $fn=$_POST['fn'];
  $ln=$_POST['ln'];
  $ad=$_POST['ad'];
  $ad=$_POST['pn'];
  $ad=$_POST['dob'];
  $id=$_POST['id'];
  $add->execute();
}
if (isset($_POST['btnDelete'])){
  $delete = $db->prepare("DELETE FROM customers WHERE id_customers = :id");
      $delete->bindParam(':id', $id);
      $id = $_POST['id'];
      $delete->execute();
}
 ?>

 <?php include "../webPage/header_menu_bar.php" ?>
<h2>Customers</h2>
<table border="1">
  <tr>
    <th>Firstname</th><th>Lastname</th><th>Streetaddress</th><th>Phonenumber</th><th>Day of birth</th><th>Choose</th>
  </tr>

<?php
$myquery="SELECT firstname,lastname,streetaddress,phonenumber,dayofbirthid_customers FROM customers";
$customers_data=$db->query($myquery);
foreach($customers_data as $row) {
  echo '<tr><td>'.$row['firstname'].'</td><td> '.$row['lastname'].'</td><td> '.$row['streetaddress'].'</td><td> '.$row['phonenumber'].'</td><td> '.$row['dayofbirth'].'</td>';
  echo '<td><a href="update_customer.php?id='.$row['id_customers'].'"><button>Update</button></a></td>';
  echo '<td><a href="delete_customer.php?id='.$row['id_customers'].'"><button>Delete</button></a></td>';
 echo '</tr>';
}
?>
</table>








<footer>
<?php include "footer.php" ?>
</footer>
