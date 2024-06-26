<?php
include 'db_connection.php';
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetClub</title>
</head>
<body>
	
	<?php
	if (isset($_GET['page'])) {
		$getpage=$_GET['page'];
		if($getpage=="register") {include "register.php";}
		elseif($getpage=="login") {include "login.php";}
		elseif($getpage=="about") {include "about.php";}
		elseif($getpage=="product") {include "product.php";}
		elseif($getpage=="contact") {include "contact.php";}
		elseif($getpage=="cart") {include "cart.php";}
		else {include "homepage.php";}
	}
	else {
		include "homepage.php";
	}
	?>
	
</body>
</html>


