<?php
  //include 'database/db.php';

?>
<!DOCTYPE html>
<html lang="en">
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
  <!-- Facebook Pixel. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eLubuto: Home</title>
    <meta name="facebook-domain-verification" content="5fda5ik0wro46wbtbl2dm2feap5r5f" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pagination.css">
    <meta name="description" content="Zambia's first one stop online marketplace.">
      
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="css/blackfriday.css">

    <script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
    <script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
    <script data-ad-client="ca-pub-8702097203886944" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Google adsence -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9736804799544500"
       crossorigin="anonymous"></script>
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
                  <button class="btn" type="submit"> <a href="signup.php" style="color: #fff;">Create Account</a> </button>
              </li>
            </ul>
        </div>
    </nav>

    <!-- header -->
  
    <section class="main">
      <div class="main-content">
        <div class="sidenav">
          <?php include "includes/sidebar.php";?>
        </div>
        <div class="middle">
          <div class="middle-main">
            <div class="banner">
              <div class="banner-img">
                <div class="slideshow-container">
                        <div class="mySlides fade">
                          <img src="images/online-shopping-on-phone-buy-sell-business-digital-web-banner-application-money-advertising-payment-ecommerce-illustration-search-vector.png" style="">
                        </div>
                      
                      
                </div>
                    <div style="text-align:center; display: none">
                      <span class="dot"></span>
                      <span class="dot"></span>
                      <span class="dot"></span>
                    </div>
                              <!-- this connects to the slideshow image js file -->
                              <script src="js/slide.js"></script>

<!-- new slide-->

</div>
              <div class="search-mobile">
                <form action="search.php" method="GET">
                  <input type="text"  placeholder="What are you looking for..." name="search" required="">
                  <button type="submit" name="submit"><i class="fa fa-search"></i></button>
              </div>

              <!-- Search auto-complete for mobile -->
              <script type="text/javascript" src="js/search-mobile.js"></script>

              </div>
              
            </div>
            <div class="products">
              <div class="products-main">
                <?php //include 'includes/black-friday.php'; ?>
                <div class="featured-products">


                  <div class="mini-header">
                    <h2>All Products</h2>

                  </div>
                                    <a href="product-details.php?pid='.$prodid.'">
                                      <div class="products-details">
                                        <div class="prod-img">
                                          <img src="reservation/products/1400x1050iphone-15-pro-yuksek-kaliteli-render-goruntuleri-paylasildi.png" alt="">
                                        </div>
                                        <div class="row">
                                          <div class="details">
                                            <span>iPhone 15 Pro Max</span>
                                          </div>
                                          <div class="price">ZMW 25,000</div>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="product-details.php?pid='.$prodid.'">
                                      <div class="products-details">
                                        <div class="prod-img">
                                          <img src="reservation/products/Air-Jordan-16-Cherrywood-Sneaker-Talk.png" alt="">
                                        </div>
                                        <div class="row">
                                          <div class="details">
                                            <span>Air Jordan 6</span>
                                          </div>
                                          <div class="price">ZMW 960</div>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="product-details.php?pid='.$prodid.'">
                                      <div class="products-details">
                                        <div class="prod-img">
                                          <img src="reservation/products/images (9).png" alt="">
                                        </div>
                                        <div class="row">
                                          <div class="details">
                                            <span>Hoodie</span>
                                          </div>
                                          <div class="price">ZMW 2350</div>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="product-details.php?pid='.$prodid.'">
                                      <div class="products-details">
                                        <div class="prod-img">
                                          <img src="reservation/products/apple_macbook_pro_14_inch_silicon_2022_in_official_design_3d_model_c4d_max_obj_fbx_ma_lwo_3ds_3dm_stl_4568794_o.png" alt="">
                                        </div>
                                        <div class="row">
                                          <div class="details">
                                            <span>MacBook Air</span>
                                          </div>
                                          <div class="price">ZMW 14,000</div>
                                        </div>
                                      </div>
                                    </a>
                                    
                </div>

               
                

                <!-- Home Appliances -->

                

               

            </div>
        </div>










      </div><!---->

                <div class="footer">
                  <div class="footer-main">
                    <br>
                    <div class="section">
                      
                      
                    </div> <br><br>
                    <p style="float:left; width:100%;">We accept the following payment methods:</p>
                    <p style="float:left; width:100%;">
                      <img src="https://i0.wp.com/www.zambianobserver.com/wp-content/uploads/2017/07/Screen_shot_2011-04-15_at_22.04.12.png?fit=500%2C433&ssl=1" alt="" width="35px;">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/9/93/New-mtn-logo.jpg" width="30px;" alt="">
                      <img src="https://themillionair.com/wp-content/uploads/2020/08/How-to-Become-An-Airtel-Money-Agent.png" width="30px;" alt="">
                    </p> <br><br><br> <br>
                     <p style="float:left; width:100%;"><a href="#">User Agreement</a> | <a href="#">Privacy Policy</a> | <a href="#">Listing Policy</a> | <a href="#">Payment Policy</a></p>

                    <p style="float:left; width:100%;">Copyright &copy; 2024- <?php echo date('Y');?> </p> <br> <br><br><br>

                    <div class="cookie-container">
                    <p>

                      We use cookies in this website to give you the best experience on our
                      site. To find out more, read our
                      <a href="privacy.php">privacy policy</a> and <a href="#">cookie policy</a>.
                    </p>

                    <center><button class="cookie-btn">
                      Accept
                    </button></center>
                  </div>
                    <script src="main.js"></script>
                    <!-- js to open and close the menu -->
                    <script src="js/menu.js"></script>

<button onclick="topFunction()" id="myBtn" title="Go to top">
<span class="material-icons">
expand_less
</span>
</button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  mybutton.style.display = "block";
} else {
  mybutton.style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
</script>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript">
    const popupScreen = document.querySelector(".popup-screen");
    const popupBox = document.querySelector(".popup-box");
    const closeBtn = document.querySelector(".close-btn");

    window.addEventListener("load", () => {
      setTimeout(() => {
        popupScreen.classList.add("active");
      }, 2000); //Popup the screen in 02 seconds after the page is loaded.
    });

    closeBtn.addEventListener("click", () => {
      popupScreen.classList.remove("active"); //Close the popup screen on click the close button.
      //Create a cookie for a day (to expire within a day) on click the close button.
      document.cookie = "WebsiteName=eLubuto; max-age=" + 72 * 60 * 60; //1 day = 24 hours = 24*60*60
    });

    //Use the created cookie to hide or show the popup screen.
    const WebsiteCookie = document.cookie.indexOf("WebsiteName=");

    if(WebsiteCookie != -1){
      popupScreen.style.display = "none"; //Hide the popup screen if the cookie is not expired.
    }
    else{
      popupScreen.style.display = "flex"; //Show the popup screen if the cookie is expired.
    }
    </script>


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

  <!--<script src="js/slideshow.js"></script>-->

    <script src="./js/app.js"></script>
</body>

</html>
