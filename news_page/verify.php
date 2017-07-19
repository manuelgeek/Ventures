<?php
include_once("db.php");
include_once("login.php");
include_once("dbconfig.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Venturez Verify</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="../css/style.css" rel="stylesheet">
	<link href="../color/default.css" rel="stylesheet">
	<link rel="icon" href="../img/favicon.png" type="image/x-icon">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<!--<div id="preloader">
	  <div id="load"></div>
	</div> -->

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="../index">
                   <img src="../img/ven.jpg" alt="" class="img-responsive" height="10px" width="100px">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="../index">Home</a></li>
        <li><a href="../index">About</a></li>
		
		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
          <ul class="dropdown-menu dropdown-content">
			<li><a href="../index">Services</a></li>
            <li><a href="../openshop">Business and Tenders</a></li>
            <li><a href="../shopping">Go Shopping</a></li>
            <li><a href="../connect">Connections and Jobs</a></li>
			<li><a href="../enter">Entertainment</a></li>
          </ul>
        </li>
		<li><a href="../index">Contact</a></li>
		<li class="active" ><a href="index">News</a></li>
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
      <h2>VENTUREZ <span class="text_color">Verify</span> </h2>
      <h4>WE ARE GROUP OF GENTLEMEN MAKING AWESOME WEB WITH BOOTSTRAP</h4>
    </div>
    <div class="page-scroll">
      <a href="#verify" class="btn btn-circle">
        <i class="fa fa-angle-double-down animated"></i>
      </a>
    </div>
    </section><br> <br>
<!-- Section: intro -->
<section id="#verify">
               <div class="container">
                        <?php
                            if(isset($msg7)){
                              echo $msg7;
                            }
                          ?>  
                    <form class="form-horizontal" action="#" method="post">
                        <div class="form-group">
                          <label class="col-md-4 col-md-offset-1 title"> Verify ID</label>

                                  
                          <div class="col-md-5">
                            <input type="text" class="form-control input-sm " placeholder="Enter ID" name="email" id="id_no" required />
                          </div>
                        </div> 
                         <div class="form-group">
                          <label class="col-md-4 col-md-offset-1 title"> Password</label>

                                  
                          <div class="col-md-5">
                            <input type="password" class="form-control input-sm " placeholder="Enter password" name="password" id="password" required />
                          </div>
                        </div>  
                          
                        <div class="form-group">
                          <div class="col-md-2 col-md-offset-8">
                            <input type="submit" class="btn btn-success btn-lg btn-block" name="btn-id" value="Verify" />
                          </div>
                        </div>  
                      </form>
              </div>
        
    <!--.....................FOOTER START>>>>>>>>>>>>>>>>>-->
</section>
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
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>	
	<script src="../js/jquery.scrollTo.js"></script>
	<script src="../js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../js/custom.js"></script>

</body>

</html>
