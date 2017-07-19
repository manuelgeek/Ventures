<?php
//include_once("db.php");
include_once("mail.php");
//include_once("dbconfig.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="venturezhub.com">

    <title>Venturez Hub</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.png" type="image/x-icon">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<!--<div id="preloader">
	  <div id="load"></div>
	</div>  -->

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index">
                    <img src="img/ven.jpg" alt="" class="img-responsive" height="10px" width="100px">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">About</a></li>
		
		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
          <ul class="dropdown-menu dropdown-content">
			<li><a href="#loans">Services</a></li>
            <li><a href="openshop">Business and Tenders</a></li>
            <li><a href="shopping">Go Shopping</a></li>
            <li><a href="connect">Connections and Jobs</a></li>
			<li><a href="enter">Entertainment</a></li>
          </ul>
        </li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="news_page/index">News</a></li>
		<?php
include 'users/login.php';

include_once 'db.php';
if(isset($_SESSION['userSession']))
{
$query3 = $MySQLi_CON->query("SELECT * FROM users WHERE email='$_SESSION[userSession]'");
          $row=$query3->fetch_array();
}
?>
<?php
if(isset($_SESSION['userSession'])) {
 	?>
	 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $row['name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a  href="news_page/post_news"><span class="glyphicon glyphicon-import"></span>&nbsp;Post News</a></li>
                <li><a href="users/logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li><?php } ?>
         <?php if(!isset($_SESSION['userSession'])) {
 	?>

            	<li><a href="users" title="login">Login</a></li>           <?php }
     ?>
		 <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogs <b class="caret"></b></a>
          <ul class="dropdown-menu dropdown-content">
            <li><a href="blogs">Venturez Blogs</a></li>
            <li><a href="publication">Publication Content</a></li>
            <li><a href="edition">Latest Edition</a></li>
          </ul>
        </li>-->
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h2>WELCOME TO <span class="text_color">VENTUREZ</span> </h2>
			<h4>One Network for all your Business needs</h4>
			<h4><a href="users" >Join Venturez Hub Today</a></h4>
		<div class="col-md-12">
		
		
			<div class="col-md-4 hvr-wobble-vertical col-sm-4 col-sm-10 col-xs-10 col-xs-offset-1 col-sm-offset-1  col-md-offset-4" id="open">
				<a href="news_page/index" class="open hvr-wobble-vertical">Latest News</a>
			</div>
		<div class="clearfix"></div>
			
			<div class="col-md-3 col-sm-3" id="open">
				<a href="openshop" class="open hvr-wobble-vertical">Business Tenders</a>
			</div>
			<div class="col-md-3 col-sm-3" id="open">
				<a href="shopping" class="open hvr-wobble-vertical">Go Shopping</a>
			</div>
			<div class="col-md-3 col-sm-3" id="open">
				<a href="connect" class="open hvr-wobble-vertical">Connections and Jobs</a>
			</div>
			<div class="col-md-3 col-sm-3" id="open">
				<a href="enter" class="open hvr-wobble-vertical">Entertainment</a>
			</div>
		</div>
		</div>
		<div class="page-scroll">
			<a href="#about" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class=" " >
					<div class="section-heading">
					<h2>About us</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		 <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 " >
                   
                    <p>
                      We are a team of passionate Entrepreneurs.
							Committed to providing you with the best of
							Customer and Business Development Services.<br>
							We have centres at:
							<b>Nairobi CBD. Ruiru. Juja. Nakuru. Meru. Eldoret.</b><br>
							We also get you covered at: Nairobi University, Egerton University, Moi University, JKUAT, Meru University, Kenyatta University, U.o.E and others across Kenya.
							Join us today for Business Beyond Borders.<br>
							<b>Venturez Business Club:</b><br>
							We Make It Happen.

							<address>
								<b>info@venturezhub.com</b>
							</address>
							

                    </p>
                </div>
            </div>
		<div class="row">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="container">
            <div class="col-xs-6 col-sm-3 col-md-3 row-eq-height">
				<div class=" " data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Wallace Kamau</h5>
                        <p class="subtitle">Eldoret</p>
						<a href="#" class="subtitle"> <b>More </b></a>
                        <div class="avatar"><img src="img/team/moi.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3 row-eq-height">
				<div class=" " data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Rahab Njeri</h5>
                        <p class="subtitle">Nairobi CBD</p>
						<a href="#" class="subtitle"> <b>More </b></a>
                        <div class="avatar"><img src="img/team/uon.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3 row-eq-height">
				<div class=" " data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Macharia Paul</h5>
                        <p class="subtitle">Juja</p>
						<a href="#" class="subtitle"> <b>More </b></a>
                        <div class="avatar"><img src="img/team/jkuat.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3 row-eq-height">
				<div class=" " data-wow-delay="1s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>David Muhia</h5>
                        <p class="subtitle">Nakuru</p>
						<a href="#" class="subtitle"> <b>More </b></a>
                        <div class="avatar"><img src="img/team/eger.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
        </div>	
		<div class=" col-md-12 col-sm-12 row col-md-offset-3 col-sm-offset-3 ">
            <div class="col-xs-6 col-sm-3 col-md-3 row-eq-height">
				<div class=" " data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Bonny Waithaka</h5>
                        <p class="subtitle">Meru</p>
						<a href="#" class="subtitle"> <b>More </b></a>
                        <div class="avatar"><img src="img/team/meru.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3 row-eq-height">
				<div class=" " data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Christopher Kariuki</h5>
                        <p class="subtitle">Ruiru</p>
						<a href="#" class="subtitle"> <b>More </b></a>
                        <div class="avatar"><img src="img/team/ruiru.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
         </div>
            <!--
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow " data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Jack Briane</h5>
                        <p class="subtitle">jQuery Ninja</p>
						<a href="#" class="subtitle"> <b>More </b></a>
                        <div class="avatar"><img src="img/team/moi.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow " data-wow-delay="1s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Tom Petterson</h5>
                        <p class="subtitle">Typographer</p>
						<a href="#" class="subtitle"> <b>More </b></a>
                        <div class="avatar"><img src="img/team/moi.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
        </div>-->		
		
		
		
		</div>
	</section>
	<!-- /Section: about -->
	

	
	
	<!-- Section: Entrepreneurs/ Service -->
    <section id="loans" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class=" " data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Our Services</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-sm-3 col-md-3">
				<div class=" " data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/open.png" alt="" width="50px" />
					</div>
					<div class="service-desc">
						<h5>Open Shop</h5>
						<p>Do you want to start a business? <br>Create a Network <br> Get What you need.</p>
						<a href="openshop" class="more"> <b>See More </b></a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class=" " data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/cart.png" alt="" width="50px" />
					</div>
					<div class="service-desc">
						<h5>Go Shopping</h5>
						<p>Welcome to Venturez Mall<br> The Home of <b>offers</b> <br> Quality is guranteed.</p>
						<a href="shopping" class="more"> <b>See More </b></a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class=" " data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/conn.png" alt="" width="50px" />
					</div>
					<div class="service-desc">
						<h5>Get Connected</h5>
						<p>Meet the movers and shakers <br> Learn from the performers <br> Get Connected.</p>
						<a href="connect" class="more"> <b>See More </b></a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class=" " data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/enter.png" alt="" width="50px" />
					</div>
					<div class="service-desc">
						<h5>Entertainment</h5>
						<p>Where are at? <br> Don't miss the bash!!! <br> Get Real time <b>Rave</b> updates here.</p>
						<a href="enter" class="more"> <b>See More </b></a>
					</div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	<!-- /Section: Entrepreneurs -->
	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class=" " data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
				 <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 " >
                   
                    <p>
                     Contact us today. At Venturez we value your feed back. Help us improve on our services.
                    </p>
                </div>
            </div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="boxed-grey">

            			<?php
                            if(isset($msg)){
                              echo $msg;
                            }
                          ?>  

                <form id="contact-form" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="name"  id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="General Customer Service">General Customer Service</option>
                                <option value="Suggestions">Suggestions</option>
                                <option value="Product Support">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="btnContactUs" class="btn btn-skin " id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="widget-contact">
				<address>
				  <strong>Venturez Club</strong><br>
				  <br>
				  Moi University<br>
				  <abbr title="Phone">P:</abbr> +(254) 729 515 273 , +(254) 790 319 671,<br> +(254) 732 818 584
				  
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">venturezclub@gmail.com</a><br>
				   <a href="mailto:#">info@venturezhub.com</a>
				</address>	
				<address>
				  <strong>We're on social networks</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="http://facebook.com/venturezclub" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="http://twitter.com/venturezclub" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="http://instagram.com/venturezclubbuzinezz" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li class="social-google"><a href="http://plus.google.com/app/basic/111489297950648163585" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright  <?php echo date('Y') ; ?> - Venturez. All rights reserved. | By; <a class="appslab" href="http://appslab.co.ke/"> Apps:Lab</a></p>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Squadfree
                    -->
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>
