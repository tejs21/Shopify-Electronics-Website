<?php
    // @include"connection.php";
    @include"loginpage.php";
    session_start();
     $sel= "SELECT * FROM login";
     $query= mysqli_query($conn,$sel);
     $result= mysqli_fetch_assoc($query);
    // echo "welcome".$_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta author="Tejas Bagul">
  <title>Shopify Electronics</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="images\cart.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/home.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
    <style>
      * {box-sizing: border-box}
      body {font-family: Verdana, sans-serif; margin:0}
      .mySlides {display: none}
      img {vertical-align: middle;}
      
      /* Slideshow container */
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }
      
      /* Next & previous buttons */
      .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }
      
      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }
      
      /* On hover, add a black background color with a little bit see-through */
      .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
      }
      
      /* Fading animation */
      .fade {
        animation-name: fade;
        animation-duration: 1.5s;
      }
      
      @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
      }
      
      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
      }

      * {
  box-sizing: border-box;
}

.zoom {
  padding: 50px;
  transition: transform .2s;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.2); 
}

.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  border-radius: 10px;
}

.dropdown {
  position: relative;
  display: inline-block;
  border-radius: 10px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  margin-left:10px;
  min-width: 13px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 10px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-radius: 10px;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
      </style>
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="nav-wrapper">
      <div class="container">

        <h1 class="h1">
          <a href="./index.php" class="logo">Shopi<span class="span">fy</span></a>
        </h1>

        <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>

          <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

          <ul class="navbar-list">

            <li>
              <a href="./index.php" class="navbar-link">Home</a>
            </li>

            <li>
              <a href="#footer" class="navbar-link">About</a>
            </li

            <li>
              <a href="#product" class="navbar-link">Products</a>
            </li>

            <li>
              <a href="#" class="navbar-link">Contact</a>
            </li>
            

          </ul>

        </nav>

        <div class="header-action">

          <div class="search-wrapper" data-search-wrapper>
          <div class="dropdown">
          <button class="dropbtn">Welcome <?php
                // echo $username
              ?> </button>

          <div class="dropdown-content">
    <a href="login.php">Logout</a>
  </div>
</div>
            </button>
          </div>

        </div>

      </div>
    </div>

  </header>


<!--Slideshow-->
<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="zoom">
    <a href="https://www.msi.com/Landing/windows11"><img src="images\msilappy.jpeg" style="width:100%"></a>
    </div>
  </div>
  
  <div class="mySlides fade">
    <div class="zoom">
    <a href="https://www.boat-lifestyle.com/"><img src="images\boat.jpg" style="width:100%"></a>
    </div>
  </div>
  
  <div class="mySlides fade">
    <div class="zoom">
    <a href="https://in.canon/en/consumer/web/camera-catalogue"><img src="images/canon.jpg" style="width:100%"></a>
    </div>
  </div>
  
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
</div>
<br>

<div class="top-bar">
      <div class="container">
<marquee width="100%" direction="right" height="30%">
    <p>Free shipping for all order of &#8377 8,000!!!</p>
    </marquee>
    </div>
    </div>
  <!-- 
    - #ASIDE
  -->

   <aside class="aside">

    <div class="side-panel" data-side-panel="whishlist">

      <button class="panel-close-btn" aria-label="Close whishlist" data-panel-btn="whishlist">
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <ul class="panel-list">

        <li class="panel-item">
          <a href="#" class="panel-card">

            <figure class="item-banner">
              <img src="images\popular products\realme c55\phone 1.png" width="46" height="46" loading="lazy"
                alt="one">
            </figure>

            <div>
              <p class="item-title">Realme C55</p>

              <span class="item-value">&#8377 10,999x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="#" class="panel-card">

            <figure class="item-banner">
              <img src="images\popular products\samsung\phone 1.png" width="46" height="46" loading="lazy" alt="wvvw">
            </figure>

            <div>
              <p class="item-title">Samsung Galaxy S23 </p>

              <span class="item-value">&#8377 1,24,999x2</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="#" class="panel-card">

            <figure class="item-banner">
              <img src="images\popular products\acer lcd\lcd 1.png" width="46" height="46" loading="lazy"
                alt="pne">
            </figure>

            <div>
              <p class="item-title">Acer LED Android TV</p>

              <span class="item-value">&#8377 99,999x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

      </ul>

      <div class="subtotal">
        <p class="subtotal-text">Subtotal:</p>

        <data class="subtotal-value" value="215.14">&#8377 360,996</data>
      </div>

      <a href="#" class="panel-btn">View Whishlist</a>

    </div> 

     <div class="side-panel" data-side-panel="cart">

      <button class="panel-close-btn" aria-label="Close cart" data-panel-btn="cart">
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <ul class="panel-list">

        <li class="panel-item">
          <a href="#" class="panel-card">

            <figure class="item-banner">
              <img src="images\popular products\oneplus lcd\lcd 1.png" width="46" height="46" loading="lazy"
                alt="one">
            </figure>

            <div>
              <p class="item-title">Oneplus U15 Android TV</p>

              <span class="item-value">&#8377 42,999x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="#" class="panel-card">

            <figure class="item-banner">
              <img src="images\popular products\jbl headphone\head 1.png" width="46" height="46" loading="lazy" alt="erev">
            </figure>

            <div>
              <p class="item-title">JBL Tune 760NC</p>

              <span class="item-value">&#8377 5,499x2</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

      </ul>

      <div class="subtotal">
        <p class="subtotal-text">Subtotal:</p>

        <data class="subtotal-value" value="215.14">&#8377 53,997</data>
      </div>

      <a href="#" class="panel-btn">View Cart</a>

    </div> 

  </aside>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">25% off all products.</p>

            <h2 class="h1 hero-title">
              Empower <span class="span">Your  </span>
              Electronic   <span class="span">Lifestyle.</span>
            </h2>

            <p class="hero-text">
              Experience the future today with our premium electronic products.
            </p>

            <a href="#" class="btn btn-primary">
              <span class="span">Shop Now</span>

              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">
            <img src="images\hero.png" width="200" height="250" loading="lazy" alt="hero"
              class="w-10">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service">
        <div class="container">

          <ul class="service-list">

            <li class="service-item">
              <div class="item-icon">
                <img src="./assets/images/service-icon-1.png" width="40" height="40" loading="lazy" alt="Truck icon">
              </div>

              <h3 class="h3 item-title">Free Shipping</h3>
            </li>

            <li class="service-item">
              <div class="item-icon">
                <img src="./assets/images/service-icon-2.png" width="40" height="40" loading="lazy"
                  alt="Payment card icon">
              </div>

              <h3 class="h3 item-title">Safe Payment</h3>
            </li>

            <li class="service-item">
              <div class="item-icon">
                <img src="./assets/images/service-icon-3.png" width="40" height="40" loading="lazy" alt="Helpline icon">
              </div>

              <h3 class="h3 item-title">24/7 Support</h3>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #OFFERS
      -->

      <section class="section offers">
        <div class="container">

          <ul class="offers-list has-scrollbar">

            <li class="offers-item">
              <a href="https://www.flipkart.com/audio-video/~cs-rhcb4z7hcr/pr?sid=0pm&collection-tab-name=Monitor+Headphones&ctx=eyJjYXJkQ29udGV4dCI6eyJhdHRyaWJ1dGVzIjp7InZhbHVlQ2FsbG91dCI6eyJtdWx0aVZhbHVlZEF0dHJpYnV0ZSI6eyJrZXkiOiJ2YWx1ZUNhbGxvdXQiLCJpbmZlcmVuY2VUeXBlIjoiVkFMVUVfQ0FMTE9VVCIsInZhbHVlcyI6WyJVcCB0byA4MCUgb2ZmIl0sInZhbHVlVHlwZSI6Ik1VTFRJX1ZBTFVFRCJ9fSwidGl0bGUiOnsibXVsdGlWYWx1ZWRBdHRyaWJ1dGUiOnsia2V5IjoidGl0bGUiLCJpbmZlcmVuY2VUeXBlIjoiVElUTEUiLCJ2YWx1ZXMiOlsiU3R1ZGlvIEhlYWRwaG9uZXMiXSwidmFsdWVUeXBlIjoiTVVMVElfVkFMVUVEIn19LCJoZXJvUGlkIjp7InNpbmdsZVZhbHVlQXR0cmlidXRlIjp7ImtleSI6Imhlcm9QaWQiLCJpbmZlcmVuY2VUeXBlIjoiUElEIiwidmFsdWUiOiJBQ0NHNUdVNlVUM0haU0pOIiwidmFsdWVUeXBlIjoiU0lOR0xFX1ZBTFVFRCJ9fX19fQ%3D%3D&fm=neo%2Fmerchandising&iid=M_125d6b25-dd03-42f1-a9cb-2ce9a72b08bc_7.GPWXGD7P7DJW&ppt=None&ppn=None&ssid=s3fp7gjfvk0000001685629251126&otracker=hp_omu_Beauty%252C%2BFood%252C%2BToys%2B%2526%2Bmore_1_7.dealCard.OMU_GPWXGD7P7DJW_5&otracker1=hp_omu_PINNED_neo%2Fmerchandising_Beauty%252C%2BFood%252C%2BToys%2B%2526%2Bmore_NA_dealCard_cc_1_NA_view-all_5&cid=GPWXGD7P7DJW" class="offers-card">

                <figure class="card-banner">
                  <img src="images\offer 1.png" width="292" height="230" loading="lazy"
                    alt="phone" class="w-100">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Up To 25% Off</p>

                  <h3 class="h3 card-title">"Headphone Mega Sale!"</h3>

                  <div class="btn btn-primary">Shop Now</div>
                </div>

              </a>
            </li>

            <li class="offers-item">
              <a href="https://www.flipkart.com/laptops/pr?sid=6bo,b5g&otracker=categorytree&fm=neo%2Fmerchandising&iid=M_2f465eb6-f1ac-418e-a621-2a8f5943eb1a_1_372UD5BXDFYS_MC.34WHNYFH5V2Y&otracker=hp_rich_navigation_8_1.navigationCard.RICH_NAVIGATION_Electronics~Laptop%2Band%2BDesktop_34WHNYFH5V2Y&otracker1=hp_rich_navigation_PINNED_neo%2Fmerchandising_NA_NAV_EXPANDABLE_navigationCard_cc_8_L1_view-all&cid=34WHNYFH5V2Y" class="offers-card">

                <figure class="card-banner">
                  <img src="images\offer 2.png" width="336" height="244" loading="lazy"
                    alt="#" class="w-111">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Up To 25% Off</p>

                  <h3 class="h3 card-title">"Incredible Laptop Deals!"</h3>

                  <div class="btn btn-primary">Shop Now</div>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PRODUCT
      -->

      <section id="product" class="section product">
        <div class="container">

          <p class="section-subtitle"> -- Popular Products --</p>

          <h2 class="h2 section-title">All Popular Products</h2>

          

          <ul class="grid-list">

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="images\popular products\realme c55\phone 1.png" width="189" height="189" loading="lazy" alt="Realme C55">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="images\popular products\realme c55\realme.html">Realme C55</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">&#8377 12,999</del>

                  <data class="price" value="85.00">&#8377 10,999</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="images\popular products\samsung\phone 1.png" width="189" height="189" loading="lazy" alt="samsung">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./images/popular products/samsung/samsung.html">SAMSUNG Galaxy S23 Ultra </a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">&#8377 1,49,999</del>

                  <data class="price" value="85.00">&#8377 1,24,999
                  </data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img  src="images\popular products\acer lcd\lcd 1.png" width="189" height="189" loading="lazy"
                    alt="LCD">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./images/popular products/acer lcd/acer.html">acer LED Smart Android TV </a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">&#8377 1,49,999</del>

                  <data class="price" value="85.00">&#8377 99,999</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img style="padding-top: 50px; padding-bottom: 59px;"  src="images\popular products\oneplus lcd\lcd 1.png" width="189" height="189" loading="lazy" alt="oneplus">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="images\popular products\oneplus lcd\oneplus.html">OnePlus U1S  Android TV</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">&#8377 59,999</del>

                  <data class="price" value="85.00">&#8377 42,999</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="images\popular products\jbl headphone\head 1.png" width="189" height="189" loading="lazy"
                    alt="JBL ">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="images\popular products\jbl headphone\jbl.html">JBL Tune 760NC </a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">&#8377 7,999</del>

                  <data class="price" value="85.00">&#8377 5,499</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="images\popular products\sony headphone\head 1.png" width="189" height="189" loading="lazy" alt="sony">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./images/popular products/sony headphone/sony.html">SONY WH-XB910N </a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">&#8377 19,990</del>

                  <data class="price" value="85.00">&#8377 13,990</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="images\popular products\asus laptop\lap 1.png" width="189" height="189" loading="lazy"
                    alt="asus">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./images/popular products/asus laptop/asus.html">ASUS TUF Gaming F15 </a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">&#8377 70,990</del>

                  <data class="price" value="85.00">&#8377 58,990</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="images\popular products\lenovo laptop\lap 1.png" width="189" height="189" loading="lazy"
                    alt="lenovo">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./images/popular products/lenovo laptop/lenovo.html">Lenovo IdeaPad Gaming</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">&#8377 76,990</del>

                  <data class="price" value="85.00">&#8377 51,990</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">

          <p class="section-subtitle">Summer Offer</p>

          <h2 class="h2 section-title">Up To 50% Off All Product.</h2>

          <p class="cta-text">
            It has survived not only five centuries also leaped.
          </p>

          <a href="./shop.html" class="btn btn-primary">
            <span>Shop Now</span>

            <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>





      <!-- 
        - #TOP PRODUCT
      -->

      <section class="section top-product">
        <div class="container">

          <p class="section-subtitle"> -- Trending --</p>

          <h2 class="h2 section-title">Trendy Products</h2>

          <ul class="top-product-list grid-list">

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="images\trendy products\speaker 1.png" width="100" height="100" loading="lazy"
                    alt="efewf">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="#">ZEBRONICS ZEB-Sound Feast</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">&#8377 7,999</del>

                    <data class="price" value="85.00">&#8377 3,499</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="images\trendy products\speaker 2.png" width="100" height="100" loading="lazy" alt="wvew">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="#">boAt Stone 350</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">&#8377 4,990</del>

                    <data class="price" value="85.00">&#8377 1,499</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="images\trendy products\speaker 3.png" width="100" height="100" loading="lazy"
                    alt="efewf">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="#">boAt Stone 650</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">&#8377 4,990</del>

                    <data class="price" value="85.00">&#8377 1,999</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="images\trendy products\cam 1.avif" width="100" height="100" loading="lazy" alt="wdwe">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="#">Canon EOS 3000D</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">&#8377 33,995</del>

                    <data class="price" value="85.00">&#8377 20,499</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="images\trendy products\cam 2.png" width="100" height="100" loading="lazy"
                    alt="dvwv">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="#">NIKON D850</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">&#8377 2,34,950</del>

                    <data class="price" value="85.00">&#8377 2,23,499</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="images\trendy products\cam 3.png" width="100" height="100" loading="lazy"
                    alt="wfvwv">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="#">NIKON Z6II-24</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">&#8377 2,62,990</del>

                    <data class="price" value="85.00">&#8377 2,23,999</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="images\trendy products\power 1.png" width="100" height="100" loading="lazy"
                    alt="wrrwvg">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="#">Mi 3i 20000 mAh</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">&#8377 2,199</del>

                    <data class="price" value="85.00">&#8377 2,149</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="images\trendy products\power 2.avif" width="100" height="100" loading="lazy"
                    alt="rgwg">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="#">Ambrane 10000 mAh</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">&#8377 1,499</del>

                    <data class="price" value="85.00">&#8377 899</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="images\trendy products\power 3.png" width="100" height="100" loading="lazy"
                    alt="fvwrv">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="#">realme 10000 mAh</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">&#8377 2,000</del>

                    <data class="price" value="85.00">&#8377 1,499</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      





      





      <!-- 
        - #BLOG
      -->

      <!--section class="section blog">
        <div class="container">

          <p class="section-subtitle"> -- Offers & Deals --</p>

          <h2 class="h2 section-title">Unbeatable offers</h2>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="images\trendy products\blog 1.avif" width="451" height="310" loading="lazy"
                    alt="Connect to the Internet...." class="w-000">
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    

                    <div class="wrapper-item">
                      <ion-icon name="heart-outline"></ion-icon>

                      <span class="text"></span>
                    </div>

                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">"Experience sonic bliss with our headphone sale, where premium sound meets unbeatable prices!"</a>
                  </h3>

                  <a href="#" class="btn btn-primary">
                    <span>Read More</span>

                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="images\trendy products\blog 2.avif" width="451" height="310" loading="lazy"
                    alt="Connect to the Internet...." class="w-000">
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    

                    <div class="wrapper-item">
                      <ion-icon name="heart-outline"></ion-icon>

                      <span class="text"></span>
                    </div>

                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">"Get your hands on cutting-edge technology at unbeatable prices during our epic laptop sale!"</a>
                  </h3>

                  <a href="#" class="btn btn-primary">
                    <span>Read More</span>

                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="images\trendy products\blog 3.avif" width="451" height="310" loading="lazy"
                    alt="Connect to the Internet...." class="w-000">
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    

                    <div class="wrapper-item">
                      <ion-icon name="heart-outline"></ion-icon>

                      <span class="text"></span>
                    </div>

                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">"Unlock endless possibilities with our mobile sale, where cutting-edge technology meets unbeatable prices."</a>
                  </h3>

                  <a href="#" class="btn btn-primary">
                    <span>Read More</span>

                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <!--section class="section newsletter">
        <div class="container">

          <div class="newsletter-card">

            <p class="section-subtitle"> -- Subscribe Newsletter --</p>
            <br>

            <h2 class="h2 section-title">Sign Up To Newsletter & Get <span class="span">20% Off.</span></h2>

            <form action="" class="newsletter-form">

              <input type="email" name="email" placeholder="Enter your email" required class="input-email">

              <button type="submit" class="btn btn-primary">
                <span>Sign Up</span>

                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section-->

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" id="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="./index.php" class="logo">Shopi<span class="span">fy</span></a>

          <p class="footer-text">
            Experience the future today with our premium electronic products.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-skype"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Shop</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>

          <li>
            <a href="#product" class="footer-link">Product</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact</p>
          </li>

          <li class="footer-item">
            <div class="contact-icon">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="contact-link">
              Dhule
            </address>
          </li>

          <li class="footer-item">
            <div class="contact-icon">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="#" class="contact-link">+91 8767461390</a>
          </li>

          <li class="footer-item">
            <div class="contact-icon">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:organica@help.com" class="contact-link">tsbagul21@gmail.com</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Newsletter</p>

          <p class="newsletter-text">
            You will be notified when somthing new will be appear.
          </p>

          <form action="" class="footer-form">
            <input type="email" name="email" placeholder="Email Address *" required class="footer-input">

            <button type="submit" class="footer-form-btn" aria-label="Submit">
              <ion-icon name="mail-outline"></ion-icon>
            </button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="#" class="copyright-link">Shopify</a>. All Rights Reserved.
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Term and Service</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-to-top" aria-label="Back to Top" data-back-top-btn>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>

</body>
</html>