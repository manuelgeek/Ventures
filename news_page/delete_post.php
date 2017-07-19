<?php
include_once("db.php");
include_once("dbconfig.php");
include '../users/login.php';

if(!isset($_SESSION['userSession']))
{
  header("Location: ../index");
}
$query7 = $MySQLi_CON->query("SELECT * FROM users WHERE email='$_SESSION[userSession]'");
          $row=$query7->fetch_array();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Venturez News | Delete</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
   
	<link rel="stylesheet" href="../css/sweetalert2.min.css" type="text/css" />
    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="../css/style.css" rel="stylesheet">
	<link href="../color/default.css" rel="stylesheet">
	<link rel="icon" href="../img/favicon.png" type="image/x-icon">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
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
//include '../users/login.php';

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
    <div class="clearfix"></div>
   	 <div class="col-lg-12 col-lg-offset-5">
		<br style="margin: 50px;">
	</div>
    <div class="container">
    	
        <div class="page-header">
        <h1>Delete Posts here...</h1>
        </div>
        
        <div id="load-products"></div> <!-- products will be load here -->
    
    </div>

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
	<script src="../js/sweetalert2.min.js"></script>


<script>
	$(document).ready(function(){
		
		readProducts(); /* it will load products when document loads */
		
		$(document).on('click', '#delete_product', function(e){
			
			var productId = $(this).data('id');
			SwalDelete(productId);
			e.preventDefault();
		});
		
	});
	
	function SwalDelete(productId){
		
		swal({
			title: 'Are you sure?',
			text: "It will be deleted permanently!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!',
			showLoaderOnConfirm: true,
			  
			preConfirm: function() {
			  return new Promise(function(resolve) {
			       
			     $.ajax({
			   		url: 'delete.php',
			    	type: 'POST',
			       	data: 'delete='+productId,
			       	dataType: 'json'
			     })
			     .done(function(response){
			     	swal('Deleted!', response.message, response.status);
					readProducts();
			     })
			     .fail(function(){
			     	swal('Oops...', 'Something went wrong with ajax !', 'error');
			     });
			  });
		    },
			allowOutsideClick: false			  
		});	
		
	}
	
	function readProducts(){
		$('#load-products').load('read.php');	
	}
	
</script>
</body>
</html>