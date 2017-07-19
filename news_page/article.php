<?php
include_once("db.php");
include_once("dbconfig.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Venturez News</title>

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
  <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

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
    <?php
include '../users/login.php';

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
                <li><a href="post_news"><span class="glyphicon glyphicon-import"></span>&nbsp;Post News</a></li>
                <li><a href="../users/logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li><?php } ?>
         <?php if(!isset($_SESSION['userSession'])) {
  ?>

              <li><a href="../users" title="login">Login</a></li>           <?php }
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
			<h2>VENTUREZ <span class="text_color">BLOG</span> </h2>
			<h4>Get Latest Trends From Us</h4>
      <h4><a href="../users" >Join Venturez Hub Today</a></h4>
		</div>
		<div class="page-scroll">
			<a href="#new" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->
	    <div class="" style="width: 100%;" id="new" >
      <div class=" col-md-12  row-eq-height">
       
        <div class="row">
          <div class="col-md-8">
            <div class="timetable">
             
              <div class="news-panel">
                <div class="panel">
                  <div class="news-heading">
                    <span>
                      <a href="index" class="btn btn-default">General Posts</a>
                      <a href="article" class="btn btn-primary">Top Articles</a>
                    </span>
                    <h2>Top Articles</h2>
                    <p>Get the top creative writings</p>
                  </div>
                  
                   <?php 
                    $query = "SELECT * FROM asawa_new WHERE cartegory = 'article' ORDER BY new_id DESC";       
                    $records_per_page=5;
                    $newquery = $paginate->paging($query,$records_per_page);
                    $paginate->dataview($newquery);
                    ?>
                     <div class=" col-md-10 col-xs-12 col-md-offset-1">
                      <ul class="pagination">
                      <?php
                    $paginate->paginglink($query,$records_per_page);        
                    ?>
                    </ul>
                    </div> <div class="clearfix"></div>
                   
                  
                </div>
              </div>
            </div>
          </div>
         

         <div style="background:#F4F4F4" class="col-md-4">
            <div class="events-panel">
             <h2>Facebook Comments</h2>
             <p>Let,s live chat...</p>
              <div class="row event-item">
                
                  <div class="fb-comments" data-href="https://venturezhub.com" data-width="80%" data-numposts="3"></div>

              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
        
    <!--.....................FOOTER START>>>>>>>>>>>>>>>>>-->

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
