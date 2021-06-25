<!DOCTYPE html>
<!--套用模板：https://startbootstrap.com/themes/agency/ -->
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Start EATing</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  
  <!-- style自己寫的-->
  <style>
	.carousel .carousel-item {
		height: 300px;
	}

	.carousel .carousel-item img {
		min-height: 300px;
		max-height: 400px;
		object-fit: cover;
	}
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Start EATing</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">現正熱賣</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">合作店家</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">優惠使用方式</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Our Function</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">廣告推播申請</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
       <!-- <div class="intro-lead-in">Welcome To Our Studio!</div> -->
        <div class="intro-heading text-uppercase">It's Nice To Have Fooood</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">EAT More</a>
      </div>
    </div>
  </header>
  <!-- carousel轉場 -->
    <section class="page-section" id="services">
    <div class="container">
	<div class="col-lg-12 text-center">
	 <h2 class="section-heading text-uppercase">SELLING</h2>
	 <h3 class="section-subheading text-muted">現正優惠店家</h3>
	 </div>
   <!--自己寫-->
	  <div class="container">
	   <div class="carousel slide" data-ride="carousel" id="carousel-demo">
			<ol class="carousel-indicators">
			  <li data-target="#carousel-demo" data-slide-to="0" class="active"></li>
			  <li data-target="#carousel-demo" data-slide-to="1"></li>
			  <li data-target="#carousel-demo" data-slide-to="2"></li>
			</ol>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img class="d-block w-100" src="img/208392.jpg" alt="">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="img/208393.jpg" alt="">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="img/208391.jpg" alt="">
			</div>
		  
			<a href="#carousel-demo" class="carousel-control-prev" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			</a>
			<a href="#carousel-demo" class="carousel-control-next" data-slide="next">
			  <span class="carousel-control-next-icon"></span>
			</a>
		  </div>
		</div>
	</div>
  </div>
  </section>
  <!-- Services -->
	<?php
		$fp=fopen("place.txt","r"); //將爬下來的店家文字檔打開
		$x=0;
		$str=array();
		while (!feof($fp)) //讀取文字檔所有內容
		{
			$str[$x]=fgets($fp);
			$x=$x+1;
		}
		//echo $str[0];
		//echo $x;
		//fclose($fp);
	?>
    

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">合作店家</h2>
          <h3 class="section-subheading text-muted">restaurants we have cooperating .</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo $str[1];?>" alt=""> <!-- 依照讀取之資料放置內文 -->
          </a>
          <div class="portfolio-caption">
            <h4><?php echo $str[0];?></h4>
            <p class="text-muted"><?php echo $str[2];?></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo $str[21];?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?php echo $str[20];?></h4>
            <p class="text-muted"><?php echo $str[22];?></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo $str[5];?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?php echo $str[4];?></h4>
            <p class="text-muted"><?php echo $str[6];?></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo $str[17];?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?php echo $str[16];?></h4>
            <p class="text-muted"><?php echo $str[18];?></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo $str[13];?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?php echo $str[12];?></h4>
            <p class="text-muted"><?php echo $str[14];?></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo $str[9];?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?php echo $str[8];?></h4>
            <p class="text-muted"><?php echo $str[10];?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">優惠使用</h2>
          <h3 class="section-subheading text-muted">How to use.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/11.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Connect</h4>
                  <h4 class="subheading">打開優惠頁!</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">來看看有什麼優惠吧</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/22.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Confirm</h4>
                  <h4 class="subheading">先看看有那些優惠吧</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">進入網頁時，可以看到目前正優惠的店家，來確認優惠消息及時間吧~!</</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/33.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Show</h4>
                  <h4 class="subheading">附上折扣頁</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">結帳的時候打開優惠頁，讓店家知道你有看到這個優惠喔~</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/44.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Get</h4>
                  <h4 class="subheading">取得折扣</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">取得折扣後，請享用您的餐點吧!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Get 
                  <br>Discount
				  <br>NOW!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 簡介 -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Function</h2>
          <h3 class="section-subheading text-muted">提供您飲食的好去處，也給您最好的優惠.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/11.jpg" alt="">
            <h4>COFFEE</h4>
            <p class="text-muted">Take Relax</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/22.jpg" alt="">
            <h4>MEAL</h4>
            <p class="text-muted">Great Dish</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/33.jpg" alt="">
            <h4>DISCOUNT</h4>
            <p class="text-muted">Get Discount</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted"></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients (沒有更改使用) -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">Please fill the table if you want to cooperate with us.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate" method="GET" action="index.php">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
				<input type ="submit" value="Send Message" class="btn btn-primary btn-xl text-uppercase">
             <!--   <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php
	/*	
		$hostname = "localhost";		//MySQL的主機名稱 
		$username = "root";		// MySQL的使用者名稱
		$password = "";		//MySQL的使用者密碼 
		$database = "food";			//資料庫名稱
		
		$link = mysqli_connect($hostname, $username, $password, $database) OR die("Error: Unable to connect to MySQL.");
		mysqli_set_charset($link, "utf8");
		
		if ((isset($_GET["name"])&&isset($_GET["email"])&&isset($_GET["phone"])&&isset($_GET["message"]))!=NULL)
		{
			$name=$_GET["name"];
			$email=$_GET["email"];
			$phone=$_GET["phone"];
			$message=$_GET["message"];
			$text="insert into `eat` ( `name`, `email`,`phone`,`message`)
			VALUES('$name','$email','$phone','$message')";
			mysqli_query($link,$text) or die ("無法新增".mysql_error());
			
			mysqli_close($link);
		}
	*/
	?>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?php echo $str[0];?></h2>
                
                <img class="img-fluid d-block mx-auto" src="<?php echo $str[1];?>" alt="">
                
                <ul class="list-inline">
                  <li>ADD: <?php echo $str[3];?></li>
                  <li>TYPE:<?php echo $str[2];?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?php echo $str[20];?></h2>
                
                <img class="img-fluid d-block mx-auto" src="<?php echo $str[21];?>" alt="">
                
                <ul class="list-inline">
                  <li>ADD: <?php echo $str[23];?></li>
                  <li>TYPE:<?php echo $str[22];?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?php echo $str[4];?></h2>
                
                <img class="img-fluid d-block mx-auto" src="<?php echo $str[5];?>" alt="">
                
                <ul class="list-inline">
                  <li>ADD: <?php echo $str[7];?></li>
                  <li>TYPE:<?php echo $str[6];?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?php echo $str[16];?></h2>
                
                <img class="img-fluid d-block mx-auto" src="<?php echo $str[17];?>" alt="">
                
                <ul class="list-inline">
                  <li>ADD: <?php echo $str[19];?></li>
                  <li>TYPE:<?php echo $str[18];?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
               <h2 class="text-uppercase"><?php echo $str[12];?></h2>
                
                <img class="img-fluid d-block mx-auto" src="<?php echo $str[13];?>" alt="">
                
                <ul class="list-inline">
                  <li>ADD: <?php echo $str[15];?></li>
                  <li>TYPE:<?php echo $str[14];?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?php echo $str[8];?></h2>
                
                <img class="img-fluid d-block mx-auto" src="<?php echo $str[9];?>" alt="">
                
                <ul class="list-inline">
                  <li>ADD: <?php echo $str[11];?></li>
                  <li>TYPE:<?php echo $str[10];?></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
 

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
