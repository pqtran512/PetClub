
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
    <title>Register</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css" >
    .message{color: #ff0000; }
    </style>
</head>
<body>
    <section class="vh-100" style="background-color: #60a3bc;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                        <p class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up to enjoy membership discounts on purchases</p>

                        <form class="needs-validation mx-1 mx-md-4" action="" method= "post" >
                            <input type="hidden" id="action" value="register">
                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <label class="form-label" for="form3Example1c">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required/>
                                    <?php if (isset($code) && $code == 0) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <label class="form-label" for="form3Example3c">Username</label>
                                    <input type="text" class="form-control" id="uname" name="uname" required/>
                                    <?php if (isset($code) && $code == 1) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <label class="form-label" for="form3Example4c">Password</label>
                                    <input type="password" class="form-control" id="pswd" name="pswd" required/>
                                    <?php if (isset($code) && $code == 2) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <label class="form-label" for="form3Example4cd">Confirm password</label>
                                    <input type="password" class="form-control" id="pswd2" name="pswd2" required/>
                                    <?php if (isset($code) && $code == 3) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button id="btn-submit" onclick="submitData();" type="submit" name="Submit" class="btn btn-primary btn-lg">Register</button>
                            </div>

                        </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                        <img src="https://www.poderdascores.mundobic.com.br/wp-content/uploads/2021/01/GettyImages-511804963.jpg"
                        class="img-fluid" alt="Sample image">
                    </div>
                    <div><a href="index.php?page=login">Back to login</a></div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <?php
        require 'script.php'; 
    ?>
</body>
</html>