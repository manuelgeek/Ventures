<?php
session_start();
include_once("db.php");
include '../users/login.php';
//include_once("dbconfig.php");

 $query4 = $MySQLi_CON->query("SELECT * FROM asawa_new WHERE new_id='$_SESSION[vary]'");
            $message=$query4->fetch_array(); 

$query3 = $MySQLi_CON->query("SELECT * FROM users WHERE email='$_SESSION[userSession]'");
          $row=$query3->fetch_array();


                $comment = trim($_POST['comment']);
                $id = $message['new_id'];
                  $email = $row['name'];
                  if ($comment !='') {
                  $query6 = $MySQLi_CON->query("INSERT INTO message_comm(postID,email,comment) VALUES('$id','$email','$comment')"); 
                  //$query6 = execute();
                  }                
              
           ?>