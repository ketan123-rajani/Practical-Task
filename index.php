<?php
	include("connection.php");
	$sql = "SELECT Customer_ID,COUNT(Sub_Category) as counter ,Sub_Category,YEAR(Order_Date) as Year FROM task GROUP BY Customer_ID,Sub_Category,Year";
	$result = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task-4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h2>A list of how many times a customer buys a product from a subcategory repetitively in a year.</h2>
<div class="container" style="margin-top:50px;">
  <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Customer Id</th>
      <th scope="col">Count</th>
      <th scope="col">Sub-Catagory</th>
      <th scope="col">Year</th>
    </tr>
  </thead>
  <tbody>
	<?php
		if($result->num_rows){
		
			while($row = $result->fetch_assoc()){
								
			?>
			
			<tr>
			  <th scope="row"><?php echo $row['Customer_ID'];?></th>
			  <td><?php echo $row['counter']?></td>
			  <td><?php echo $row['Sub_Category']?></td>
			  <td><?php echo $row['Year']?></td>
			<tr>
		<?php
							}
						}
					
			?>
  </tbody>
</table>

</div>

</body>
</html>