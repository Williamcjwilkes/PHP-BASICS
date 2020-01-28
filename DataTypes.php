<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Types</title>
</head>
<body>
    <?php
/*PHP supports the following data types:
    -integer
    -String
    -Float (floating point numbers - also called double)
    -Boolean
    -Array
    -Object
    -NULL
    -Resource
*/


// VARIABLES DATA TYPES 
$int = 12345; // number thats not a decimal use a float for decimal 
$str = "string"; //sequence of chars 
$flt = 1.2345; // used for decimal numbers 
$bool = true; // used to say if somethings true or false commonly used in if/while loops 
$arr = array("stores","multiple","values");
$null = null; // null is assigned to empty vars , even if you didnt specify 

/* there is obejects aswell but will be using them in future file 

unsure of what a var is you can use 
var_dump();
*/
var_dump($int);
var_dump($str);
var_dump($flt);
var_dump($bool);
var_dump($arr);
var_dump($null);

    ?>
</body>
</html>