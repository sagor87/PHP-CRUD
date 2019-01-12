<!DOCTYPE HTML>

<?php 
//include 'includes/header.php'; 
include "classes/DbConfig.php";
include "classes/Crud.php";
?>

<?php 
 $db = new Crud();
 $query = "SELECT * FROM user";
 $read = $db->select($query);
?>







<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>php</title>
		<style type="text/css">
			.phpcoding{
				width:900px;
				margin: 0 auto;
				background:#ddd;
				
				min-height:400px;
			}
			.header,.footer{background:#444;color:#fff;text-align:center;padding:20px;}
			.header h2,.footer h2{margin:0;}
			.content{min-height:800px;padding:20px;}
		
		</style>
	</head>
	<body>
		<div class="phpcoding">
		
			<?php include 'includes/header.php'; ?>
			
			<section class="content">
				
				<table class="tblone">
						<tr>
							 <th width="10%">Serial</th>
							 <th width="35%">Name</th>
							 <th width="25%">Email</th>
							 <th width="15%">Skill</th>
							 <th width="15%">Action</th>
						</tr>
						<?php if($read){?>
						<?php 
						$i=1;
						while($row = $read->fetch_assoc()){
						?>
							<tr>
							 <td><?php echo $i++ ?></td>
							 <td><?php echo $row['name']; ?></td>
							 <td><?php echo $row['email']; ?></td>
							 <td><?php echo $row['skill']; ?></td>
							 <td><a href="update.php?id=<?php echo urlencode($row['id']); ?>">
							  Edit</a></td>
						</tr>


						<?php } ?>
						<?php } else { ?>
						<p>Data is not available !!</p>
						<?php } ?>
				</table>
				<a href="create.php">CREATE</a>
				
			
			</section>
			
			<?php include 'includes/footer.php'; ?>
			

		
		</div>
	</body>
</html>