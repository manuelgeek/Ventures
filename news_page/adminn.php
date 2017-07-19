<?php
require 'db.php';
include'login.php';
include'shop.php';
include'tenders.php';
include'connect.php';
include'enter.php';

if(!isset($_SESSION['adminSession']))
{
	header("Location: index");
}


?>

<?php
if(isset($_POST['btn-delete1']))
{
	$email = $MySQLi_CON->real_escape_string(trim($_POST['delete']));
	// select image from db to delete
		$stmt_select = $MySQLi_CON->query("SELECT new_photo FROM asawa_new WHERE new_tittle='$email'");
	//	$stmt_select->execute(array('$_SESSION[userSession]'=>$_GET['upload_pic']));
		$imgRow=$stmt_select->fetch_array();
		unlink("new_images/".$imgRow['new_photo']); 
	$stmt_delete = $MySQLi_CON->query("DELETE FROM asawa_new WHERE new_tittle='$email'");

	$msg9 = "<div class='alert alert-success '>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Venturez News <b>Deleted</b>  successfully !
					</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Venturez Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="../css/style.css" rel="stylesheet">
	<link href="../color/default.css" rel="stylesheet">
	<link rel="icon" href="../img/favicon.png" type="image/x-icon">
	 <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>	

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
		<li ><a href="index">News</a></li>
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
			<h2>VENTUREZ <span class="text_color">Admin</span> </h2>
			<h4>MANAGE YOUR PAGE</h4>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->


				<div class="container">
                  	<div class="row">
                  		<h3 class="title">News  Posts</h3>

 <?php
     error_reporting( ~E_NOTICE ); // avoid notice

include_once 'db.php';

if(isset($_POST['btn-update2']))
{
	$new_tittle = $MySQLi_CON->real_escape_string(trim($_POST['tittle']));
	$new_body = $MySQLi_CON->real_escape_string(trim($_POST['body']));
	$new_footer = $MySQLi_CON->real_escape_string(trim($_POST['footer']));
	$cartegory = $MySQLi_CON->real_escape_string(trim($_POST['cartegory']));

	$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		 if(empty($imgFile)){
			$userpic = '';
		}
		
		 else{
			$upload_dir = 'new_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 2000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		

		
			// if no error occured, continue ....
		if(!isset($errMSG))
		{



	$query = "INSERT INTO asawa_new(new_tittle, new_body, new_footer, cartegory, new_photo) VALUES('$new_tittle','$new_body','$new_footer','$cartegory','$userpic')";

		
		if($MySQLi_CON->query($query))
		{
			$msg8 = "<div class='alert alert-success '>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Venturez News Update added successfully !
					</div>";
		}
		else
		{
			$msg8 = "<div class='alert alert-danger '>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp;  error while adding !
					</div>";
		}

	}
	}


?>

					<form action="" method="post" enctype="multipart/form-data">
						<?php
							if(isset($errMSG)){
									?>
						            <div class="alert alert-danger">
						            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
						            </div>
						            <?php
							}?>
													<?php
														if(isset($msg8)){
															echo $msg8;
														}
													?>	
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="tittle" class="form-control login-field" value="" placeholder="Title of Post" id="login-name" required />
							  <label class="login-field-icon fui-user" for="login-name">Tittle of Post 1</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
								<label class="login-field-icon fui-lock" for="login-pass">Cartegory</label>
							  <select class="form-control" name="cartegory" required>
							     <option value="">Select</option>
							      <option value="news">News</option>
							      <option value="article">Articles</option>
							   </select>
							  
							</div>

							<div class="form-group col-md-8 col-sm-8">
							  <textarea type="text" name="body" class="form-control login-field" value="" placeholder="Message Here..." id="login-pass" required > </textarea>
							  <script>
			                    CKEDITOR.replace( 'body' );
			                </script>
							  <label class="login-field-icon fui-lock" for="login-pass">Message here.... </label>
							</div>
							
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="footer" class="form-control login-field" value="" placeholder="Posted By:" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass">Posted By</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							<label class="control-label">News Img.</label>
       						 <input class="form-control" type="file" name="user_image" accept="image/*"  />
       						 </div>
							<div class="form-group col-md-3 col-sm-3">
							<input class="btn btn-primary btn-lg btn-block" value="Update News" name="btn-update2" type="submit"/><br>
							
							</div>
						</form>

							
					</div>
				</div>      
				
<hr>
									<div class="container">

													<?php
														if(isset($msg9)){
															echo $msg9;
														}
													?>	
											<form class="form-horizontal" action="#" method="post">
												<div class="form-group">
													<label class="col-md-4 col-md-offset-1 title"> Delete News Past:</label>

																	
													<div class="col-md-5">
														<input type="text" class="form-control input-sm " placeholder="Enter News Tittle" name="delete" required />
													</div>
												</div>	
													
												<div class="form-group">
													<div class="col-md-2 col-md-offset-8">
														<input type="submit" class="btn btn-danger btn-lg btn-block" name="btn-delete1" value="Delete News" />
													</div>
												</div>	
											</form>
				</div>

<hr> <hr><!--          SHOPPING PAGe
ADD SHOP ITEMS HERE FORM
///////////////////////////////-->
		<div class="container">
                  	<div class="row">
                  		<h3 class="title">Shopping Items</h3>

					<form action="" method="post" enctype="multipart/form-data">
						<?php
							if(isset($errMSG1)){
									?>
						            <div class="alert alert-danger">
						            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG1; ?></strong>
						            </div>
						            <?php
							}?>
													<?php
														if(isset($msg10)){
															echo $msg10;
														}
													?>	
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="name" class="form-control login-field" value="" placeholder="Name of item" id="login-name" required />
							  <label class="login-field-icon fui-user" for="login-name">Name of Item</label>
							</div>

							<div class="form-group col-md-3 col-sm-3">
							  <textarea type="text" name="description" class="form-control login-field" value="" placeholder="Description Here..." id="login-pass" required > </textarea>
							  <label class="login-field-icon fui-lock" for="login-pass">Description here.... </label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							 <select class="form-control" name="cartegory" required>
							     <option value="">Select</option>
							         <option value="cloth">Clothing and Shoes</option>
							        <option value="cos">Cosmetics</option>
							        <option value="food">Foods and Drinks</option>
							        <option value="electric">Electronics</option>
							        <option value="games">Games Items</option>
							        <option value="house">Households</option>
							        <option value="books">Stationery and Books</option>
							        <option value="furniture">Furniture</option>
							        <option value="Whole">Wholesale</option>
							        <option value="serve">Services</option>
							        <option value="phone">Phones and Laptops</option>
							        
							        
							    </select>
							     <label class="login-field-icon fui-lock" for="login-pass">Cartegory </label>
							 </div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="price" class="form-control login-field" value="" placeholder="Price" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass">Price</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="contact" class="form-control login-field" value="" placeholder="Contact" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass">Contact</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="location" class="form-control login-field" value="" placeholder="Location" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass">Location</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							<label class="control-label">Item Img.</label>
       						 <input class="input-group form-control" type="file" name="photo" accept="image/*" />
       						 </div>
							<div class="form-group col-md-3 col-sm-3">
							<input class="btn btn-primary btn-lg btn-block" value="Add Item" name="update_shop" type="submit"/><br>
							
							</div>
						</form>

							
					</div>
				</div>  
				<hr>
									<div class="container">

													<?php
														if(isset($msg11)){
															echo $msg11;
														}
													?>	
											<form class="form-horizontal" action="#" method="post">
												<div class="form-group">
													<h3 class=" title"> Delete Go Shopping Items</h3>

																	
													<div class="col-md-5">
														<input type="text" class="form-control input-sm " placeholder="Enter Item Tittle" name="delete" required />
													</div>
												</div>	
													
												<div class="form-group">
													<div class="col-md-2 col-md-offset-8">
														<input type="submit" class="btn btn-danger btn-lg btn-block" name="delete_shop" value="Delete Item" />
													</div>
												</div>	
											</form>
				</div>



				<hr> <hr><!--          Tenders page PAGe    businesszFGF
ADD BSINESS AND TENDERS HERE FORM
///////////////////////////////-->
		<div class="container">
                  	<div class="row">
                  		<h3 class="title">Business and Tenders</h3>

					<form action="" method="post" enctype="multipart/form-data">
						<?php
							if(isset($errMSG1)){
									?>
						            <div class="alert alert-danger">
						            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG1; ?></strong>
						            </div>
						            <?php
							}?>
													<?php
														if(isset($msg20)){
															echo $msg20;
														}
													?>	
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="name" class="form-control login-field" value="" placeholder="Name of Manager" id="login-name" required />
							  <label class="login-field-icon fui-user" for="login-name">Name of consultant</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="business" class="form-control login-field" value="" placeholder="Name of business" id="login-name" required />
							  <label class="login-field-icon fui-user" for="login-name">Name of Business</label>
							</div>

							<div class="form-group col-md-3 col-sm-3">
							  <textarea type="text" name="description" class="form-control login-field" value="" placeholder="Description Here..." id="login-pass" required > </textarea>
							  <label class="login-field-icon fui-lock" for="login-pass">Description here.... </label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							 <select class="form-control" name="cartegory" required>
							     <option value="">Select</option>
							         <option value="finance">Financers</option>
							        <option value="cons">Consoltants</option>
							        <option value="market">Marketers</option>
							        <option value="supply">Suppliers</option>
							        <option value="patner">Patners</option>
							         <option value="tend">Tenders</option>
							          <option value="space">Spaces</option>
							          <option value="trans">Transporters</option>
							        
							        
							    </select>
							     <label class="login-field-icon fui-lock" for="login-pass">Cartegory </label>
							 </div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="price" class="form-control login-field" value="" placeholder="Price" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass">Pricing</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="contact" class="form-control login-field" value="" placeholder="Contact" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass">Contact</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="location" class="form-control login-field" value="" placeholder="Location" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass">Location</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							<label class="control-label">Item Img.</label>
       						 <input class="input-group form-control" type="file" name="photo" accept="image/*" />
       						 </div>
							<div class="form-group col-md-3 col-sm-3">
							<input class="btn btn-primary btn-lg btn-block" value="Add Business" name="update_tenders" type="submit"/><br>
							
							</div>
						</form>

							
					</div>
				</div>  
				<hr>
									<div class="container">

													<?php
														if(isset($msg21)){
															echo $msg21;
														}
													?>	
											<form class="form-horizontal" action="#" method="post">
												<div class="form-group">
													<h3 class=" title"> Delete Tenders and Business</h3>

																	
													<div class="col-md-5">
														<input type="text" class="form-control input-sm " placeholder="Enter Business Tittle" name="delete" required />
													</div>
												</div>	
													
												<div class="form-group">
													<div class="col-md-2 col-md-offset-8">
														<input type="submit" class="btn btn-danger btn-lg btn-block" name="delete_tenders" value="Delete Business" />
													</div>
												</div>	
											</form>
				</div>
<hr> <hr><!--          CONNECTIONS AND JOBS page PAGe    businesszFGF
ADD CONNECTIONS AND JOBS HERE FORM
///////////////////////////////-->
		<div class="container">
                  	<div class="row">
                  		<h3 class="title">Connections and Jobs</h3>

					<form action="" method="post" enctype="multipart/form-data">
						<?php
							if(isset($errMSG1)){
									?>
						            <div class="alert alert-danger">
						            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG1; ?></strong>
						            </div>
						            <?php
							}?>
													<?php
														if(isset($msg30)){
															echo $msg30;
														}
													?>	
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="name" class="form-control login-field" value="" placeholder="Name of Manager" id="login-name" required />
							  <label class="login-field-icon fui-user" for="login-name">Name</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="business" class="form-control login-field" value="" placeholder="Name of business" id="login-name" required />
							  <label class="login-field-icon fui-user" for="login-name">Name of Business/Proffession</label>
							</div>

							<div class="form-group col-md-3 col-sm-3">
							  <textarea type="text" name="description" class="form-control login-field" value="" placeholder="Description Here..." id="login-pass" required > </textarea>
							  <label class="login-field-icon fui-lock" for="login-pass">Profile description...(job) </label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							 <select class="form-control" name="cartegory" required>
							     <option value="">Select</option>
							         <option value="prof">Proffessionals</option>
							        <option value="icons">Business Icons</option>
							        <option value="web">Web and Graphics</option>
							        <option value="cloths">Clothing Designers</option>
							        <option value="modelers">Models and Fashionisters</option>
							        <option value="poets">Writers and Poets</option>
							         <option value="music">Musicians and and Comedians</option>
							          <option value="film">Film Maker and actors</option>
							           <option value="sports">Sports persons</option>
							           <option value="jobs">Jobs</option>
							        
							        
							    </select>
							     <label class="login-field-icon fui-lock" for="login-pass">Cartegory </label>
							 </div>
							<div class="form-group col-md-3 col-sm-3">
							  <textarea type="text" name="price" class="form-control login-field" value="" placeholder="achievements" id="login-pass" required ></textarea>
							  <label class="login-field-icon fui-lock" for="login-pass">Key Achievments</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="contact" class="form-control login-field" value="" placeholder="Contact" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass">Contact</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="location" class="form-control login-field" value="" placeholder="Location" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass">Location</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="linked" class="form-control login-field" value="" placeholder="Web Link" id="login-pass"  />
							  <label class="login-field-icon fui-lock" for="login-pass">Website link(optional)</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							<label class="control-label">Item Img.</label>
       						 <input class="input-group form-control" type="file" name="photo" accept="image/*" />
       						 </div>
							<div class="form-group col-md-3 col-sm-3">
							<input class="btn btn-primary btn-lg btn-block" value="Add Connect" name="update_jobs" type="submit"/><br>
							
							</div>
						</form>

							
					</div>
				</div>  
				<hr>
									<div class="container">

													<?php
														if(isset($msg31)){
															echo $msg31;
														}
													?>	
											<form class="form-horizontal" action="#" method="post">
												<div class="form-group">
													<h3 class=" title"> Delete Connections and Jobs</h3>

																	
													<div class="col-md-5">
														<input type="text" class="form-control input-sm " placeholder="Enter Business Tittle" name="delete" required />
													</div>
												</div>	
													
												<div class="form-group">
													<div class="col-md-2 col-md-offset-8">
														<input type="submit" class="btn btn-danger btn-lg btn-block" name="delete_jobs" value="Delete Connect" />
													</div>
												</div>	
											</form>
				</div>

<hr> <hr><!--         ENTERTAIMENT page PAGe    businesszFGF
ADD ENTERTAINMENT HERE FORM
///////////////////////////////-->
		<div class="container">
                  	<div class="row">
                  		<h3 class="title">Entertainment</h3>

					<form action="" method="post" enctype="multipart/form-data">
						<?php
							if(isset($errMSG1)){
									?>
						            <div class="alert alert-danger">
						            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG1; ?></strong>
						            </div>
						            <?php
							}?>
													<?php
														if(isset($msg40)){
															echo $msg40;
														}
													?>	
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="name" class="form-control login-field" value="" placeholder="Name of artist" id="login-name" required />
							  <label class="login-field-icon fui-user" for="login-name">Name of Artist</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="dated" class="form-control login-field" value="" placeholder="Date(dd/mm/yyyy)" id="login-name" required />
							  <label class="login-field-icon fui-user" for="login-name">Date of Perfomance</label>
							</div>

							<div class="form-group col-md-3 col-sm-3">
							  <textarea type="text" name="description" class="form-control login-field" value="" placeholder="Description Here..." id="login-pass" required > </textarea>
							  <label class="login-field-icon fui-lock" for="login-pass">Tickets and Charges...(VIP?), Contact </label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							 <select class="form-control" name="cartegory" required>
							     <option value="">Select</option>
							         <option value="inter">International</option>
							        <option value="camp">Campuses</option>
							        <option value="city">Cities</option>
							        <option value="town">Towns</option>
							        <!-- <option value="poets">Writers and Poets</option>
							         <option value="music">Music and and Comedians</option>
							          <option value="film">Film Maker and actors</option>
							           <option value="sports">Sports persons</option> -->
							        
							        
							    </select>
							     <label class="login-field-icon fui-lock" for="login-pass">Cartegory </label>
							 </div>
							
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="timed" class="form-control login-field" value="" placeholder="Time of Event" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass">Time </label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							  <input type="text" name="location" class="form-control login-field" value="" placeholder="Venue of Event" id="login-pass" required />
							  <label class="login-field-icon fui-lock" for="login-pass">Venue</label>
							</div>
							<div class="form-group col-md-3 col-sm-3">
							<label class="control-label">Event Img.</label>
       						 <input class="input-group form-control" type="file" name="photo" accept="image/*" />
       						 </div>
							<div class="form-group col-md-3 col-sm-3">
							<input class="btn btn-primary btn-lg btn-block" value="Add Entertainment" name="update_event" type="submit"/><br>
							
							</div>
						</form>

							
					</div>
				</div>  
				<hr>
									<div class="container">

													<?php
														if(isset($msg41)){
															echo $msg41;
														}
													?>	
											<form class="form-horizontal" action="#" method="post">
												<div class="form-group">
													<h3 class=" title"> Delete Entertainment</h3>

																	
													<div class="col-md-5">
														<input type="text" class="form-control input-sm " placeholder="Enter artist name" name="delete" required />
													</div>
												</div>	
													
												<div class="form-group">
													<div class="col-md-2 col-md-offset-8">
														<input type="submit" class="btn btn-danger btn-lg btn-block" name="delete_event" value="Delete Connect" />
													</div>
												</div>	
											</form>
				</div>


<hr>      
		

<hr>

		<a class="login-link1" style="color:#000; background-color:wheat;" href="logout">HOME</a>Click to logout Admin
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
					<p>&copy;Copyright <?php echo date('Y') ; ?>  - Venturez. All rights reserved. | By; <a class="appslab" href="http://appslab.co.ke/"> Apps:Lab</a></p>
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
