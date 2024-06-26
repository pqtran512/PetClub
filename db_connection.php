<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "OnlineStore";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $conn->query("DROP TABLE IF EXISTS product;");
  $conn->query("CREATE TABLE product (
    pid INT(5) NOT NULL AUTO_INCREMENT,
    pbrand VARCHAR(20) NOT NULL,
    pname VARCHAR(50) NOT NULL,
    pweight VARCHAR(10),
    ptype VARCHAR(20) NOT NULL,
    quantity INT(2),
    price FLOAT(5,2) UNSIGNED NOT NULL,
    animal_type CHAR(1) NOT NULL,
    img VARCHAR(50),
    PRIMARY KEY (pid)
  );");
  $conn->query("CREATE TABLE IF NOT EXISTS user (
    userid INT(8) NOT NULL AUTO_INCREMENT,
    username VARCHAR(20) NOT NULL,
    pass VARCHAR(20) NOT NULL,
    fullname VARCHAR(30) NOT NULL,
    PRIMARY KEY (userid)
  );");
  $conn->query("CREATE TABLE IF NOT EXISTS userproduct (
    pid INT(5) NOT NULL,
    quantity INT(2) NOT NULL,
    storeid INT(5) NOT NULL,
    u_id INT(8) NOT NULL,
    uname VARCHAR(20) NOT NULL,
    PRIMARY KEY (pid)
  );");
  # Dog Food
  $conn->query("INSERT INTO product(pbrand, pname, pweight, ptype, quantity, price, animal_type, img) VALUES ('Purina ONE', 'Chicken & Rice Formula Dry Dog Food', '40 LBS','Food', 120, 59.88, '1', 'https://bit.ly/3z72Ydd')");
  $conn->query("INSERT INTO product(pbrand, pname, pweight, ptype, quantity, price, animal_type, img) VALUES ('Purina Pro Plan', 'Sensitive Skin and Stomach Salmon & Rice Formula Dry Dog Food', '40 LBS','Food', 100, 91.99, '1', 'https://bit.ly/3ndf8yg')");
  $conn->query("INSERT INTO product(pbrand, pname, pweight, ptype, quantity, price, animal_type, img) VALUES ('WholeHearted', 'Breed Health Nutrition Labrador Retriever Adult Dry Dog Food', '30 LBS', 'Food', 70, 109.99, '1', 'https://bit.ly/40EqUQC')");
  # Cat Food
  $conn->query("INSERT INTO product(pbrand, pname, pweight, ptype, quantity, price, animal_type, img) VALUES ('Wellness', 'Natural Grain Free Flaked Skipjack Tuna & Salmon Wet Cat Food', '5.3 OZ','Food', 80, 3.50, '2', 'https://bit.ly/42sL29S')");
  $conn->query("INSERT INTO product(pbrand, pname, pweight, ptype, quantity, price, animal_type, img) VALUES ('Sheba', 'Perfect Portions Delicate Salmon, Tender Whitefish & Tuna Entrees Wet Cat Food Variety Pack', '2.64 OZ','Food', 30, 25.98, '2', 'https://bit.ly/41rUJnE')");
  $conn->query("INSERT INTO product(pbrand, pname, pweight, ptype, quantity, price, animal_type, img) VALUES ('Wellness', 'Complete Health Chicken & Turkey Pate Favorites Variety Pack Wet Adult Cat Food', '3 OZ', 'Food', 40, 41.76, '2', 'https://bit.ly/3IpxUdN')");

  # Container
  $conn->query("INSERT INTO product(pbrand, pname, ptype, quantity, price, animal_type, img) VALUES ('PetSafe', 'Drinkwell Pet Fountain', 'Container', 20, 45.95, '3', 'https://bit.ly/3oSyZnh')");
  $conn->query("INSERT INTO product(pbrand, pname, ptype, quantity, price, animal_type, img) VALUES ('EveryYay', 'White Stainless-Steel Bowl', 'Container', 25, 7.99, '3', 'https://bit.ly/41ONw1W')");
  $conn->query("INSERT INTO product(pbrand, pname, ptype, quantity, price, animal_type, img) VALUES ('EveryYay', 'Better Together Elevated Bamboo Diner for Cats', 'Container', 20, 30.24, '2', 'https://bit.ly/3pynX7b')");

  # House
  $conn->query("INSERT INTO product(pbrand, pname, ptype, quantity, price, animal_type, img) VALUES ('EveryYay', 'Cozy Cuddler Bed', 'House', 30, 16.00, '3', 'https://bit.ly/3oHqhbk')");
  $conn->query("INSERT INTO product(pbrand, pname, ptype, quantity, price, animal_type, img) VALUES ('Sherpa', 'Black Original Deluxe Airline Approved & Guaranteed On Board Travel Pet Carrier', 'House', 60, 35.29, '3', 'https://bit.ly/427CJzQ')");
  $conn->query("INSERT INTO product(pbrand, pname, ptype, quantity, price, animal_type, img) VALUES ('EveryYay', 'Snooze Fest Grey Play Cave Cat Bed With Toy', 'House', 20, 29.99, '2', 'https://bit.ly/3o0o9eN')");
  $conn->query("INSERT INTO product(pbrand, pname, ptype, quantity, price, animal_type, img) VALUES ('EveryYay', 'Snooze Fest Mauve Rectangle Lounger Bed', 'House', 45, 14.99, '3', 'https://bit.ly/3o0o9eN')");
  
  # Clothes
  $conn->query("INSERT INTO product(pbrand, pname, ptype, quantity, price, animal_type, img) VALUES ('Youly', 'Coolest T-shirt', 'Clothes', 30, 10.00, '3', 'https://bit.ly/3VfniD9')");
  $conn->query("INSERT INTO product(pbrand, pname, ptype, quantity, price, animal_type, img) VALUES ('Youly', 'Cute Beanie', 'Clothes', 30, 6.50, '3', 'https://bit.ly/3LzkL3E')");

  # Medical
  $conn->query("INSERT INTO product(pbrand, pname, pweight, ptype, quantity, price, animal_type, img) VALUES ('Sentry', 'Flea & Tick Shampoo for Cats & Kittens', '12 FZ', 'Medical', 30, 10.00, '3', 'https://bit.ly/3LFRtQZ')"); 
  $conn->query("INSERT INTO product(pbrand, pname, pweight, ptype, quantity, price, animal_type, img) VALUES ('Well & Good', 'Dental Health Kit with Chicken Flavored Toothpaste', '2.5 OZ', 'Medical', 21, 10.00, '3', 'https://bit.ly/3LhwFxG')");

  # Training 
  $conn->query("INSERT INTO product(pbrand, pname, pweight, ptype, quantity, price, animal_type, img) VALUES ('Blue-Buffalo', 'Blue Bits Tender Beef Soft-Moist Training Dog Treats', '4 OZ', 'Training', 15, 6.98, '1', 'https://bit.ly/41M7dre')"); 
  $conn->query("INSERT INTO product(pbrand, pname, pweight, ptype, quantity, price, animal_type, img) VALUES ('Inaba', 'Churu Chicken Variety Pack Cat Treats', '25 OZ', 'Training', 20, 32.59, '2', 'https://bit.ly/3Vimcqy')"); 
  $conn->query("INSERT INTO product(pbrand, pname, ptype, quantity, price, animal_type, img) VALUES ('KONG', 'Classic Dog Toy', 'Training', 20, 7.99, '1', 'https://bit.ly/40P2ALH')");

  $conn -> close();
?>