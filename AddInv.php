<html>
<head>
    
    <title></title>
    <style>
    .div-style
    {
    background-color: #E3E3E3;
    border: black 2px solid;
    width: 700px;
    height: 400px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    }

    h2
    {
    text-align: center;
    padding-bottom: 20;
    }

    label
    {
        padding:15px;
        margin-left:50px;
        text-align:center;
    }

    .button-style1
    {
        display:inline-block;
        font-size:medium;
    	font-family: 'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;
    	text-align:center;
        padding:10px;
        margin-top:25px;
        margin-left:75px;
        margin-right:60px;
        cursor:pointer;
    }

    .button-style2
    {
        display:inline-block;
        font-size:medium;
    	font-family: 'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;
    	text-align:center;
        padding:10px;
        margin-top:25px;
        margin-right:50px;
        cursor:pointer;
    }
    </style>
</head>

<body style="background-color:#33475b;">
<h1 style="text-align: center; color: white; font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif; padding-top: 20;">
	Add Inventory
</h1>
<br>
<div id="addnewinventory" class="div-style">
<h2 style="text-align:center; color:black; font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;">
	Enter Contents Below
</h2>
	
<form action="" method="post">

<label style="font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;">Ingredient ID:</label>
<input type="text" name="ingredientid" required placeholder="Enter Ingredient ID"/><br><br>

<label style="font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;">Ingredient Name:</label>
<input type="text" name="ingredientname" required placeholder="Enter Ingredient Name"/><br><br>

<label style="font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;">Description:</label>
<input type="text" name="description" placeholder="Enter Ingredient Description"/><br><br>

<label style="font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;">Quantity:</label>
<input type="number" name="quantity" required placeholder="Enter Ingredient Quantity"/><br><br>

<label style="font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;">Quantity-Max:</label>
<input type="number" name="quantity-max" required placeholder="Enter Ingredient Quantity Max"/><br><br>

<button onclick="window.location.href='MainPage.php'" class="button-style1">
< Back to Homepage
</button>

<input type="submit" value=" Add " name="submit" class="button-style2">
</form>
</div>
</html>

<?php
if(isset($_POST["submit"]))
{
header("Location: mainpage.php");
include 'dbconfig.php';

$sql = "INSERT INTO ingredients (ing_id, ing_name, ing_desc, ing_q, ing_q_max)
VALUES ('".$_POST["ingredientid"]."','".$_POST["ingredientname"]."','".$_POST["description"]."','".$_POST["quantity"]."','".$_POST["quantity-max"]."')";

if ($conn->query($sql) === TRUE)
{
echo "
    <script type= 'text/javascript'>
        alert('New item added successfully');
    </script>";
} 
else 
{
    echo 
    "<script type= 'text/javascript'>
        alert('Error: " . $sql . "<br>" . $conn->error."');
    </script>";
}

$conn->close();
}
?>
</body>
</html>
