<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Forms</title>
</head>
<body>
    <form action="Basic -Form.php" method="get">
        <input type="text" name="userName">
        <input type="email" name="userEmail">
        <br> 
        <input type="submit">
    </form>
    
    your name is : <?php echo $_GET["userName"];?>
    <br>
    your email is : <?php echo $_GET["userEmail"];?>
</body>
</html>