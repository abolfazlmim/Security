<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to server </h1>
    Pelase Provide a directory
    <form  method="GET" action="dir.php">
        <input type="text" name="directory">
        <input type="submit" name="submit" value="Submit">

    </form>
<pre>
<?php
if (isset($_GET['submit'])){
    $dir = "./" . $_GET['directory'];
    print($dir);  
    
    echo "<br>";
    echo "contects of directory ";
    print_r(scandir($dir));
}
 ?>

</body>
</html>
