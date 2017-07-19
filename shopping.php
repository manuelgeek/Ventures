
<?php
include_once("news_page/db.php");
include_once("dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Venturez Go Shopping</title>

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
	</div> -->

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
        <li ><a href="index">Home</a></li>
        <li><a href="index">About</a></li>
		
		
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Services <b class="caret"></b></a>
          <ul class="dropdown-menu dropdown-content">
			<li><a href="index">Services</a></li>
            <li><a href="openshop">Business and Tenders</a></li>
            <li class="active" ><a href="shopping">Go Shopping</a></li>
            <li><a href="connect">Connections and Jobs</a></li>
			<li><a href="enter">Entertainment</a></li>
          </ul>
        </li>
		<li><a href="index">Contact</a></li>
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
			<h2>Go   <span class="text_color">Shopping</span> </h2>
			<h4>Venturez Hub</h4>
						<h4><a href="users" >Join Venturez Hub Today</a></h4>
		</div>
		<div class="page-scroll">
			<a href="#shopp" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->
	<div class="container" id="shopp">
		<div class="col-lg-12 col-md-12 col-sm-12">

			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
			<div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 " >
                   
                    <p>
                      For quality products for yourself and your business. We deal with the best.<br>
                      Feel free to roam around and be sure to finally get exactly what you need at a price fair to the deal.<br>
                      And whats more, there is a wide variety of products and sellers to choose from.<br>
                      Quality is guranteed. For an queries,<a href="contact"> contact us</a> and we shall respond in minutes.
                    </p>
                    <img src="img/care.jpg" alt="" class="img-responsive center-block"  width="250px">
                </div>
            </div>
		
			<div class="how-works-area">
				<div class="section-heading">
					<h2>Select Cartegory</h2>
					<div class="line"></div>
				</div>
            <div class="how-works">
                <ul class="nav nav-tabs" id="myTab">
                   <li class="active"><a href="#experiment" data-toggle="tab">Clothing and Shoes</a></li>
                  <li><a href="#monitor" data-toggle="tab">Cosmestics</a></li>
                  <li><a href="#clean" data-toggle="tab">Foods and Drinks</a></li>
                  <li><a href="#fast" data-toggle="tab">Electronics</a></li>
                  <li><a href="#support" data-toggle="tab">Phones and Laptops</a></li>
                   <li><a href="#games" data-toggle="tab">Games Items</a></li>
                    <li><a href="#house" data-toggle="tab">Households</a></li>
                     <li><a href="#books" data-toggle="tab">Stationery and Books</a></li>
                      <li><a href="#furniture" data-toggle="tab">Furniture</a></li>
                       <li><a href="#whole" data-toggle="tab">Wholesale</a></li>
                       <li><a href="#serve" data-toggle="tab">Services</a></li>

                </ul>
                <!-- Tab panes -->
                <div class="tab-content text-center">
                  <div class="tab-pane fade in active  " id="experiment">
				  	<div class="row row-eq-height">
						<div class="col-md-12 row-eq-height">
		                   <?php 
		                    $query = "SELECT * FROM shopping WHERE cartegory = 'cloth' ORDER BY id DESC";       
		                    $records_per_page=8;
		                    $newquery = $paginate->paging($query,$records_per_page);
		                    $paginate->dataview($newquery);
		                    ?>
		                 <div class=" col-md-10 col-xs-12 col-md-offset-1">
		                 	<ul class="pagination">
		                    <?php
		                    $paginate->paginglink($query,$records_per_page);        
		                    ?>
		                    </ul>
		                 </div>
		                   </div>
					</div>
                  </div>
                  <div class="tab-pane fade in" id="monitor">
							<div class="row row-eq-height">
						<div class="col-md-12 row-eq-height">
		                   <?php 
		                    $query = "SELECT * FROM shopping WHERE cartegory = 'cos' ORDER BY id DESC";       
		                    $records_per_page=8;
		                    $newquery = $paginate->paging($query,$records_per_page);
		                    $paginate->dataview($newquery);
		                    ?>
		                 <div class=" col-md-10 col-xs-12 col-md-offset-1">
		                 	<ul class="pagination">
		                    <?php
		                    $paginate->paginglink($query,$records_per_page);        
		                    ?>
		                    </ul>
		                 </div>
		                   </div>
					</div>	
						
						
                  </div>
                  <div class="tab-pane fade " id="clean">
							<div class="row row-eq-height">
						<div class="col-md-12 row-eq-height">
		                   <?php 
		                    $query = "SELECT * FROM shopping WHERE cartegory = 'food' ORDER BY id DESC";       
		                    $records_per_page=8;
		                    $newquery = $paginate->paging($query,$records_per_page);
		                    $paginate->dataview($newquery);
		                    ?>
		                 <div class=" col-md-10 col-xs-12 col-md-offset-1">
		                 	<ul class="pagination">
		                    <?php
		                    $paginate->paginglink($query,$records_per_page);        
		                    ?>
		                    </ul>
		                 </div>
		                   </div>
					</div>
					
                  </div>
                  <div class="tab-pane fade " id="fast">
							<div class="row row-eq-height">
						<div class="col-md-12 row-eq-height">
		                   <?php 
		                    $query = "SELECT * FROM shopping WHERE cartegory = 'electric' ORDER BY id DESC";       
		                    $records_per_page=8;
		                    $newquery = $paginate->paging($query,$records_per_page);
		                    $paginate->dataview($newquery);
		                    ?>
		                 <div class=" col-md-10 col-xs-12 col-md-offset-1">
		                 	<ul class="pagination">
		                    <?php
		                    $paginate->paginglink($query,$records_per_page);        
		                    ?>
		                    </ul>
		                 </div>
		                   </div>
					</div>
                  </div>
                  <div class="tab-pane fade " id="support">
                   	<div class="row row-eq-height">
						<div class="col-md-12 row-eq-height">
		                   <?php 
		                    $query = "SELECT * FROM shopping WHERE cartegory = 'phone' ORDER BY id DESC";       
		                    $records_per_page=8;
		                    $newquery = $paginate->paging($query,$records_per_page);
		                    $paginate->dataview($newquery);
		                    ?>
		                 <div class=" col-md-10 col-xs-12 col-md-offset-1">
		                 	<ul class="pagination">
		                    <?php
		                    $paginate->paginglink($query,$records_per_page);        
		                    ?>
		                    </ul>
		                 </div>
		                   </div>
					</div>
						
							
                  </div>
                   <div class="tab-pane fade " id="games">
                   	<div class="row row-eq-height">
						<div class="col-md-12 row-eq-height">
		                   <?php 
		                    $query = "SELECT * FROM shopping WHERE cartegory = 'games' ORDER BY id DESC";       
		                    $records_per_page=8;
		                    $newquery = $paginate->paging($query,$records_per_page);
		                    $paginate->dataview($newquery);
		                    ?>
		                 <div class=" col-md-10 col-xs-12 col-md-offset-1">
		                 	<ul class="pagination">
		                    <?php
		                    $paginate->paginglink($query,$records_per_page);        
		                    ?>
		                    </ul>
		                 </div>
		                   </div>
					</div>
						
							
                  </div>
                   <div class="tab-pane fade " id="house">
                   	<div class="row row-eq-height">
						<div class="col-md-12 row-eq-height">
		                   <?php 
		                    $query = "SELECT * FROM shopping WHERE cartegory = 'house' ORDER BY id DESC";       
		                    $records_per_page=8;
		                    $newquery = $paginate->paging($query,$records_per_page);
		                    $paginate->dataview($newquery);
		                    ?>
		                 <div class=" col-md-10 col-xs-12 col-md-offset-1">
		                 	<ul class="pagination">
		                    <?php
		                    $paginate->paginglink($query,$records_per_page);        
		                    ?>
		                    </ul>
		                 </div>
		                   </div>
					</div>
						
							
                  </div>
                   <div class="tab-pane fade " id="books">
                   	<div class="row row-eq-height">
						<div class="col-md-12 row-eq-height">
		                   <?php 
		                    $query = "SELECT * FROM shopping WHERE cartegory = 'books' ORDER BY id DESC";       
		                    $records_per_page=8;
		                    $newquery = $paginate->paging($query,$records_per_page);
		                    $paginate->dataview($newquery);
		                    ?>
		                 <div class=" col-md-10 col-xs-12 col-md-offset-1">
		                 	<ul class="pagination">
		                    <?php
		                    $paginate->paginglink($query,$records_per_page);        
		                    ?>
		                    </ul>
		                 </div>
		                   </div>
					</div>
						
							
                  </div>
                   <div class="tab-pane fade " id="furniture">
                   	<div class="row row-eq-height">
						<div class="col-md-12 row-eq-height">
		                   <?php 
		                    $query = "SELECT * FROM shopping WHERE cartegory = 'furniture' ORDER BY id DESC";       
		                    $records_per_page=8;
		                    $newquery = $paginate->paging($query,$records_per_page);
		                    $paginate->dataview($newquery);
		                    ?>
		                 <div class=" col-md-10 col-xs-12 col-md-offset-1">
		                 	<ul class="pagination">
		                    <?php
		                    $paginate->paginglink($query,$records_per_page);        
		                    ?>
		                    </ul>
		                 </div>
		                   </div>
					</div>
						
							
                  </div>
                   <div class="tab-pane fade " id="whole">
                   	<div class="row row-eq-height">
						<div class="col-md-12 row-eq-height">
		                   <?php 
		                    $query = "SELECT * FROM shopping WHERE cartegory = 'whole' ORDER BY id DESC";       
		                    $records_per_page=8;
		                    $newquery = $paginate->paging($query,$records_per_page);
		                    $paginate->dataview($newquery);
		                    ?>
		                 <div class=" col-md-10 col-xs-12 col-md-offset-1">
		                 	<ul class="pagination">
		                    <?php
		                    $paginate->paginglink($query,$records_per_page);        
		                    ?>
		                    </ul>
		                 </div>
		                   </div>
					</div>
						
							
                  </div>
                   <div class="tab-pane fade " id="serve">
                   	<div class="row row-eq-height">
						<div class="col-md-12 row-eq-height">
		                   <?php 
		                    $query = "SELECT * FROM shopping WHERE cartegory = 'serve' ORDER BY id DESC";       
		                    $records_per_page=8;
		                    $newquery = $paginate->paging($query,$records_per_page);
		                    $paginate->dataview($newquery);
		                    ?>
		                 <div class=" col-md-10 col-xs-12 col-md-offset-1">
		                 	<ul class="pagination">
		                    <?php
		                    $paginate->paginglink($query,$records_per_page);        
		                    ?>
		                    </ul>
		                 </div>
		                   </div>
					</div>
						
							
                  </div>
                </div>
            </div>
           </div>
         </div>
	</div>
	<footer>
		<div class="container ">
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
