<!DOCTYPE html>
<html>
<head>
    
    <title></title>
    <style>
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
        padding-left:25px;
        padding-right:25px;
        color: black;
    }
    tr
    {
        background-color:white;
        font-size:15px;
    }
    tr:nth-child(even)
    {
        background-color: #f2f2f2;
        font-size: 15px;
        padding:20px;
    }
    div
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
<h1 style="font-size: xx-large; text-align: center; color:white">Supplier Info Page</h1>
    <p>
        <button onclick="window.location.href='MainPage.php'" style="margin-left:45%;">
        Back to Homepage
        </button>
    </p>
    <table id="suppTable">
		<tr>
			<th>Supplier ID</th>
			<th>Name</th>
	    	<th>Phone Number</th>
			<th>Email</th>
		</tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "root", "inventory");
        
        if (mysqli_connect_errno()) {
            echo "Failed to connect: " . mysqli_connect_error();
        }

        $sql = "SELECT * FROM suppInfo";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr><td>" . $row["supp_id"] . "</td><td>" . $row["supp_name"] . "</td><td>"
                . $row["supp_num"] . "</td><td>" . $row["supp_email"] . "</td>";
            }
            echo "</table>";
        } else {
            echo "0 RESULTS";
        }
        mysqli_close($conn);
        ?>
</body>
</html>
