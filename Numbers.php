<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>numbers</title>
</head>
<body>
    <?php
    //KEY NOTE - PHP AUTO ASSIGNS AUTO DATA TYPE TO VARS
    //an integer data type is a non-decimal number between -2147483648 and 2147483647
    $a = 23456; 
    $b = 1.235;
    $convert = 91;
    // use is_int() function with var dump
    var_dump(is_int($a));
// this should return true - its an int
    echo "<br>";
    var_dump(is_int($b));// this should return false - its an float
    echo "<br>";
/*ints can be converted into different bases , ie base 2 , 10
    rules  - from and to have to be between 2- 36 
           - digits with a base higher than 10 will be represented with letters
           
*/
    $base2 = base_convert($convert, 10 ,2);//number to convert , current base of number , what to convert to 
    echo "$convert converted to base 2 is: $base2<br>";


    // NaN - not a number 
    // if the value isnt a number it will return NaN 
    // example
    $num = acos(8); 
    var_dump($num);
    echo "<br>";

    // checking if a variable is of numerical value 
    // use is_numerical in car dump to give boolean value 
    $var1 = 1234;
    $var2 = 2345;
    $var3 = "misschien";
    $var4 = 1.234;

    var_dump(is_numeric($var1));// CHECKS IF THE VALUE IS A NUMBER, TRUE = NUMBER FALSE = NaN
    echo "<br>";
    var_dump(is_numeric($var2));
    echo "<br>";
    var_dump(is_numeric($var3));
    echo "<br>";
    var_dump(is_numeric($var4));
    echo "<br>";

    /* NOTE YOU CAN USE IS_ ON
        - is_float() - Finds whether the type of a variable is float
        - is_int() - Find whether the type of a variable is integer
        - is_bool() - Finds out whether a variable is a boolean
        - is_object() - Finds whether a variable is an object
        - is_array() - Finds whether a variable is an array
*/

    // CASTING STRINGS AND FLOATS TO INTS 
    $floatToInt = 1234.321;
    $stringToInt = "1234.786";

    $float_to_int = (int)$floatToInt;
    echo "the float $floatToInt converted to integer: $float_to_int <br> ";


    $string_to_int = (float)$stringToInt;
    echo "the string $stringToInt converted to float: $string_to_int <br> ";
    ?>
</body>
</html>