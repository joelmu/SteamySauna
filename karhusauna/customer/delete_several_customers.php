<?php include "../webPage/header_menu_bar.php"; ?>
<h2>Delete Selected Customers</h2>
<form class="" action="delete_chosen.php" method="post">
<table border="1">
  <tr>
    <TH>Firstname</TH><TH>Lastname</TH><TH>Streetaddress</TH><th>Phonenumber</th><th>Day of birth</th><TH>Choose</TH>
  </tr>

<?php
$myquery="SELECT firstname,lastname,streetaddress,phonenumber,dayofbirth,id_customers FROM customers";
$customers_data=$db->query($myquery);
foreach ($customers_data as $row) {
  echo '<tr><td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td><td>'.$row['streetaddress'].'</td><td>'.$row['phonenumber'].'</td><td>'.$row['dayofbirth'].'</td>';
  echo '<td><input type="Checkbox" name="chosen[]" value="'.$row['id_customers'].'" /></td>';
  echo '</tr>';
}
?>
</table>
<input type="submit" name="deleteSelected" value="Delete">
</form>
<?php include "../webPage/footer.php"; ?>
