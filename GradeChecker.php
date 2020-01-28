<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade Checker</title>
</head>
<body>
    <form action="GradeChecker.php" method="POST">
   Students Name: <input type="text" name="student">
   <input type="submit">
    </form>



    <?php
    $student_names = array(
        "william" => 90,
        "suzy" => 50,
        "mckenzii" => 30,
        "molly" => 40,
        "hayley" => 55
    );



    echo $student_names[$_POST["student"]];
    ?>
</body>
</html>