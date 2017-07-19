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

if(isset($_POST['btn-post']))
{
  $new_tittle = $MySQLi_CON->real_escape_string(trim($_POST['title']));
 
  $new_body = $MySQLi_CON->real_escape_string(trim($_POST['body']));
  
  $new_footer = $row['name'];
  
  $imgFile = $_FILES['photo']['name'];
    $tmp_dir = $_FILES['photo']['tmp_name'];
    $imgSize = $_FILES['photo']['size'];


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
            if($imgSize < 5000000)        {
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
            $query = "INSERT INTO asawa_new(new_tittle, new_body, new_footer, new_photo) VALUES('$new_tittle','$new_body','$new_footer','$userpic')";

    
    if($MySQLi_CON->query($query))
    {
            $msg1 = "<div class='alert alert-success col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2' data-dismiss='alert'>
                  <button class='close ' data-dismiss='alert'>&times;</button>
                  <span class='glyphicon glyphicon-info-sign'></span> &nbsp; News Posted
                  </div>";
                  header("Location index");
          }
          else{
            $msg1 = "<div class='alert alert-danger col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2' data-dismiss='alert'>
                  <button class='close ' data-dismiss='alert'>&times;</button>
                  <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while posting!
                </div>";
          }
        }

}
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
   <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

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
<section>
      <div class="container" id="post_body">

            <div class=" col-md-8 col-md-offset-2 row text-center">
              <h2 class="title ">Venturez hub news post</h2>
              <p> Make your posts below</p>
            </div>
            <div class="col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
              <?php
          if(isset($errMSG)){
        ?>
               <div class="alert alert-danger col-md-8 col-md-offset-2">
                <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                </div>
              <?php
        }?>
        <?php
          if(isset($msg1)){
            echo $msg1;
        }
      ?>  
        <form method="post" enctype="multipart/form-data">
              <div class="form-group col-md-8 col-md-offset-2">
                <label class="login-field-icon fui-user" for="login-name">Title of Post </label>
                <input type="text" name="title" class="form-control login-field" value="" placeholder="Title of Post" id="login-name" required />
                
              </div>

              <div class="form-group col-md-8 col-md-offset-2">
              <label class="login-field-icon fui-lock" for="login-pass">Body.... </label>
                 <textarea type="text" name="body" class="form-control login-field" value="" placeholder="Message Here..." id="login-pass" required > </textarea>
                <script>
                          CKEDITOR.replace( 'body' );
                      </script>
                
              </div>
              
              
              
              <div class="form-group col-md-8 col-md-offset-2">

              <label class="control-label">Post Img(optional)</label>
                   <input class="input-group form-control" type="file" name="photo" accept="image/*" />
                   </div>
              <div class="form-group col-md-8 col-md-offset-2">
              <input class="btn btn-primary  btn-block" value="Post Product" name="btn-post" type="submit"/><br>
              
              </div>
        </form>
            </div>

            
      </div>
      <div class="col-md-6 col-md-offset-3">
            <p>OR You can also
            <a href="delete_post" class="btn btn-danger" >Delete Post</a> Here...</p>
      </div>
      <br>
    </section>

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
