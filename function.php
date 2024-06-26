<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "OnlineStore");

    if (isset($_POST['s'])) {
	
        $key = "%{$_POST['s']}%";
    
        $sql = "SELECT * FROM product
                WHERE pname 
                LIKE ? OR pbrand LIKE ?
                LIMIT 5";
    
        $stmt = $conn->prepare($sql);
        $stmt->execute([$key, $key]);
    
        if ($stmt->num_rows > 0) {
            $results = $stmt->fetchAll();
            foreach ($results as $result) { ?>
            <li>
              <a href="<?=$result['pname']?>"><?=$result['pbrand']?></a>
            </li>
           <?php
           }
        }else echo "not found";
    }
    if(isset($_POST["action"])){
        if($_POST["action"] == "register"){
          register();
        }
        else if($_POST["action"] == "login"){
          login();
        }
      }
    
    //REGISTER
    function register(){
        global $conn;
        $name=$_POST["name"];
        $uname=$_POST["uname"];
        $pswd=$_POST["pswd"];
        $pswd2=$_POST["pswd2"];
        
        $user =  $conn->query("SELECT * FROM user WHERE username = '$uname'");
        if($user->num_rows > 0){
            echo "Username Has Already Taken";
            exit;
        }
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            echo "Only letter & space allowed";
        }
        elseif((strlen($uname)<8) || (strlen($uname)>20)){
            echo 'Username must have 8-20 characters.';
        }
        elseif(preg_match("/^[a-zA-Z0-9]{8,20}$/", $uname)){
            echo 'Username must include at least 1 special character (_!@#$%^&*).';
        }
        elseif((strlen($pswd)<8) || (strlen($pswd)>20)){
            echo 'Password must have 8-20 characters.';
        }
        elseif($pswd != $pswd2) {
            echo 'Password are not matching.';
        }
        else {
            $sql = "INSERT INTO user(username, pass, fullname) VALUES ('$uname', '$pswd', '$name')";
            $conn->query($sql);
            echo "Registration Successful";
        }
        
    }

    // LOGIN
    function login(){
        global $conn;
        if (isset($_POST["uname"]) and isset($_POST["pswd"])) {
            $uname = $_POST["uname"];
            $pswd = $_POST["pswd"];

            $user =  $conn->query("SELECT * FROM user WHERE username = '$uname'");
        
            if($user->num_rows > 0){
                $row = $user->fetch_assoc();
                if($pswd == $row['pass']){
                    $_SESSION["login"] = true;
                    $_SESSION["id"] = $row["userid"];
                    echo "Login Successful";
                }
                else{
                    echo "Wrong Password";
                    exit;
                }
            }
            else{
            echo "User Not Registered";
            exit;
            }
        }
        else echo "No data was received";
    }

    // LIVE SEARCH
    
?>