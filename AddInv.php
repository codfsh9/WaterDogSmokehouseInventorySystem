<!DOCTYPE html>
<html>
<head>
    
    <title></title>
    <style>
    div
    {
        background-color: white;
        border: black 2px solid;
        width:700px; 
        height:500px;
        margin-left:auto;
        margin-right:auto;
    }
</style>
</head>

<body style="background-color:#33475b;">
<h1 style="font-size: xx-large; text-align: center; color:white;">Add Inventory Page</h1>
    <br>
    <p>
        <button onclick="window.location.href='MainPage.php'">
        Back to Homepage
        </button>
    </p>
    <!doctype html>
<html>

<div id="addnewinventory">
<h2>Add New Inventory Item</h2>
<form action="" method="post">
<label>Ingredient ID:</label>
<input type="text" name="ingredientid" required placeholder="Please Enter Ingredient ID"/><br><br>
<label>Ingredient Name:</label>
<input type="text" name="ingredientname" required placeholder="Please Enter Ingredient Name"/><br><br>
<label>Description:</label>
<input type="text" name="description" required placeholder="Please Enter Ingredient Description"/><br><br>
<label>Quantity:</label>
<input type="number" name="quantity" required placeholder="Please Enter Ingredient Quantity"/><br><br>

<input type="submit" value=" Submit " name="submit"/><br />
	
</form>
	
</div>
	
</html>

<?php
if(isset($_POST["submit"]))
{
include 'dbconfig.php';

$sql = "INSERT INTO ingredients (ing_id, ing_name, ing_desc, ing_q)
VALUES ('".$_POST["ingredientid"]."','".$_POST["ingredientname"]."','".$_POST["description"]."','".$_POST["quantity"]."')";

if ($conn->query($sql) === TRUE)
{
echo "
    <script type= 'text/javascript'>
        alert('New record created successfully');
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
