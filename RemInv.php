<html>
<head>
    <title></title>
<style>
.div-style
{
    background-color: white;
    border: black 2px solid;
    width:700px; 
    height:500px;
    margin-left:auto;
    margin-right:auto;
}

h2
{
    text-align:center;
}

label
{
    padding:15px;
    margin-left:200px;
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
<h1 style="font-size: xx-large; text-align: center; color:white;">Remove Inventory</h1>
<br>
<div id="removeinventory" class="div-style">
<h2 style="font-size: x-large; text-align: center; padding-bottom:10px;">Enter Contents Below</h2>
<form action="" method="post">

<label>Ingredient ID:</label>
<input type="text" name="ingredientid" required placeholder="Enter Ingredient ID"/><br><br>

<label>Ingredient Name:</label>
<input type="text" name="ingredientname" required placeholder="Enter Ingredient Name"/><br><br>

<button onclick="window.location.href='MainPage.php'" class="button-style1">
<-- Back to Homepage
</button>

<input type="submit" value=" Remove " name="submit" class="button-style2">
</form>
	
</div>
</html>

<?php
if(isset($_POST["submit"]))
{
include 'dbconfig.php';

$sql = "DELETE FROM ingredients 
WHERE ing_id='".$_POST["ingredientid"]."' or ing_name = '".$_POST["ingredientname"]."'";

if ($conn->query($sql) === TRUE) 
{
echo "
    <script type= 'text/javascript'>
        alert('".$_POST["ingredientname"]."' + ' successfully deleted');
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
