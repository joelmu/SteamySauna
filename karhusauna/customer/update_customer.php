<?php include "../webPage/header_menu_bar.php"; ?>
<h2>Edit Customers</h2>
<?php
$sql="SELECT * FROM customers WHERE id_customers=".$_GET['id'];
$result=$db->query($sql);
$theArray = $result->fetch(PDO::FETCH_ASSOC);
$fn=$theArray['firstname'];
$ln=$theArray['lastname'];
$st=$theArray['streetaddress'];
$pn=$theArray['phonenumber'];
$ob=$theArray['dayofbirth'];
 ?>
 <form class="" action="customer.php" method="post">
 <label for="fn">Firstname</label><br>
 <input type="text" name="fn" id="fn" value="<?php echo $fn; ?>" required=""><br>

 <label for="ln">Lastname</label><br>
 <input type="text" name="ln" id="ln" value="<?php echo $ln; ?>" required=""><br>

 <label for="ad">Streetaddresst</label><br>
 <input type="text" name="ad" id="ad" value="<?php echo $st; ?>"><br>

 <label for="pn">Phonenumber</label><br />
 <input type="text" name="pn" id="pn" value="<?php echo $pn; ?>"><br>

 <label for="ob">Day of birth</label><br />
 <input type="text" name="ob" id="ob" value="<?php echo $ob; ?>"><br>

<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
 <input type="submit" name="btnEdit" value="Update">
 </form>
<?php include "../webPage/footer.php"; ?>
