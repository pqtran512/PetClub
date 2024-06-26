<script>
    // duyệt tất cả tấm ảnh cần lazy-load
    const lazyImages = document.querySelectorAll('[lazy]');

    // chờ các tấm ảnh này xuất hiện trên màn hình
    const lazyImageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        // tấm ảnh này đã xuất hiện trên màn hình
        if (entry.isIntersecting) {
        const lazyImage = entry.target;
        const src = lazyImage.dataset.src;

        lazyImage.tagName.toLowerCase() === 'img'
        // <img>: copy data-src sang src
            ? lazyImage.src = src

        // <div>: copy data-src sang background-image
        : lazyImage.style.backgroundImage = "url(\'" + src + "\')";

        // copy xong rồi thì bỏ attribute lazy đi
        lazyImage.removeAttribute('lazy');

        // job done, không cần observe nó nữa
        observer.unobserve(lazyImage);
        }
    });
    });

    // Observe từng tấm ảnh và chờ nó xuất hiện trên màn hình
    lazyImages.forEach((lazyImage) => {
    lazyImageObserver.observe(lazyImage);
    });
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./product.css" />
</head>
<body>
    <?php include('navbar.php'); ?>
    <section class="myproduct">
        <form class="myseacrch" id="form-search" method="GET">
            <div class="search-box">
                <div class="form-group d-flex">
                    <input
                        class="myinput form-control me-2"
                        type="search"
                        id="input" 
                        placeholder="Search . . ."
                        aria-label="Search"
                        
                    />
                    <button class="btn" type="submit">
                        <img src = "https://cdn-icons-png.flaticon.com/512/622/622669.png" width="20" height="20">
                    </button>
                </div>
                <ul class="search-result" id="search-result"></ul>
            </div>
        </form>
        <div class="list-group col-2" style="float: left; margin-left: 30px; margin-top: 90px;">
            <a href="#" class="list-group-item list-group-item-action disabled" style="font-weight: bold; font-size: 17px;">Product Catalog</a>
            <a href="index.php?page=product&ptype='Food'" class="list-group-item list-group-item-action">Food</a>
            <a href="index.php?page=product&ptype='Clothes'" class="list-group-item list-group-item-action">Accessories, Clothes</a>
            <a href="index.php?page=product&ptype='Container'" class="list-group-item list-group-item-action">Bowl, Drinking Cup</a>
            <a href="index.php?page=product&ptype='House'" class="list-group-item list-group-item-action">Crate, House, Bed, Carrier</a>
            <a href="index.php?page=product&ptype='Medical'" class="list-group-item list-group-item-action">Grooming & Health Supplies</a>
            <a href="index.php?page=product&ptype='Training'" class="list-group-item list-group-item-action">Toys, Training Items</a>
        </div>
            
        <div class="grid-container">
            <?php
                if(isset($_GET["ptype"])) {
                    $records = $conn->query("SELECT * FROM product WHERE ptype =".$_GET["ptype"]);
                }
                else {
                    $records = $conn->query("SELECT * FROM product");
                }
                $start = 0;
                $ele_per_page = 9;
                $rowNum = $records->num_rows;
                $pages = ceil($rowNum/$ele_per_page);
                if (isset($_GET['page-nr'])) {
                    $page = $_GET['page-nr'] - 1;
                    $start = $page * $ele_per_page;
                }
                if(isset($_GET["ptype"])) {
                    $result = $conn->query("SELECT * FROM product WHERE ptype =".$_GET["ptype"]."LIMIT $start,$ele_per_page");
                }
                else {
                    $result = $conn->query("SELECT * FROM product LIMIT $start,$ele_per_page");
                }
                
                while($row = $result->fetch_array()) {
                    $id = $row['pid'];
                    $pbrand = $row['pbrand'];
                    $pname = $row['pname'];
                    $pweight = $row['pweight']; 
                    $ptype = $row['ptype'];
                    $animal_type = $row['animal_type'];  
                    $img = $row['img']; 
                    $price = $row['price'];
            ?>
            <div class="grid-item">
                <div class="card">
                    <img class="card-img-top" <?php echo "src=".$img ?> lazy>
                    <div class="card-body">
                        <p class="card-title">
                            <span style="font-weight: bold"><?php echo $pbrand;?></span>
                            <?php echo $pname;
                                if ($pweight != NULL) {
                                    echo ", ".$pweight;
                            }
                            ?>
                        </p>
                        <p class="card-text" style="font-weight: bold">$<?php echo $price;?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div style="width: 100%; display: flex;justify-content: center;">
            <ul class="pagination" >
                <li class="page-item">
                    <a class="page-link" style="background-color: blue;color:white;" href="index.php?page=product<?php if(isset($_GET["ptype"])) {echo "&ptype=".$_GET["ptype"];}?>&page-nr=1">First</a>
                </li>
                <?php
                    if (isset($_GET['page-nr']) && $_GET['page-nr'] > 1) {
                        ?>
                        <li class="page-item"><a class="page-link" href="index.php?page=product&page-nr=<?php echo $_GET['page-nr']-1;?>">Previous</a></li>
                        <?php
                    } else {
                        ?>
                        <li class="page-item"><a class="page-link" href="">Previous</a></li>
                        <?php
                    }
                ?>
                
                <?php
                    for($counter = 1; $counter <= $pages; $counter++) {
                        ?>
                        <li class="page-item"><a class="page-link" href="index.php?page=product&page-nr=<?php echo $counter ?>"><?php echo $counter ?></a></li>
                        <?php
                    } 
                ?>

                <?php
                    if (!isset($_GET['page-nr'])) {
                        ?>
                        <li class="page-item"><a class="page-link" href="index.php?page=product&page-nr=2">Next</a></li>
                        <?php
                    } else {
                        if ($_GET['page-nr'] >= $pages) {
                            ?> 
                            <li class="page-item"><a class="page-link" href="">Next</a></li>
                            <?php
                        } else {
                            ?> 
                            <li class="page-item"><a class="page-link" href="index.php?page=product&page-nr=<?php echo $_GET['page-nr']+1; ?>">Next</a></li>
                            <?php
                        }
                    }
                ?>
                
                <li class="page-item"><a class="page-link" style="background-color: blue;color:white;" href="index.php?page=product<?php if(isset($_GET["ptype"])) {echo "&ptype=".$_GET["ptype"];}?>&page-nr=<?php echo $pages ?>">Last</a></li>
            </ul>
        </div>
    </section>
    <?php include('footer.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            function fetchData(){
            var s = $("#input").val();

            if (s == '') {
                $('#search-result').css('display', 'none');
            }
            $.post("function.php", 
                    {
                    s:s
                    },
                    function(data, status){
                        if (data != "not found") {
                        $('#search-result').css('display', 'block');
                        $('#search-result').html(data);
                        }
                    });
            }
            $('#input').on('input', fetchData);
            $("body").on('click', () => {
            $('#search-result').css('display', 'none');
            });
            $('#input').on('click', fetchData);
        });
    </script>
</body>
</html>
