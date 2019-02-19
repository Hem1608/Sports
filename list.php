
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portfolio | Sportsware</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"><span class="text"><u>Athens Sports Wear</u></span></a>
    
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <!--<li><a href="career.html">Career</a></li>-->
                         <li><a href="registration.html">Registration</a></li>
                            <!--<li><a href="blog-item.html">My Account</a></li>
                                 <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="404.html">404</a></li>
                            -->
                            
                           <li class="bounceInRight">
                                <a href="Login.html">Login </a>
                                
                            </li>
                            
                            
                            
                            
                            
                            
                            <li class="divider"></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="terms.html">Terms of Use</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="blog.html">Blog</a></li>--> 
                    <li><a href="contact-us.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="alizarin">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <h1>Portfolio</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title--> 
  
    
    
    <section id="portfolio" class="container">
        <form method="POST" action="#"> 
            <input type="submit" value="All" name="all" class="btn btn-default active">
        <input type="submit" value="Customer" name="customer" class="btn btn-default">
        <input type="submit" value="Shop" name="shop" class="btn btn-default">
        <input type="submit" value="Designs" name="designs" class="btn btn-default">
        <input type="submit" value="Online" name="online" class="btn btn-default">
        
               </form>
 
        <?php
       
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST["all"])){
$sql="select * from sportsimages";  
}
elseif (isset($_POST["customer"])) {
    $sql="select * from sportsimages where category='customer'";
    
}
elseif (isset($_POST["shop"]) ){
    
     $sql="select * from sportsimages where category='shop'";
    

}
 elseif (isset($_POST["designs"])) {
     
    $sql="select * from sportsimages where category='designs'";
     
}
elseif(isset($_POST["online"])){
    
        $sql="select * from sportsimages where category='online'";
}
else{
        $sql="select * from sportsimages";
}



$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
 echo "<ul class='portfolio-items col-3'>";
 while($row = $result->fetch_assoc()) {
    
    
            echo "<li class='portfolio-item'>";
               echo "<div class='item-inner'>";
                   echo "<img src=". $row['url'] ." alt=''>";
                    echo "<h5>Lorem ipsum dolor sit amet</h5>";
                    echo "<div class='overlay'>";
                    
                       echo "<a class='preview btn btn-danger' href='". $row['url'] ."' rel='prettyPhoto'><i class='icon-eye-open'></i></a>";
                      
                    echo "</div>";           
                echo "</div>";           
            echo "</li>";
   
        }
        
        echo "</ul>";
        
        
        
        
        
}
        
        
        
        
        $sql="select * from sportsimages";
        
        
 
        
        ?>
        
        
        
        
        
        
        
        
        
    </section>
    
    
    
      <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h4>About Us</h4>
                    <p>Athens Sports Wear is a well established sports wear manufacturing company, based in Chennai, India. The company is a recognized Manufacturer, Supplier and Exporter of Sportswear all over India. 
                        Highly acknowledged by the clients in terms of quality, Our products are exported in the markets of USA,Russia and Dubai.</p>                   
                
                 </div><!--/.col-md-3-->

                <div class="col-md-2 col-sm-6">
                    <h4>Company</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="about-us.html">Company Overview</a></li>
                            <li><a href="about-us.html">Meet The Team</a></li>
                            
                            <li><a href="services.html">Our Services</a></li>
                            
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="terms.html">Terms of Use</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <!--<h4>Latest Blog</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 17 Aug 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 13 Sep 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 11 Jul 2013</small>
                            </div>
                        </div>
                    </div>  
                </div>--><!--/.col-md-3-->

                <div class="col-md-12 col-sm-6">
                    <h4>Address</h4>
                    <address>
                        <strong>No:157/1-a, M.T.H. Road,Near</strong><br>
                        National Bread House, Chennai Tiruvallur High Rd,I.C.F. Villivakkam,South Thirumalai Nagar,<br>
                        Konnur,Chennai,TamilNadu 600049<br>
                        
                    </address>
                </div></div>
                <div class="row">
                    <div class="col-md-2 col-sm-4">
                        <h4>Contact us@</h4>
                        <abbr title="email-id">Email: </abbr>athenssportswear@gmail.com |athenssports@rediffmail.com
                        <br>
                        <abbr title="Phone">
                            Phone: 
                        </abbr>+91 9962828867<br> | +919444226655<br> | 044-26173000
                    </div>
                    </div>
                    <!--<h4>Newsletter</h4>
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button">Go!</button>
                            </span>
                        </div>
                    </form>-->
                </div> <!--/.col-md-3-->
            </div>
        
    </section>
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <center>
                &copy; 2017 <a target="_blank" href="#" title="Sports wear manufacturer and exporter"><span class="text" style="font-size: 15px">Athens Sports Wear</span></a>
        </center>
                
            </div>
       
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
