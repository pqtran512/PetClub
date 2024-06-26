<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./homepage.css" />
  </head>

<body>
  <?php include('navbar.php'); ?>
  <section class="home d-flex align-items-center" >
    <div class="container">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="https://www.gulfshorebusiness.com/wp-content/uploads/2022/06/GettyImages-928648602.jpg"
              class="d-block w-100"
              alt="Banner 1"
            />
            <div class="carousel-caption d-none d-md-block" >
              <h5>Pet food & accessories</h5>
              <p style="font-style: italic;">Your pet never been so styled</p>
              <p><a href="index.php?page=product&ptype='Food'" class="btn btn-primary mt-3 btn-lg" style="font-weight: bold">Buy Now</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="https://critterculture.mblycdn.com/uploads/cc/2023/02/GettyImages-866757656.jpg"
              class="d-block w-100"
              alt="Banner 2"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>The best food for your Dogs & Cats</h5>
              <p style="font-style: italic;">Delicious food made with love</p>
              <p><a href="index.php?page=product&ptype='Food'" class="btn btn-warning mt-3 btn-lg" style="font-weight: bold;">Buy Now</a></p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <?php include('footer.php'); ?>
</body>
</html>