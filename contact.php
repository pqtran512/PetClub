
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./contact.css" />
</head>
<body>
    <?php include('navbar.php'); ?>
    <section class="mycontact">
        <div class="my-container">
            <div class="info">
                <h3 style="margin-bottom: 20px;">CONTACT US</h3>
                <h4><span style="color: #dc8ea0">P</span>ets<span style="color: #97bfd1">C</span>lub</h4>
                <p>Av Edilberto Ramos 1377, Lima 15806, Peru</p>
                <div>
                    <img class="icon" src="https://cdn.onlinewebfonts.com/svg/img_267724.png" width="19" height="18" style="margin-right: 9px;"/>
                    <div class="phone-num">999-999-9999</div>
                </div>
                <p  class="phone-num" style="margin-left:19px;margin-top:5px;">+91 9987654321</p>
                <div>
                    <img class="icon" src="   https://cdn-icons-png.flaticon.com/512/2099/2099199.png " width="19" height="20" style="margin-right: 9px;"/>
                    <div class="phone-num">petclub@gmail.com</div>
                </div>
                <form id="contact-form" class="form-horizontal" role="form">
                    
                    <div class="form-group">
                        <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
                        </div>
                    </div>

                    <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
                    
                    <button class="btn btn-info send-button" id="submit" type="submit" value="SEND">
                        <div class="alt-send-button">
                        <img src="   https://cdn-icons-png.flaticon.com/512/9333/9333991.png " width="23" height="22" alt="" title="" class="img-small" style="padding-bottom: 2px;"><span class="send-text">SEND</span>
                        </div>
                    
                    </button>
                    
                    </form>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.7055009982228!2d-76.96111312522642!3d-12.132291188111251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b9b481d45555%3A0x92f1927e0b11575b!2sPET%20CLUB!5e0!3m2!1svi!2s!4v1682997763837!5m2!1svi!2s" width="45%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <?php include('footer.php'); ?>
</body>
</html>