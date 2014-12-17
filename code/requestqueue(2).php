<!DOCTYPE HTML>
<html>

<head>
	<?php 
	include('config.php');

	session_start();
	//if(!isset($_SESSION['username'] ))
		
	  //          header('Location:login.php');
	?>

	<script>
		

	</script>
</head>

<body>
	

	<div class="container">
	
		<div class="table-responsive">
		<table class="order-table table table-hover" id="ridetable">
			<thead>
				<tr>
					<th>Request ID</th>
					<th>Name</th>
					<th>Location</th>
					<th>Subject</th>
					<th>Priority</th>
					
					
					
				</tr>
			</thead>

			<tbody>
				<?php 
				$data = mysql_query( "SELECT * FROM request") or die(mysqli_error());
				while($info = mysql_fetch_array($data)) {

					$requestid = $info["requestid"];
					$name = $info["name"];
					$phone = $info["location"];
					$subject = $info["subject"];
					$description = $info["priority"];
					// $picture = $info["picture"];
// 					$quantity = $info["quantity"];
// 					$location = $info["location"];
// 					$priority=$info["priority"];
					
					

					echo '
						<tr>
							<td>'
								.$requestid.
							'</td>
							
							<td>'
								.$name.
							'</td>';
							
				// 	$splitsource = explode(" ",$info["Source"]);
// 					if ($splitsource[0] == "Building") {
// 						$sourcedata = mysql_query("SELECT * FROM `request` WHERE Building = '".$info["Source"]."'") or die(mysqli_error($con));
// 						
// 						echo '
// 							<td style="display:none">'.$sourceinfo["Neighbour"].'</td>';
// 					} else {
// 						echo	'<td style="display:none"></td>';			
// 					}
					echo 	'<td>'
								.$info["phone"].
							'</td>';
			// 		$splitdest = explode(" ",$info["Destination"]);
// 					if ($splitdest[0] == "Building") {
// 						$destdata = mysqli_query($con, "SELECT * FROM `bldg map` WHERE Building = '".$info["Destination"]."'") or die(mysqli_error($con));
// 						$destinfo = mysqli_fetch_array($destdata);			
// 						echo	'<td style="display:none">'.
// 									$destinfo["Neighbour"].
// 								'</td>';
// 					} else {
// 						echo '<td style="display:none"></td>';
// 					}				
					echo	'<td>'
								.$info["subject"].
							'</td>
							
							<td>'
								.$info["priority"].
							'</td>
							
							<td>'
								.$info[""].
							'</td>
							
							<td>'
								.$info[""].
							'</td>'
								.$seatString.
								
							'<td>
						<a href="update.php?id='.$info["requestid"].'">
						<button class="btn btn-primary" id="'.$info["requestid"].'" type="button" value="Edit">Edit</button></a>
						<button class="btn btn-primary" id="'.$info["requestid"].'" type="button" value="Delete" onclick="removeEntry('.$info["requestid"].')">Delete</button>
					</td>
				</tr>';
				}
				?>

			</tbody>
		</table>
		</div>
	</div>
</body>
</html>