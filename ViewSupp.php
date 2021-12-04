<!DOCTYPE html>
<html>

<head>

    <title>Suppler Information</title>
    <style>
        table {
            border-collapse: separate;
            width: 100%;
            height: 100%;
            padding: 10px;
            margin-left: auto;
            margin-right: auto;
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
            text-align: left;
        }

        th {
            background-color: white;
            font-size: x-large;
            height: 50px;
            width: 60px;
            padding: 15px;
            color: black;
        }

        tr {
            background-color: white;
            text-align: center;
            font-size: medium;
            height: 50px;
            padding: 25px;
            border-bottom: 1px solid #ddd
        }

        tr:nth-child(even) {
            background-color: rgb(199, 199, 199);
            font-size: 15px;
            padding: 25px;
        }

        div {
            background-color: #33475b;
            width: 700px;
            height: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .div-style2 {
            background-color: #33475b;
            width: 50%;
            height: 65%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }

        .button-div {
            height:20%;
            width:15%;
            text-align: center;
        }

        .button-style {
            display: inline-block;
            background-color: #D3D3D3;
            font-family: 'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;
            font-size: large;
            padding: 15px;
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
    </style>
</head>

<body style="background-color:#33475b;">
    <h1 style="font-size: xx-large; text-align: center; color:white">Supplier Info Page</h1>
    <div class = button-div>
        <button onclick="window.location.href='MainPage.php'" class="button-style">
            Back to Homepage
        </button>
    </div>
    <div class="div-style2">
        <table id="suppTable">
            <tr>
                <th>Supplier ID</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
            </tr>
    </div>
    <?php
    $conn = mysqli_connect("localhost", "root", "root", "inventory");

    if (mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_error();
    }

    $sql = "SELECT * FROM suppInfo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
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