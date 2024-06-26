<?php
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = ($conn->query("SELECT * FROM user WHERE userid = $id"))->fetch_assoc();
}
else{
  echo "No id";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" type="text/css" href="./navbar.css" />
</head>
<body>
  <section class="mynav">
      <nav class="navbar navbar-expand-lg header-nav fixed-top">
        <div class="container-fluid">
          <a class="navbar-logo p-1 ms-3" href="#">
            <img
              src="https://cdn-icons-png.flaticon.com/512/9513/9513770.png"
            />
          </a>
          <a class="navbar-brand ms-2" href="index.php?page=homepage"
            ><span style="color: #dc8ea0">P</span>ets
            <span style="color: #97bfd1">C</span>lub</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-between"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php?page=about">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=product">SHOP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=cart">CART</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=contact">CONTACT</a>
              </li>
              <li class="nav-item">
                <?php if (isset($_SESSION["id"])) { ?>
                  <p>Welcome, <?php echo $user["username"]; ?></p>
                <?php } ?>
              </li>
              <li class="nav-item" >
                <?php 
                  if (!isset($_SESSION["id"])) { 
                    echo "<a class='nav-link'  aria-current='login page' href='index.php?page=login'>LOGIN</a>" ;
                  }
                  else{
                    echo "<a class='nav-link'  aria-current='login page' href='index.php?page=logout'>LOGOUT</a>" ;
                  }
                ?>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </section>
    
</body>
</html>