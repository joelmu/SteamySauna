<?php include "../webPage/header_menu_bar.php"; ?>
<h2>DELETE customer?</h2>
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
<label for="fn">Fistname</label><br />
<input type="text" name="fn" id="fn" value="<?php echo $fn; ?>" disabled><br>

<label for="ln">Lastname</label><br />
<input type="text" name="ln" id="ln" value="<?php echo $ln; ?>" disabled><br>

<label for="ad">Streetaddress</label><br />
<input type="text" name="ad" id="ad" value="<?php echo $st; ?>" disabled><br>

<label for="pn">Phonenumber</label><br />
<input type="text" name="pn" id="pn" value="<?php echo $pn; ?>" disabled><br>

<label for="ob">Day of birth</label><br />
<input type="text" name="ob" id="ob" value="<?php echo $ob; ?>" disabled><br>

<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >
<br/>
<label>Do you really want to delete this customer?</label>
<br/>
<input type="submit" name="btnDelete" value="Delete">

<a href="customer.php"><button>Cancel</button></a>
</form>
<?php include "../webPage/footer.php"; ?>
