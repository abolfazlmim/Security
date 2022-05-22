<?php 
$login='
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Login</title>
</head>
<body>
    <form method="POST" action="?">
<input type="text" name="surname" value="">
<input type="password" name="password" value="">
<input type="submit" name="submit" value="">
    </form>
</body>
</html> ';

$panel = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Login</title>
</head>
<body>
h1>welcome to panel </h1>
</body>
</html>';


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'admin' && $password == '123') {
        echo $panel;
    } else {
        echo "invalid credetial "  ; 
    }
} else {
    echo $login;
}


?>