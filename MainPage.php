<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventory Dashboard</title>
	<style type="text/css">
		.div-style {
			background-color: lightgrey;
			width: 750px;
			height: 80px;
			display: block;
			margin-left: auto;
			margin-right: auto;
			padding: 10px;
		}

		.button-style {
			display: inline-block;
			background-color: #D3D3D3;
			font-family: 'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;
			font-size: large;
			padding: 15px;
			margin-left: 35px;
			margin-right: 35px;
			margin-bottom: 25%;
			margin-top: 0%;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: solid;
			border-left-style: none;
			border-color: black;
			cursor: pointer;
		}

		.viewSupp-button-style {
			display: inline-block;
			background-color: #D3D3D3;
			font-family: 'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;
			font-size: large;
			padding: 15px;
			margin-left: 35px;
			margin-right: 35px;
			margin-bottom: 25%;
			margin-top: 0%;
			border-top-style: none;
			border-right-style: none;
			border-bottom-style: solid;
			border-left-style: none;
			border-color: black;
			cursor: pointer;
		}

		.button-style:hover {
			background-color: black;
			color: white;
			margin-bottom: 0px;
			margin-top: 0px;
		}

		.viewSupp-button-style:hover {
			background-color: black;
			color: white;
			margin-bottom: 0px;
			margin-top: 0px;
		}

		.text-style {
			font-size: large;
			font-family: 'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;
			text-align: center;
		}

		table {
			border-collapse: collapse;
			width: 100%;
			padding: 10px;
			margin-left: auto;
			margin-right: auto;
			font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
			text-align: center;
		}

		th {
			background-color: white;
			font-size: x-large;
			height: 50px;
			width: 60px;
			padding: 10px;
			color: black;
			position: sticky;
			top: 0;
		}

		tr {
			background-color: white;
			text-align: center;
			font-size: medium;
			height: 50px;
			padding: 10px;
			border-bottom: 1px solid #ddd
		}

		tr:nth-child(even) {
			background-color: rgb(199, 199, 199);
			text-align: center;
			font-size: medium;
			height: 50px;
			padding: 10px;
		}

		.div-style2 {
			background-color: #33475b;
			width: 50%;
			height: 65%;
			margin-left: auto;
			margin-right: auto;
			overflow-y: scroll;
			margin-top: 50px;
		}

		.logout-style {
			font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
			font-size: large;
			background-color: lightgrey;
			border: solid 2px black;
			cursor: pointer;
			padding: 10px;
			margin-top: 15px;
			margin-left: 900px;
			margin-right: auto;
		}

		.logout-style:hover {
			background-color: black;
			color: white;
		}

		.img-style {
			width: 310px;
			height: 220px;
			position: fixed;
			top: 20px;
			left: 0px;
		}

		#myInput {
			background-position: 10px 10px;
			background-repeat: no-repeat;
			width: 35%;
			font-size: 16px;
			padding: 12px 20px 12px 40px;
			border: 1px solid #ddd;
			margin-bottom: 12px;
		}

		.add-div-style {
			background-color: #E3E3E3;
			border: black 2px solid;
			width: 500px;
			height: 300px;
			padding: 20px;
			margin-left: auto;
			margin-right: auto;
			text-align: center;
		}

		.add-label-style {
			padding: 15px;
			margin-left: 50px;
			text-align: center;
		}

		.remove-div-style {
			background-color: #E3E3E3;
			border: black 2px solid;
			width: 700px;
			height: 300px;
			margin-left: auto;
			margin-right: auto;
			text-align: center;
		}

		.remove-label-style {
			padding: 15px;
			margin-left: 50px;
			text-align: center;
		}

		.remove-button-style {
			display: inline-block;
			font-size: medium;
			font-family: 'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;
			text-align: center;
			padding: 10px;
			margin-top: 25px;
			margin-right: 50px;
			cursor: pointer;
		}

		.add-button-style {
			display: inline-block;
			font-size: medium;
			font-family: 'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;
			text-align: center;
			padding: 10px;
			margin-top: 15px;
			margin-right: 50px;
			cursor: pointer;
		}

		/* The Modal (background) */
		.modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			padding-top: 75px;
			/* Location of the box */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
			position: relative;
			background-color: #fefefe;
			margin: auto;
			padding: 0;
			border: 1px solid #888;
			width: 50%;
			height: 50%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-animation-name: animatetop;
			-webkit-animation-duration: 0.4s;
			animation-name: animatetop;
			animation-duration: 0.4s
		}

		/* Add Animation */
		@-webkit-keyframes animatetop {
			from {
				top: -300px;
				opacity: 0
			}

			to {
				top: 0;
				opacity: 1
			}
		}

		@keyframes animatetop {
			from {
				top: -300px;
				opacity: 0
			}

			to {
				top: 0;
				opacity: 1
			}
		}

		/* The Close Button */
		.close {
			color: white;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

		.add-modal-header {
			padding: 2px 15px;
			background-color: #5cb85c;
			color: white;
		}

		.remove-modal-header {
			padding: 2px 15px;
			background-color: #b85c5c;
			color: white;
		}

		.modal-body {
			padding: 2px 15px;
		}
	</style>
</head>

<body style="background-color:#33475b;">
	<h1 style="text-align:center; color:white; font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;">
		<img class="img-style" src="https://www.waterdogsmokehouse.com/wp-content/uploads/2019/12/WATERDOG_LOGO_K1665-4.png" alt="Waterdog Smokehouse Logo" style="left: 0px; top: 0px">
	</h1>
	<h1 style="text-align: center; color: white; font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif; padding-top: 10;">
		Dashboard
	</h1>

	<br>
	
	<div class="div-style">
		<p class="text-style">
			<button class="button-style" href="#addModal">
				Add
			</button>
			<button class="button-style" href="#removeModal">
				Remove
			</button>
			
			<button onclick="window.location.href='ViewSupp.php'" class="viewSupp-button-style">
				Supplier Information
			</button>
			<button onclick="window.location.href='MainPage.php'" class="button-style">
				Refresh
			</button>

			
		</p>
	</div>
	<div class="div-style2">
		<input type="text" id="myInput" onkeyup="searchFunction()" placeholder="Search for item.." title="Type in a name">
		<table id="myTable">
			<tr>
				<th>Ingredient ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Quantity Max</th>
			</tr>
			<?php
			$conn = mysqli_connect("localhost", "root", "root", "inventory");
			// Check connection
			if (mysqli_connect_errno()) {
				echo "Failed to connect: " . mysqli_connect_error();
			}

			$sql = "SELECT * FROM ingredients";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["ing_id"] . "</td><td>" . $row["ing_name"] . "</td><td>"
						. $row["ing_desc"] . "</td><td>" . $row["ing_q"] . "</td><td>" . $row["ing_q_max"] . "</tr></td>";
				}
				echo "</table>";
			} else {
				echo "0 RESULTS";
			}
			mysqli_close($conn);
			?>
		</table>
	</div>

	<!-- The Add Modal -->
	<div id="addModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<div class="add-modal-header">
				<span class="close">&times;</span>
				<h2 style="text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
					Add Inventory
				</h2>
			</div>
			<br>
			<div class="modal-body">

				<body style="background-color:#33475b;">
					<div id="addnewinventory" class="add-div-style">
						<form action="" method="post">

							<label class="add-label">Ingredient ID:</label>
							<input type="text" name="ingredientid" required placeholder="Enter Ingredient ID" /><br><br>

							<label class="add-label">Ingredient Name:</label>
							<input type="text" name="ingredientname" required placeholder="Enter Ingredient Name" /><br><br>

							<label class="add-label">Description:</label>
							<input type="text" name="description" placeholder="(Optional)" /><br><br>

							<label class="add-label">Quantity:</label>
							<input type="number" name="quantity" required placeholder="Enter Ingredient Quantity" /><br><br>

							<label class="add-label">Quantity-Max:</label>
							<input type="number" name="quantity-max" required placeholder="Enter Ingredient Quantity Max" /><br><br>

							<input type="submit" value=" Add " name="submit1" class="add-button-style">
						</form>
					</div>
				</body>
			</div>
			<?php
			if (isset($_POST["submit1"])) {

				include 'dbconfig.php';

				$sql = "INSERT INTO ingredients (ing_id, ing_name, ing_desc, ing_q, ing_q_max)
				VALUES ('" . $_POST["ingredientid"] . "','" . $_POST["ingredientname"] . "','" . $_POST["description"] . "','" . $_POST["quantity"] . "','" . $_POST["quantity-max"] . "')";

				if ($conn->query($sql) === TRUE) {
					echo " <script type= 'text/javascript'>
										alert('New item added successfully');
										
										
					</script>";
				} else {
					echo
					"<script type= 'text/javascript'>
        			alert('Error: " . $sql . "<br>" . $conn->error . "');
    				</script>";
				}
				$conn->close();
			}
			?>
		</div>
	</div>

	<!-- The Remove Modal -->
	<div id="removeModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="remove-modal-header">
				<span class="close">&times;</span>
				<h2 style="text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
					Remove Inventory
				</h2>
			</div>
			<br>
			<div class="modal-body">

				<body style="background-color:#33475b;">
					<br>
					<div id="removeinventory" class="remove-div-style">
						<form action="" method="post">
							<label style="font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;">
								Ingredient ID:
							</label>
							<input type="text" name="ingredientid" required placeholder="Enter Ingredient ID" /><br><br>

							<label style="font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;">
								Ingredient Name:
							</label>
							<input type="text" name="ingredientname" required placeholder="Enter Ingredient Name" /><br><br>

							<input type="submit" value=" Remove " name="submit2" class="remove-button-style">
						</form>
					</div>
				</body>
			</div>
			<?php
			if (isset($_POST["submit2"])) {
			
			include 'dbconfig.php';
	
				$sql = "DELETE FROM ingredients 
				WHERE ing_id='" . $_POST["ingredientid"] . "' or ing_name = '" . $_POST["ingredientname"] . "'";

				if ($conn->query($sql) === TRUE) {
					echo
					"<script type= 'text/javascript'>
							alert('" . $_POST["ingredientname"] . "' + ' successfully deleted');
							</script>";
				} else {
					echo
					"<script type= 'text/javascript'>
							alert('Error: " . $sql . "<br>" . $conn->error . "');
							</script>";
				}

				$conn->close();
			}
			?>
		</div>
	</div>

	<button onclick="window.location.href='Logout.php'" class="logout-style">Logout</button>

	</div>

	<!-- Search Box Script -->
	<script>
		function searchFunction() {
			var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			table = document.getElementById("myTable");
			tr = table.getElementsByTagName("tr");
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[1];
				if (td) {
					txtValue = td.textContent || td.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}
	</script>

	<!-- Modal Script-->
	<script>
		// Get the button that opens the modal
		var btn = document.querySelectorAll("button.button-style");

		// All page modals
		var modals = document.querySelectorAll('.modal');

		// Get the <span> element that closes the modal
		var spans = document.getElementsByClassName("close");

		// When the user clicks the button, open the modal
		for (var i = 0; i < btn.length; i++) {
			btn[i].onclick = function(e) {
				e.preventDefault();
				modal = document.querySelector(e.target.getAttribute("href"));
				modal.style.display = "block";
			}
		}

		// When the user clicks on <span> (x), close the modal
		for (var i = 0; i < spans.length; i++) {
			spans[i].onclick = function() {
				for (var index in modals) {
					if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
				}
			}
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target.classList.contains('modal')) {
				for (var index in modals) {
					if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
				}
			}
		}
	</script>
	<script>
	function Reload(){
		window.location.reload();
		}
		</script>

</body>

</html>