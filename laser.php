<?php include ("databaseconnectie.php"); ?>
<?php include ("button.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laser interface</title>
</head>
<body>


    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }
        table {
            border-collapse: collapse;
            border: 1px solid black;
            background-color: #B9B4C2;
            padding: 300px;
        }

        th {
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: 100;
        }

        td {
            border: 1px solid black;
            width: 120px;
            font-family: Arial Narrow, sans-serif;
        }
        
        input[type="text"] {
            padding: 4px;
            margin: 1px;
            font-family: Arial, sans-serif;
        }

        button[type="submit"] {
            background-color: #797485;
            color: white;
            border: none;
            padding: 8px 15px;
            margin: 4px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 10px;
            font-family: Arial, sans-serif;
        }

        button[type="submit"]:hover {
            background-color: #474350;
        }

        #date-time-container {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            font-family: Arial, sans-serif;
            font-weight: 100;
        }

        #date-time-container span {
            font-weight: bold;
        }
        a {
            margin-right: 194px;
        }
    </style>
</body>
</html>