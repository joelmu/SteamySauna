
<?php include "header_menu_bar.php" ?>
<br>
<h2>sql</h2>

<pre>
  CREATE DATABASE sauna;

  GRANT ALL ON sauna.* TO 'webuser'@'localhost' IDENTIFIED BY 'webpass';
  USE sauna;

  CREATE TABLE customers(
  id_customers SMALLINT PRIMARY KEY auto_increment,
  firstname VARCHAR(30),
  lastname VARCHAR(30),
  streetaddress VARCHAR(20),
  phonenumber VARCHAR(20),
  dayofbirth VARCHAR(20)
  ) Engine=InnoDB;

  CREATE TABLE sauna(
  id_sauna SMALLINT PRIMARY KEY auto_increment,
  name VARCHAR(30),
  location VARCHAR(30)
  ) Engine=InnoDB;

  CREATE TABLE reservation(
  id_reservation SMALLINT PRIMARY KEY auto_increment,
  id_customers SMALLINT,
  id_sauna SMALLINT,
  reservation_date DATE,
  FOREIGN KEY (id_sauna) REFERENCES sauna(id_sauna)
    ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (id_customers) REFERENCES customers(id_customers)
    ON DELETE RESTRICT ON UPDATE CASCADE) Engine=InnoDB;

    INSERT INTO customers(firstname,lastname) VALUES('Joe','Smith');

</pre>




<footer>
<?php include "footer.php" ?>
</footer>
