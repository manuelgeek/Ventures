<?php

class paginate
{
	private $db;
	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}
	
	public function dataview($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
               
               <div class="col-md-12 card ">
                <?php if ( $row['new_photo']==''){
                 echo ""; 
                }else {?>
                <div class="col-md-6 col-sm-6 row">
               
               
                	 <img src="new_images/<?php echo $row['new_photo']; ?>"  class="img-responsive" />
              
               </div>
                <?php }
                ?>
               <div class="col-md-6 col-sm-6 row">
                 <a href="news.php?id=<?php echo $row['new_id']; ?>"><h3><?php echo $row['new_tittle']; ?></h3></a>
                  <h5 class="h5"><b><?php echo $row['new_footer']; ?></b></h5>
                   <span class="timed"><?php 
                   	date_default_timezone_set('Africa/Nairobi');
					                		$timestamp1 =  $row['new_time'];
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
					              		 	echo  $minutes1; ?>mins ago</span>
                    </span>
                </div>
                <div class="col-md-12  row">
                	<span><?php
                		$position = 400;
	                	$message = $row['new_body'];
	                	$post = substr($message,0,$position);
	                	// if ($post !="") {
	                	// 	while ($post !="") {
	                	// 		$i=1;
	                	// 		$position = $position +$i;
	                	// 		$message = $row['description'];
	                	// 		$post = substr($message,0,$position);
	                	// 	}
	                	// }
	                	//$post substr($message,0,$position);
	                	echo $post;
	                	echo "...";
                	  ?></span>
                	<a href="news.php?id=<?php echo $row['new_id']; ?>"><b>read more</b></a>
                </div>
               </div>
               
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
		}
		
	}
	
	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();
		
		if($total_no_of_records > 0)
		{
			?><tr><td colspan="3"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];

			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				
				echo "<li><a href='".$self."?page_no=1'>First</a>&nbsp;&nbsp;</li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a>&nbsp;&nbsp;</li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{		
					
					echo "<li class='active'><a href='".$self."?page_no=".$i."'>".$i."</a></li>";

				}
				else
				{	 
					echo "<li><a  href='".$self."?page_no=".$i."'>".$i."</a>&nbsp;&nbsp;</li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a  href='".$self."?page_no=".$next."'>Next</a>&nbsp;&nbsp;</li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a>&nbsp;&nbsp;</li>";
				
			}
			?></td></tr><?php
		}
	}
}