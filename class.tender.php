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
			

              <div class="col-md-6  col-xs-12 col-sm-6 row-eq-height" id="mauni">
                
                <?php if ( $row['photo']==''){
                 echo ""; 
                }else {?>
                	
                	 <img  src="news_page/tender_images/<?php echo $row['photo']; ?>"  class="item_image img-responsive" />
                	
               <?php }
                ?>
                <h6 class="itemed">Name:<?php echo $row['name']; ?></h6>
                <h6 class="itemed">Business:<?php echo $row['business']; ?></h6>
               
               		 <p class="service-desc"><?php echo $row['description']; ?></p>
               	
              
               <span class="phoned"> <b>Telephone:</b><?php echo $row['contact']; ?><br></span>
               <span class="phoned"> <b>Location:</b><?php echo $row['location']; ?><br></span>
               <span class="priced"> <b>Rates:</b><?php echo $row['price']; ?><br></span>
               <!--<span class="timed" ><b>Date <br></span></b><span class="timed"><?php //echo $row['time']; ?></span></p>-->
                
            
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