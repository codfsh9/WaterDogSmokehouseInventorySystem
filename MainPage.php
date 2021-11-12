<html>
	<head>
	
	<style type="text/css">
		
	.div-style 
	{
		background-color: grey;
		width: 800px;
		height: fit-content;
		display:block;
		margin-left: auto;
		margin-right: auto;
		padding:5px;
	}
	
	.button-style 
	{
		padding: 15px;
		margin-left: 70px;
		margin-right: 10px;
		border: black 2px solid;
		cursor: pointer;
	}
	
	.text-style
	{
    font-size: x-large;
    font-family: 'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;
    text-align:center;
	}
	table
    {
        border-collapse: separate;
        width: auto;
        height: auto;
        padding:10px;
        margin-left: auto;
        margin-right: auto;
        font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
        text-align: left;
    }
    th
    {
        background-color: white;
        font-size: 20px;
        padding-left:auto;
        padding-right:auto;
        color: black;
    }
    tr
    {
        background-color:white;
		text-align:center;
        font-size:15px;
		padding:20px;
    }
    tr:nth-child(even)
    {
        background-color:rgb(199, 199, 199);
		text-align:center;
        font-size: 15px;
        padding:20px;
    }
    .div-style2
    {
        background-color: #33475b;
        border: black 2px solid;
        width:700px; 
        height:500px;
        margin-left:auto;
        margin-right:auto;
    }

	</style>
	
	</head>

	<body style="background-color:#33475b;">
	<h1 style="font-size: xx-large; text-align: center; color:white;">Dashboard</h1>
    	<br>
		<div class="div-style">
    	<p class="text-style">
        	<button onclick="window.location.href='AddInv.php'" class="button-style">
       		Add Inventory
        	</button>
        	<button onclick="window.location.href='RemInv.php'" class="button-style">
       		Remove Inventory
        	</button>
        	<button onclick="window.location.href='ViewSupp.php'" class="button-style">
       		Supplier Information
       		</button>
    	</p>
		</div>
		<table>
			<tr>
				<th>Ingredient ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Quantity</th>
			</tr>
		<?php
			$conn=mysqli_connect("localhost","root","root","inventory");
			 // Check connection
			 if (mysqli_connect_errno())
			 {
			 echo "Failed to connect: " . mysqli_connect_error();
			}
			
			$sql = "SELECT * FROM ingredients";
			$result = $conn->query($sql);
		
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc())
				{
					echo "<tr><td>" . $row["ing_id"]. "</td><td>" . $row["ing_name"] . "</td><td>"
					. $row["ing_desc"]. "</td><td>" . $row["ing_q"] . "</td><td>" . $row["ing_q_max"] . "</td></tr>";
				}
				echo "</table>";
			}
			else 
			{
				echo "0 RESULTS";
			}
			mysqli_close($conn);
		?>
		</table>
	</body>
</html>