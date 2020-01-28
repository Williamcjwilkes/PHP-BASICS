<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String functions</title>
</head>
<body>
<?php
    $lorem = "fipsum dolor, sit amet consectetur adipisicing elit. Et amet necessitatibus, 
    cumque doloribus sunt dolores ex perspiciatis omnis! Voluptates quisquam impedit voluptatum 
    reprehenderit error labore asperiores nisi vel nam. Molestias!";

    // returning string length 
    //NOTE THIS IS IN BYTES NOT CHARS 
    $length = strlen($lorem);
    echo ("the length of the string for var lorem is: $length <br>");

    // TO COUNT LETTERS, USE UTF8 DECODE, THIS REMOVES FLUFF 
   // first use  echo (utf8_decode($lorem));


    // reverse a string 
    $shortLorem = "lorem ipsum";
    $srtlorm = strrev($shortLorem);
    echo ("The string $shortLorem reversed is: $srtlorm <br>");


    // searching a string for specific text 
    // first char starts at 0 not 1 like arr
    // string / followed by what to search for 
    $ipsumLocate = strpos($shortLorem, "ipsum");
    // this should return 6, the whitespace counts 
    echo("the location of ipsum starts at char: $ipsumLocate<br>");

    // replacing strings 
    //str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] ) 
    $repLorem = "lorem chicken";
    $replor = str_replace("chicken", "ipsum", "lorem chicken"); // specify the word to change, then what with and then the string 
    echo $replor;
    ?>
</body>
</html>