<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  MadLibs  </title>
</head>
<body>
    <form action="madLibs.php" method="get">
   please enter a noun:  <input type="text" name="noun"><br>
   please enter a plural noun <input type="text" name="pluralNoun"><br>
   please enter a color <input type="text" name="color"><br>
   please enter a animal <input type="text" name="animal"><br>
   <input type="submit">
    </form>

    <?php
    // assign variables for the sentence 
    $_noun = $_GET["noun"]; 
    $_plural_noun = $_GET["pluralNoun"]; 
    $_color = $_GET["color"]; 
    $_animal = $_GET["animal"]; 
        
    echo "$_noun there was a man who drove a $_plural_noun <br>";
    echo "that was $_color which have a $_animal on the back";

    ?>



</body>
</html>