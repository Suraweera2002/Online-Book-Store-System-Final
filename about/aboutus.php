<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles/my3.css">
    
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
            background-color: #edf6ff;
        }

        a {
            text-decoration: none;
            color: black;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            width: 100%;
            border-bottom: 1px solid black;
            padding-top: 10px;
            padding-bottom: 10px;
            align-items: center;
            background-color: white;
            
        }

        .nav_top {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            padding: 0px 40px;
        }

        .nav-items {
            display: flex;
            width: 100%;
            justify-content: center;
            gap: 20px;
            padding-top: 10px;
            border-top: 1px solid black;
            align-items: center;
        }
        .bainer{
            background-color: white;
            width: 100%;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .fandcenterr{
            display: flex;
            align-items: center;
            gap: 10px;
        }
      
     
      
        .btn{
            padding: 10px;
            width: 100%;
            background-color: black;
            color: white;
            font-weight: bold;
        }
        footer{
            margin-top: 60px;
            display: flex;
            width: 100%;
            padding: 20px 80px;
            justify-content: space-between;
            background-color: white;
            min-height: 300px;
            position: relative;
            
        }
        .botton_nav_resived{
            position: absolute;
            width: 100%;
            right: 0;
            bottom: 15px;
            text-align: center;
            z-index: 99;
        }
        </style>
</head>

<body>
<?php include '../bookhaven/nav.php'; ?>
    <!-- <header>
        <div class="promotions">
            <p>Welcome to Book Haven! Enjoy our latest promotions.</p>
        </div>
    </header>
    
    <div class="header-content">
        <div class="logo">
            <img src="images/logo.png" alt="Book Haven Logo">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search for books...">
        </div>
        <div class="user-options">
            <a href="#"><i class="fas fa-user"></i> Login/Sign Up</a>
            <a href="#"><i class="fas fa-heart"></i> Wishlist</a>
            <a href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
        </div>
    </div>
    
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">E-Book</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Help</a></li>
            <li class="admin-option"><a href="#">Admin <i class="fas fa-cogs"></i></a></li>
        </ul>
    </nav> -->

    <h1 class="title1">About Us</h1>


    <div class="content1">

        <h3>Who We Are</h3>
        <p>"Welcome to Book Haven, your online sanctuary for literary
            treasures. Nestled in the digital realm, we are passionate
            purveyors of stories, knowledge, and imagination. With a
            curated collection spanning genres and authors, we invite
            you to explore worlds within pages, find solace in words,
            and embark on unforgettable literary journeys. Whether you
            seek classics that have withstood the test of time or contemporary
            tales that stir the soul, Book Haven is your haven for all things
            bookish. Let us be your guide in the endless adventure of reading."</p>
        <a href="#">Learn More</a>
        <div class="pic1">
            <img src="images/pic1.jpg" width="50%" height="50%" alt="call">
        </div>
    </div>


    <div class="content2">
        <div class="pic2">
            <img src="images/pic2.jpg" width="50%" height="50%" alt="call">
        </div>
        <h3 class="title3">Our Goal</h3>
        <p class="p2">"Our goal at Book Haven is to provide book lovers with an immersive and convenient online
            bookstore
            experience. We strive to offer a diverse selection of books across genres, catering to every reader's taste
            and
            interest. With user-friendly navigation and personalized recommendations, we aim to make it easy for
            customers
            to discover new authors, explore different subjects, and find their next favorite read. At Book Haven, we
            are
            committed to fostering a vibrant literary community by connecting readers with the stories and knowledge
            that
            enrich their lives."</p>
        <a href="#">Learn More</a>

    </div>

    <!-- <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="contact-us">
                <h3>CONTACT US</h3>
                <p>Need Anything? use our live chat below.</p>
                <a href="#">+94 76 123 4567</a>
                <a href="#">onlinebookstore@gmail.lk</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="information">
                <h3>INFORMATION</h3>
                <ul>
                  <li><a href="http://localhost/IWT/aboutus.php">About Us</a></li>
                  <li><a href="http://localhost/IWT/contactus.php">Contact Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="http://localhost/IWT/termsconditions.php">Terms and Conditions</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="my-account">
                <h3>MY ACCOUNT</h3>
                <ul>
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">My Cart</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="newsletter">
                <h3>NEWSLETTER</h3>
                <p>Subscribe to our mailing list for new updates</p>
                <form action="#">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Adress">
                  </div>
                  <button type="submit" class="btn btn-default">SIGN UP</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <p>&copy; 2024 BOOK HAVEN. ALL RIGHTS RESERVED.</p>
        </div>
      </footer> -->
      <?php include "../footer.php"; ?>
</body>

</html>