<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction Page</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./about.css" />
</head>
<body>
    <?php include('navbar.php'); ?>
    <section class="myabout">
        <div class="bg-image" style="background-image: url('https://www.animates.co.nz/media/wysiwyg/Aboutus/F23FA/AboutUs_Landing_Page_V3-2.jpg'); width: 100%;height: 500px;background-size: cover;">
            <div class="title">About us</div>
        </div>
        <div class="myHeader">
            <hr style="color: orange;height:2px;margin: 15 auto;">
            <h5 style="font-weight:bold;text-align:center;">Our purpose is to make our world a happier place through the love of pets</h5>
            <hr style="color: orange;height:2px;margin: 15 auto;">
            <div>
                <p style="text-align: justify;">At <span style="color: #dc8ea0">P</span>ets<span style="color: #97bfd1">C</span>lub, our belief is that life is better with pets. We understand the joy when your dog greets you at the door or the comfort of your cat curled up on your lap. We understand the unconditional love that pets bring to our lives, each and every day.<br>We've dedicated ourselves to creating an awesome experience for people and their pets - to provide our customers with everything they need to become great pet parents, alongside supporting the pet community with fundraising, donations and local events.</p>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
</body>
</html>