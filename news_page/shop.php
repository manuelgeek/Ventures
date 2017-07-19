
 <?php
     error_reporting( ~E_NOTICE ); // avoid notice

include_once 'db.php';

if(isset($_POST['update_shop']))
{
	$name = $MySQLi_CON->real_escape_string(trim($_POST['name']));
	$description = $MySQLi_CON->real_escape_string(trim($_POST['description']));
	$cartegory = $MySQLi_CON->real_escape_string(trim($_POST['cartegory']));
	$price = $MySQLi_CON->real_escape_string(trim($_POST['price']));
	$contact = $MySQLi_CON->real_escape_string(trim($_POST['contact']));
	$location = $MySQLi_CON->real_escape_string(trim($_POST['location']));


	$imgFile = $_FILES['photo']['name'];
		$tmp_dir = $_FILES['photo']['tmp_name'];
		$imgSize = $_FILES['photo']['size'];
		
		
		 if(empty($imgFile)){
			$errMSG1 = "Please Select Image File.";
		}
		
		 else{
			$upload_dir = 'shop_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '10MB'
				if($imgSize < 10000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG1 = "Sorry, your file is too large. >10 MB";
				}
			}
			else{
				$errMSG1 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		

		
			// if no error occured, continue ....
		if(!isset($errMSG1))
		{



	$query = "INSERT INTO shopping(name, description, cartegory, contact, price, photo, location) VALUES('$name','$description','$cartegory','$contact','$price','$userpic','$location')";

		
		if($MySQLi_CON->query($query))
		{
			$msg10 = "<div class='alert alert-success '>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Venturez Shop Item Update added successfully !
					</div>";
		}
		else
		{
			$msg10 = "<div class='alert alert-danger '>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp;  error while adding !
					</div>";
		}

	}
	}


?>
<?php
if(isset($_POST['delete_shop']))
{
	$delete = $MySQLi_CON->real_escape_string(trim($_POST['delete']));
	// select image from db to delete
		$stmt_select = $MySQLi_CON->query("SELECT photo FROM shopping WHERE name='$delete'");
	//	$stmt_select->execute(array('$_SESSION[userSession]'=>$_GET['upload_pic']));
		$imgRow=$stmt_select->fetch_array();
		unlink("shop_images/".$imgRow['photo']); 
	$stmt_delete = $MySQLi_CON->query("DELETE FROM shopping WHERE name='$delete'");

	$msg11 = "<div class='alert alert-success '>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Shop Item <b>Deleted</b>  successfully !
					</div>";
}
?>