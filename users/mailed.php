<?php
					
						             /* send the submitted data */
					
						
						$message="Your password was Reset Successfully, Your New Password is: $upass";
													    
						$from="Email: <$email>\r\nPhone: $phone";
					$subject="Venturez Account Password Reset";
								//$recipient = "info@venturezhub.com";

						mail("$email", $subject,  $from, $message);								
					
			  ?>