<?php include "../webPage/header_menu_bar.php"; ?>
<h2>Add Customer</h2>
<form class="" action="insert_customers.php" method="post">
<label for="fn">Fistname</label><br />
<input type="text" name="fn" id="fn" value="" required=""><br>

<label for="ln">Lastname</label><br />
<input type="text" name="ln" id="ln" value="" required=""><br>

<label for="ad">Streetaddress</label><br />
<input type="text" name="ad" id="ad" value=""><br>

<label for="pn">Phonenumber</label><br />
<input type="text" name="pn" id="pn" value=""><br>

<label for="ob">Day of birth</label><br />
<input type="text" name="ob" id="ob" value=""><br>


<input type="submit" name="btnAdd" value="Add">
</form>


<?php include "../webPage/footer.php"; ?>
