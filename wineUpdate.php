<?php
//wineUpdate.php

require_once 'dbGeneral.php';


$id = htmlentities($_POST["wineid"]);
$year = htmlentities($_POST["year"]);
$name = htmlentities($_POST["name"]);
$price = htmlentities($_POST["price"]);

	$query = "INSERT INTO Wines (ID, YEAR, NAME, PRICE) VALUES ('$id', '$year', '$name', '$price')
";
	$connect = new dbGeneral($query);
	$connect->parse();
	$event = $connect->exe();


echo " you have succesfully Added " . '<br />';
echo $year . ' ' . $name . ' ' . " To the database" . '<br />';
echo "For the price of " . '$'.$price ;
?>


<?php
		require_once 'dbGeneral.php';
		$query = "SELECT * FROM Wines";
		$connect = new dbGeneral($query);
		$connect->parse();
		$event = $connect->exe();

	?>
	 <div id="content">

	 	<hr>
	 	<br />
	 	<h3> Updated Database Results<h3>

    <table>
      <?php while($row = oci_fetch_assoc($event)) { ?>
      <tr>
        <td><?php echo $row['YEAR']; ?></td>
        <td><?php echo $row['NAME']; ?></td>
        <td><?php echo $row['PRICE']; ?></td>

        

      </tr>
      <?php } ?>
    </table>

   </div>