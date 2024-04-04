<?php
  //include 'database/db.php';
  /*
  To be used when linking product
   $bid = $_GET['pid'];
  if(!empty($prodid)){
  $sqlSelectSpecProd = "SELECT * FROM products WHERE id='$bid'";
  $result = mysqli_query($conn, $sqlSelectSpecProd);
  $getProdInfo = mysqli_fetch_array($result);
  $prodname = $getProdInfo["name"];
  $prodcat = $getProdInfo["category"];
  $prodprice = $getProdInfo["price"];
  $proddesc = $getProdInfo["description"];
  $date = $getProdInfo['date'];
  $status = $getProdInfo['status'];
  $userid = $getProdInfo['uid'];
}
  */
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169443277-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-169443277-1');
    </script>
    <!-- Facebook Pixel -->
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '236690391925311');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=236690391925311&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Facebook Pixel -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/stores.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="css/product_details.css">
    <meta name="description" content="<?php

    if(!empty($prodid)){
    $sqlSelectSpecProd = "SELECT * FROM stores_products WHERE id='$bid'";
    $result = mysqli_query($conn, $sqlSelectSpecProd);
    $getProdInfo = mysqli_fetch_array($result);
    $prodname = $getProdInfo["name"];
    $prodcat = $getProdInfo["category"];
    $prodprice = $getProdInfo["price"];
    $proddesc = $getProdInfo["description"];
    $date = $getProdInfo['date'];
    $status = $getProdInfo['status'];
    $userid = $getProdInfo['uid'];

    echo $proddesc;
  }

    ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- Google adsence -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9736804799544500"
     crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="css/modal.css">
  </head>
  <body class="mobile">
    <nav>
        <div class="container nav-wrapper">
            <div class="brand">
              <a href="index.php">
              <img src="images/logo.png" width="100" height="100" alt="">
                </a>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-list">
            <li><a href="about.php">About</a></li>
                <li><a href="login.php">Login</a></li>
                <li>
                    <button class="btn">Create Account</button>
                </li>
            </ul>
        </div>
    </nav>

      <section class="product-details">
        <div class="product-details-main-content">
          <div class="categorylist">
            <div class="categorylist-main">
              <p>Listed in category:
                <?php
                /*$sqlProducts = "SELECT * FROM products WHERE id='$bid'";
                $result = mysqli_query($conn, $sqlProducts);
                $resultCheck = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                  $pid = $row['id'];
                  $category = $row['category'];
                  echo '

                  <a href="category.php?filter='.$category.'">'.$category.'</a> | <a href="#">'.$row['product_name'].'</a>
                  ';
                }*/
                ?>
              </p>
            </div>
          </div>
          <div class="store">
            <div class="store-main">
<div class="middle">
            <div class="middle-main">

                <div class="products">
                  <div class="products-main">
                      <div class="products-images">
                        <div class="products-image-main">

                                <div class="main-image">
                                  <img src="reservation/products/1400x1050iphone-15-pro-yuksek-kaliteli-render-goruntuleri-paylasildi.png" alt="" style="width:100%;cursor:pointer"
                                  onclick="onClick(this)" class="w3-hover-opacity">
                                </div>
                              

                          <!--code for -->
                          <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                          <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                          <div class="w3-modal-content w3-animate-zoom">
                          <img id="img01" style="width:100%;">
                          </div>
                          </div>

                          <script>
                          function onClick(element) {
                          document.getElementById("img01").src = element.src;
                          document.getElementById("modal01").style.display = "block";
                          }
                          </script>


                        </div>
                      </div>
                      <div class="products-content">
                        <div class="products-content-main">
                          <div class="product-details-content">
                            
                                      <center><h2>iPhone 15 Promax</h2></center>
                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eius distinctio rerum perspiciatis vel, explicabo maxime, ex optio adipisci tempore, inventore atque minima debitis saepe beatae quo asperiores hic consectetur.</p>
                                      <div class="all-details">
                                        <div class="price-details">

                                        </div>
                                       
                                      </div>
                                      
                                    
                          </div>
                        </div>
                      </div>

                  </div>

                </div>
            </div>
          </div>
            </div>
          </div>
        </div>
        <!-- colors to add leter in the description

        <li><b>Colors:</b><p>
          <div class="colors">
            <h6 class="red">Red</h6><h6 class="blue">Blue</h6>  <h6 class="white">White</h6><h6 class="black">Black </h6><h6 class="yellow">Yellow </h6><h6 class="green">Green </h6>
          </div>
        </p></li>

      -->
      </section>
      <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f61375a4704467e89ef44ef/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
      <!--End of Tawk.to Script-->
      <?php
      //footer page
      include 'includes/footer.php';
      ?>

      <script>
    //setting default attribute to disabled of minus button
    document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

    //taking value to increment decrement input value
    var valueCount

    //taking price value in variable
    var price = document.getElementById("price").innerText;

    //price calculation function
    function priceTotal() {
        var total = valueCount * price;
        document.getElementById("price").innerText = total
    }

    //plus button
    document.querySelector(".plus-btn").addEventListener("click", function() {
        //getting value of input
        valueCount = document.getElementById("quantity").value;

        //input value increment by 1
        valueCount++;

        //setting increment input value
        document.getElementById("quantity").value = valueCount;

        if (valueCount > 1) {
            document.querySelector(".minus-btn").removeAttribute("disabled");
            document.querySelector(".minus-btn").classList.remove("disabled")
        }

        //calling price function
        priceTotal()
    })

    //plus button
    document.querySelector(".minus-btn").addEventListener("click", function() {
        //getting value of input
        valueCount = document.getElementById("quantity").value;

        //input value increment by 1
        valueCount--;

        //setting increment input value
        document.getElementById("quantity").value = valueCount

        if (valueCount == 1) {
            document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
        }

        //calling price function
        priceTotal()
    })
</script>

      <!-- js to open and close the menu -->
    <script src="js/menu.js"></script>
    <script src="./js/app.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
