<?php include "../webPage/header_menu_bar.php"; ?>
<h2>Edit customers</h2>
<form class="" action="update_all_customers.php" method="post">
  <table border="0">
    <tr>
      <th>Firstname</th><th>Lastname</th><th>Streetaddress</th><th>Phonenumber</th><th>Day of birth</th>
    </tr>

  <?php
  $myquery="SELECT firstname,lastname,streetaddress,phonenumber,dayofbirth,id_customers FROM customers";
  $customers_data=$db->query($myquery);
  foreach($customers_data as $row) {
    echo '<tr><td><input type="text" name="fn[]" value="'.$row['firstname'].'"/></td>
    <td><input type="text" name="ln[]" value="'.$row['lastname'].'"/></td>
    <td><input type="text" name="ad[]" value="'.$row['streetaddress'].'"/></td>
    <td><input type="text" name="pn[]" value="'.$row['phonenumber'].'"/></td>
    <td><input type="text" name="ob[]" value="'.$row['dayofbirth'].'"/></td>';
    echo '<input type="hidden" name="id[]" value="'.$row['id_customers'].'"/>';
    echo '</tr>';
  }
  ?>
  </table>
  <input type="submit" name="btnUpdateAll" value="Update">
</form>
<?php include "../webPage/footer.php"; ?>
