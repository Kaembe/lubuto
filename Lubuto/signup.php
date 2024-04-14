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
    <link rel="stylesheet" href="css/buy.css">
    <link rel="stylesheet" href="css/card.css">

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

    <div class="buy">
        <div class="buy-main">
        <div class="container">
            <h1>Create Account</h1>
    <form>
        <div class="form-group">
            <label for="card-number">First and Last name:</label>
            <input type="text" id="card-number" name="card-number" pattern="[0-9]{16}" required>
        </div>
        <div class="form-group">
            <label for="card-number">Phone Number:</label>
            <input type="text" id="card-number" name="card-number" pattern="[0-9]{16}" required>
        </div>
        <div class="form-group">
            <label for="card-number">Password:</label>
            <input type="password" id="card-number" name="card-number" required>
        </div>
        
        <input type="submit" value="Create Account">
    </form>
    <p class="bo">Already have an account? <a href="login.php">Login</a> </p>
</div>
        </div>
    </div>
    <!-- header -->
  

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
