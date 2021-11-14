<html>
	<head>
	
	<style type="text/css">
		
	.div-style 
	{
		background-color:lightgrey;
		width: 750px;
		height: 80px;
		display:block;
		margin-left: auto;
		margin-right: auto;
		padding:10px;
	}
	
	.button-style
	{
		display:inline-block;
		background-color:lightgrey;
		font-size: large;
		font-family:'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;
		padding: 15px;
		margin-left: 35px;
		margin-right: 35px;
		margin-bottom:20px;
		border-top-style: none;
  		border-right-style: none;
  		border-bottom-style: solid;
 		border-left-style: none;
		border-color:black;
		cursor: pointer;
	}

	.button-style:hover
	{
		background-color:black;
		color:white;
	}
	
	.text-style
	{
    	font-size:large;
    	font-family: 'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;
    	text-align:center;
	}

	table
    {
        border-collapse: separate;
        width: 100%;
        height: 150%;
        padding:20px;
        margin-left: auto;
        margin-right: auto;
        font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
        text-align: center;
    }

    th
    {
        background-color: white;
        font-size: x-large;
		height: 50px;
		width:60px;
        padding:10px;
        color: black;
		position: sticky;
      	top: 0;
    }

    tr
    {
        background-color:white;
		text-align:center;
        font-size:medium;
		padding:10px;
    }

    tr:nth-child(even)
    {
        background-color:rgb(199, 199, 199);
		text-align:center;
        font-size: medium;
        padding:10px;
    }

    .div-style2
    {
    background-color: #33475b;
    width: 50%;
    height: 65%;
    margin-left: auto;
    margin-right: auto;
    overflow-y: scroll;
    margin-top: 20px;
    }

	.logout-style
	{
		font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
		font-size: large;
		background-color: lightgrey;
		border: solid 2px black;
		cursor: pointer;
		padding:10px;
		margin-top:50px;
		margin-left:50%;
		margin-right:auto;
	}

	.logout-style:hover
	{
    background-color: black;
    color: white;
    text-align: center;
	}

	.img-style 
	{
		width: 310px; 
		height: 220px;
		position:fixed; 
		top:0; 
		left:0;
	}

	</style>
	
	</head>

	<body style="background-color:#33475b;">
	<h1 style="text-align:center; color:white; font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;">
	<img class="img-style" src="https://www.waterdogsmokehouse.com/wp-content/uploads/2019/12/WATERDOG_LOGO_K1665-4.png"/>
		Dashboard
	</h1>

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
		<div class="div-style2">
		<table align="center">
			<tr>
				<th>Ingredient ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Quantity Max</th>
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
					. $row["ing_desc"]. "</td><td>" . $row["ing_q"] . "</td><td>" . $row["ing_q_max"] . "</tr></td>";
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
		</div>
		<button onclick="window.location.href='Logout.php'" class="logout-style">Logout</button>
	</body>
</html>