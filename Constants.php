<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php Constants</title>
</head>
<body>
    <?php
        // constants are variables but cannot be changed 
        // starts with letter or underscore  and no $ 
        // automatically global 
        // define (name , value , case-insensitve)

        define("valueOfPi", 3.14159); // didnt add case by default its false and using a number 

        echo valueOfPi;

        // because the const is global you can inclue it in functions 
        
        function piCalc(){
            $number = 10; // change this number to see if it works 
            $numberSum = $number * valueOfPi; 
            echo "<br> $numberSum ";
        }
        
        piCalc();
    ?>
</body>
</html>