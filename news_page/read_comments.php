       <?php
       session_start();
       include_once("db.php");
include_once("dbconfig.php");
$var = $_SESSION['vary'];
                            $query5 = $MySQLi_CON->query("SELECT * FROM message_comm WHERE postID='$var' ORDER BY ID DESC");
                           $count=$query5->num_rows;
                    if($count>0){
                      while ( $comm=$query5->fetch_array()) {
                        ?>
                <div class="col-md-12 card">
                  
                        
                          <p class="text"><?php echo $comm['comment']; ?></p>
                          <span class="phoned"><?php echo $comm['email']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <span class="itemed h5 " style="font-style: italic;"><?php 
                          date_default_timezone_set('Africa/Nairobi');
                              $timestamp1 = $comm['timer'];
                              //$today = date("Y-m-d H:i:s");
                              $passed1 = time() - strtotime($timestamp1);
                              $days1 = floor($passed1 / 86400);
                              $passed1 %= 86400;
                              $hours1 = floor($passed1 / 3600);
                              $passed1 %= 3600;
                              $minutes1 = floor($passed1 / 60);
                              if ($days1>=1) {
                                echo $hours1;    
                              ?>&nbsp;Days&nbsp;<?php
                              }
                              if($hours1>=1){
                              echo $hours1;    
                              ?>&nbsp;Hrs&nbsp;<?php
                                }
                              echo $minutes1; ?>mins ago</span></span>

                         
                         
                       </div>
                      <?php }
                    } else
                      {
                        ?>
                              <tr>
                              <td>No Comments here...</td>
                              </tr>
                              <?php
                      }
                      
                    
                    ?>