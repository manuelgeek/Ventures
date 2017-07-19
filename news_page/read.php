<div class="table-responsive">
	
	<table class="table table-bordered table-condensed table-hover table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>#ID</th>
                <th>News Title</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            
            <?php
			
			require_once 'dbconfig.php';
			include '../users/login.php';
			$query7 = $MySQLi_CON->query("SELECT * FROM users WHERE email='$_SESSION[userSession]'");
          	$row=$query7->fetch_array();

			$query = "SELECT new_id, new_tittle FROM asawa_new WHERE new_footer='$row[name]'";
			$stmt = $DB_con->prepare( $query );
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
		        <td><?php echo $new_id; ?></td>
                <td><?php echo $new_tittle; ?></td>
		        <td> 
		        <a class="btn btn-sm btn-danger" id="delete_product" data-id="<?php echo $new_id; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a>
		        </td>
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No News of you Found</td>
		        </tr>
		        <?php
				
			}
			?>
             
        </tbody>
    </table>
    
</div>