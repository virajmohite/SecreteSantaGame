<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta HTTP-EQUIV="Pragma" content="no-cache">
	<meta HTTP-EQUIV="Expires" content="-1" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secrete Santa Game</title>
	<script></script>
	<script src="jquery.tabledit.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src="delete.js"></script>
   
	
<?php
	

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "ss_db";
	
	$con = new mysqli($servername, $username, $password, $database );
	
	
if(isset($_POST['s_id'])){	

	$sql = "SELECT * FROM `validsanta_tb` WHERE s_id = '".$_POST['s_id']."'";
	if(mysqli_query($con,$sql))
	{
		if ($result=mysqli_query($con,$sql))
		{
			  
			if(mysqli_num_rows($result)>0)
			{
				$row1 = mysqli_fetch_array($result);
					
				$santasname = $row1['s_name'];		
				echo "Welcome ".$santasname."\n";

				$sql2 = "SELECT * FROM `validsanta_tb` WHERE s_id = '".$_POST['s_id']."' AND ssof_name IS NOT NULL ";
				if(mysqli_query($con,$sql2))
				{
					if ($result2=mysqli_query($con,$sql2))
					{
			  
						if(mysqli_num_rows($result2)>0)
						{
							$row2 = mysqli_fetch_array($result2);
							$sql3 = "SELECT * FROM `validsanta_tb` WHERE id = '".$row2['ssof_name']."'";
							$result3=mysqli_query($con,$sql3);
							$row3= mysqli_fetch_array($result3);

							echo "You have already been Secrete Santa of  ".$row3['s_name'];
					
						}
						else
						{
							//echo "Display List";
							$sql4 = "SELECT `id` FROM `validsanta_tb` WHERE yourSecreteSanta IS NULL AND s_id != '".$_POST['s_id']."'";
							$result4=mysqli_query($con,$sql4);
							
							/*$resulti = array();
							while($row4= mysqli_fetch_array($result4))
							{
									array_push($resulti,array("id"=>$row4['id']));
							}
							//echo json_encode(array("result"=>$resulti));
							print_r($resulti);*/
						}
					}
			
				}

					
			}
			else
			{
				echo "Please Enter Valid Mobile Number";
			}
		}
	
	
	}
}		
?>


	<!-- DELETE DATA -->
<?php
	if(isset($_POST['delete_button'])){
		$id = $_POST['deleteid'];
		$santasnameP = $_POST['santasnameP'];
		
		//echo "<script>alert($id);</script>";
		
		/*$sql_delete = "DELETE FROM emp WHERE id = $id";
		$result = mysqli_query($conn,$sql_delete);
		if($result){
					echo "<script>alert('Emp Deleted');</script>";
					header("Refresh:0");
		}*/

		$sql5 = "SELECT * FROM `validsanta_tb` WHERE s_name = '".$santasnameP."'";
			$result5=mysqli_query($con,$sql5);
			$row5= mysqli_fetch_array($result5);
			//echo "You have got ".$row5['id']." that you need to to be insert ";
			$ssof_nameVar = $_POST['deleteid'];
			$yourSecreteSantaVar = $row5['id'];
			$queryUpdate1 = "UPDATE `validsanta_tb` SET `yourSecreteSanta`= '".$yourSecreteSantaVar."',`yssTimestamp`= NOW() WHERE id = '".$ssof_nameVar."' ";
			$queryUpdate2 = "UPDATE `validsanta_tb` SET `ssof_name`= '".$ssof_nameVar."',`ssonTimestamp`= NOW() WHERE id = '".$yourSecreteSantaVar."' ";
						
			if(mysqli_query($con,$queryUpdate1) && mysqli_query($con,$queryUpdate2))
			{	
				//echo "updated";
				$sql6 = "SELECT * FROM `validsanta_tb` WHERE id = '".$ssof_nameVar."'";
				$result6=mysqli_query($con,$sql6);
				$row6= mysqli_fetch_array($result6);
				echo "You have to be Secrete Santa of ".$row6['s_name'];
				
			}
			else 
			{
				//echo "Not updated";
				echo "<script>alert('Not updated');</script>";
					header("Refresh:0");
			}

	}
			
?>		
	

	
</head>
  <body>
    <div class="container"
    align="center">
		<p><br></p>
		
		<p><br></P>
			<table class="table table-straped table-bordered table-hover" id="mydata">
		
		<?php
		if (isset($result4)) {
		?>
		<thead>
			<tr>
				<th> id </th> 
				<th> DELETE </th>
			</tr>
		</thead>
		<?php
		}
		?>
		<tbody>
				<?php
				if (isset($result4)) {
				while($row4= mysqli_fetch_array($result4)){
					//print_r($row);
					?>
					<tr>
						<td><?= $row4['id']?></td>
						
						
						
						<td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?= $row4['id'] ?>">
							    Select
							</button></td>
					</tr>
					
					
					<div class="modal fade" id="deleteModal<?= $row4['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Select</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <form method="POST">
						  <div class="modal-body">
						  <input type="hidden" value="<?= $row4['id'] ?>" name="deleteid">
						  <input type="hidden" value="<?= $santasname ?>"  name="santasnameP">
							<div class="alert alert-danger" role="alert">
							  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							  <span class="sr-only">Select</span>Do You really want to Select that number  
							  </div>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" name="delete_button" class="btn btn-primary">Selete</button>
						  </div>
						</form>

						</div>
					  </div>
					</div>
					<?php
					}
				}
				?>
				    
		</tbody>
		</table>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
  </body>
</html>
<script>
	
</script>