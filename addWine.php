
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>MadViolets</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="admin.html">MIS 5650</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="ourstory.html">Our Story</a></li>
                <li><a href="shop.html">shop</a></li>
               <!--  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a> -->
                 
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <!-- Here is whre we will connect to the database to list the wines and also add them -->

		<?php
		require_once 'dbGeneral.php';
		$query = "SELECT * FROM Wines";
		$connect = new dbGeneral($query);
		$connect->parse();
		$event = $connect->exe();

		// while ($row = oci_fetch_assoc($event))
		// {
		//     echo  $row['YEAR'];
		//     echo ' ' . $row['NAME'] . $row['PRICE'] . '<br /> ';
		// }
	?>
	<br />
	<br />
	<br />
	<br />
		<div class="container">
		  <h2>Wine Entry Database</h2>
		  <form method = "post" action="wineUpdate.php">
		    <div class="form-group">
		      <label for="wineid">Wine ID:</label>
		      <input type="text" class="form-control" id="wineid" name="wineid" placeholder="Wine ID">
		    </div>
		    <div class="form-group">
		      <label for="year">Year make:</label>
		      <input type="text" class="form-control" name ="year" id="year" placeholder="Enter Year make">
		    </div>
		      <div class="form-group">
		      <label for="name">Label Name:</label>
		      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Label Name">
		    </div>
		      <div class="form-group">
		      <label for="price">Label Price:</label>
		      <input type="text" class="form-control" name="price" id="price" placeholder="Enter Label Price">
		    </div>
		   
		    <button type="submit" class="btn btn-default">Add to Database</button>
		  </form>
		</div>


		
		 <div id="content">

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

	</body>
</html>