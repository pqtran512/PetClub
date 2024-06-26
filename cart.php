<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./cart.css" />
</head>
<body>
    <?php include('navbar.php'); ?>
    <section class="mycart h-100 h-custom" style="background-color: #fff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                    <div class="row g-0">
                    <div class="col-lg-8">
                        <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                            <h6 class="mb-0 text-muted">3 items</h6>
                        </div>
                        <hr class="my-4">

                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                            <img
                                src="https://bit.ly/3z72Ydd"
                                class="img-fluid rounded-3" alt="Chicken & Rice Formula Dry Dog Food">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted">Dog Food</h6>
                            <h6 class="text-black mb-0">Chicken & Rice Formula Dry Dog Food</h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                            </button>

                            <input id="form1" min="0" name="quantity" value="1" type="number"
                                class="form-control form-control-sm" />

                            <button class="btn btn-link px-1"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                            </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">$ 59.88</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                            <img
                                src="https://bit.ly/3LhwFxG"
                                class="img-fluid rounded-3" alt="Dental Health Kit with Chicken Flavored Toothpaste">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted">Health supplies</h6>
                            <h6 class="text-black mb-0">Dental Health Kit with Chicken Flavored Toothpaste</h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                            </button>

                            <input id="form1" min="0" name="quantity" value="1" type="number"
                                class="form-control form-control-sm" />

                            <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                            </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">$ 44.00</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                            <img
                                src="https://bit.ly/3pynX7b"
                                class="img-fluid rounded-3" alt="Better Together Elevated Bamboo Diner for Cats">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted">Container</h6>
                            <h6 class="text-black mb-0">Better Together Elevated Bamboo Diner for Cats</h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                            </button>

                            <input id="form1" min="0" name="quantity" value="1" type="number"
                                class="form-control form-control-sm" />

                            <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                            </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">$ 25.99</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="pt-5">
                            <h6 class="mb-0"><a href="index.php?page=homepage" class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 bg-grey">
                        <div class="p-5">
                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                        <hr class="my-4">

                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="text-uppercase">items: 3</h5>
                            <h5>$ 132.00</h5>
                        </div>

                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="text-uppercase">Shipping</h5>
                            <h5>$ 8.00</h5>
                        </div>

                        <!-- <h5 class="text-uppercase mb-3">Give code</h5>

                        <div class="mb-5">
                            <div class="form-outline">
                            <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Examplea2">Enter your code</label>
                            </div>
                        </div> -->

                        <hr class="my-4">

                        <div class="d-flex justify-content-between mb-5">
                            <h5 class="text-uppercase">Total price</h5>
                            <h5>$ 137.00</h5>
                        </div>

                        <button type="button" class="btn btn-dark btn-block btn-lg"
                            data-mdb-ripple-color="dark">CHECKOUT</button>

                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</body>
</html>

