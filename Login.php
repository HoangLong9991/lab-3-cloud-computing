<?php
    if($_SERVER["METHOD"]=="POST")
    {
        $uname = $_POST["username"];
        $pwd = $_POST["password"]
    }
?>
<html lang="en">
<head>
<meta charset = "UTF-8">
<title> ATN Store </title>
</head>
<body>
<form action="" method="post">
    <label><b>Username</b></label> <input type="text" name="username" >
    <label><b>Username</b></label> <input type="text" name="password" >
    <input type = "submit" value = "Submit"/><br/>
</form>
</body>
</html>
