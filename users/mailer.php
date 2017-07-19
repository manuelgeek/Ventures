<?php
										
				

						             /* send the submitted data */

						$message="Account Created By The Above ";
						$body="Welcome to Venturez Business Club\n You have joined a team of passionate entrepreneurs commited to making a better world the business way.\n We shall send you the guide lines soon\n The Venturez Business Team,\n +254 729 515 273- Joel\n  +254 712 423 911 - Lindah."	;				
											    
						$from="Name: $uname<$email>\r\nPhone: $phone \n Password: $upass";
						$fromed="Name: $uname<$email>\r\nPhone: $phone";
					$subject="Venturez Account Creation";
								//$recipient = "info@venturezhub.com";

						mail("info@venturezhub.com", $subject,$fromed ,$message );

						mail("$email", $subject,  $from, $body);								
			


			  ?>