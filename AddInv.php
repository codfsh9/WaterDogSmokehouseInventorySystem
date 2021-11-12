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
<h1 style="text-align: center;">Add Inventory Page</h1>
    <br>
    <p>
        <button onclick="window.location.href='http://localhost/WebsiteProject/MainPage.html'">
        Back to Homepage
        </button>
    </p>
<div>
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
            . $row["ing_desc"]. "</td><td>" . $row["ing_q"] . "</tr></td>";
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
</body>
</html>
