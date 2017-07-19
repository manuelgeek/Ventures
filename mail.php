<?php
										
										if(isset($_POST["btnContactUs"])){

										if($_POST["name"]==""||$_POST["email"]==""||$_POST["subject"]==""||$_POST["message"]==""){
										echo "Fill All Fields...";
										}else                /* send the submitted data */
											{
											$name=$_REQUEST['name'];
											$email=$_REQUEST['email'];
											$subject=$_REQUEST['subject'];
											$message=$_REQUEST['message'];
											if (($name=="")||($email=="")||($subject=="")||($message==""))
												{

												$msg = "<div class='alert alert-danger col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2'>
												<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Fill All The Fields !
												</div>";

												}
											else{        
												$from="From: $name<$email>\r\nReturn-path: $email";
												$subject="Venturez Contact Mail";
												//$recipient = "info@venturezhub.com";

												if(mail("info@venturezhub.com", $subject, $message, $from)){

														$msg = "<div class='alert alert-success col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2'>
														<span class='fa fa-inbox'></span> &nbsp; Email Sent successfully. Thank You !
														</div>";
															}
													else{
														$msg = "<div class='alert alert-success col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2'>
															<span class='fa fa-inbox'></span> &nbsp; Email Failed to send, try again !
															</div>";
													}

												}
											}   
											}	


								  ?>