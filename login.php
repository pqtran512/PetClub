<?php
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./login.css" />
    
</head>
<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="https://cdn-icons-png.flaticon.com/512/9513/9513770.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form>
                        <input type="hidden" id="action" value="login"> 
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" width="20" height="20">
                            </div>
                            <input type="text" id="uname" name="uname" class="form-control input_user" value="" placeholder="username" required>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <img src="https://cdn-icons-png.flaticon.com/512/807/807369.png" width="20" height="20">
                            </div>
                            <input type="password" name="pswd" id="pswd" class="form-control input_pass" value="" placeholder="password" required>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="Submit" onclick="submitData();" class="btn login_btn">Login</button>
                        </div>
                    </form>
                </div>
        
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="index.php?page=register" class="ml-2" style="margin-left: 5px;">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'script.php'; ?>
</body>
</html>